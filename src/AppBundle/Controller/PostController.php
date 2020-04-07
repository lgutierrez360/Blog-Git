<?php 

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface; 
use AppBundle\Entity\Posts;
use AppBundle\Entity\Users;
use AppBundle\Form\PostType;

//use Kilik\TableBundle\Components\ApiTable;
use AppBundle\table\Components\ApiTable;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
 * KilikTableBundle
 */
use Kilik\TableBundle\Components\Column;
use Kilik\TableBundle\Components\Filter;
use Kilik\TableBundle\Components\Table;

//use GuzzleHttp\Psr7\Request;
//use GuzzleHttp\Psr7\Response; # for create a response

class PostController extends Controller{
    
    /**
    *@return Confirmacion | fallo de insert del nuevo Blog
    */
    public function create_post(Request $request){
        #recoger los datos por post
        //$dataForm = $request->get('dataForm',null);        
        $_titulo        = $request->get('_titulo',null) ;
        $_cuerpo        = $request->get('_cuerpo',null) ;
        $_autor        = $request->get('_autor',null) ;
              
        $params = array(
        	'titulo'  => $_titulo,        
			'cuerpo'  => $_cuerpo,        
			'autor'  => $_autor        
        );
        #comprobar y validar datos
    	$titulo = (!empty($_titulo))?$_titulo:null;  
    	$titulo = (!empty($_cuerpo))?$_cuerpo:null;  
    	$titulo = (!empty($_autor))?$_autor:null;  			             

        if (!empty($titulo) && !empty($cuerpo) && !empty($autor)){

            $doctrine = $this->getDoctrine();
            $post_insert = $doctrine->getManager();
            $post_db  = $doctrine->getRepository('AppBundle:Posts');
            
            #si la validacion es correcta crear  el post (Blog) 
            $post = new Posts();
            $post->setCuerpo($cuerpo);
            $post->setTitulo($titulo);
            $post->setAutor($autor);                
            $post->setFechaCreacion(new \Datetime('now'));
                                           
            #guardo el post
            $post_insert->persist($post);
            $post_insert->flush();
         
            $data=[
                'status'=>'success',
                'code'=>200,
                'message'=>'El Blog fue creado correctamente.',
                'user'=>$post
            ];                    
                              
        }else{
            $data=[
                'status'=>'error',
                'code'=>400,
            	'message'=>'Todos los campos son obligatorio.'                    
            ];
        }        
        #respuesta json
        return $this->resjson($data);
    }

    /**
    *@return Confirmacion | fallo de Delete Post (Blog)
    */
    public function delete_post(Request $request){
        #Obtener del post
        $doctrine = $this->getDoctrine();
        $post_insert = $doctrine->getManager();
        $post_db  = $doctrine->getRepository('AppBundle:Posts');
        $post = $post_db->findBy(1);
	
	    $data=[
	        'status'=>'success',
	        'code'=>200,
	        'message'=>'El Blog fue eliminado correctamente.',
	        'user'=>$post
	    ];    

		echo '<pre>';
		var_dump($data);
		echo '</pre>';
		die();
        
    }
    /**
     * @Route("/post", name="post")
     */
    public function post(Request $request, UserInterface $user){
        
        return $this->render(            
            '@AppBundle/Resources/views/table_post/table_post_filter.html.twig',[
                'table'=> $this->get('kilik_table')->createFormView(
                    $this->tablePostUser($user)
                )
            ]
        );
    }

    /**
     * @Route("/post_user_ajax", name="post_user_ajax")
     */
    public function ajaxPostUserAction(Request $request,UserInterface $user){

        return $this->get('kilik_table')->handleRequest(
            $this->tablePostUser($user),
            $request
        );
    }
    /*
    *Funcion que recupera todos los POST (Blog) de un usuario
    */
    public function tablePostUser($user){   
    	#Obtengo solo los posts posteados por el usuario actual 
        $queryBuilder = $this->getDoctrine()->getManager()->getRepository(Posts::class)->createQueryBuilder('p')->select('p')
        	->where('p.author = :author')        
        	->setParameter('author',$user->getId());

        $table = (new Table())
            ->setRowsPerPage(10)
            ->setId('table_posts')
            ->setPath($this->generateUrl('post_user_ajax'))
            ->setQueryBuilder($queryBuilder, 'p')
            //->setTemplate('@AppBundle/Resources/views/table/_defaultTable.html.twig')                        
            ->setTemplate('@AppBundle/Resources/views/table_post/table_post_logueado.html.twig')                        

            ->addColumn(
                (new Column())->setLabel('Id')
                    ->setSort(['p.id' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('p.id')
                            ->setName('p_id')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Titulo')
                    ->setSort(['p.title' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('p.title')
                            ->setName('p_title')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Creado')
                    ->setSort(['p.create_at' => 'asc'])
                    ->setDisplayFormat(Column::FORMAT_DATE)
                    ->setDisplayFormatParams('d/m/Y')
                    ->setFilter(
                        (new Filter())
                            ->setField('p.create_at')
                            ->setName('p_create_at')
                    )
            );
           
        return $table;   
    }
    

     /**
     * @Route("/post/{id}", name="detail")     
     *
     */
    public function detail(Posts $post){ 
   	    if (!$post){
            return $this->redirectToRoute('post');
        }else{
            return $this->render('@AppBundle/Resources/views/table_post/view_post.html.twig',[
                'post'=>$post

            ]); 
        }    	 	        
    }
    /**
    * @Route ("/create_post", name ="create_post")
    */
    public function createPost(Request $request, UserInterface $user){
    	
    	#Crear el Formulario
    	$post = new Posts();
    	$form = $this->createForm(PostType::class,$post);

    	#Rellenar el formulario con los datos del Request
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
        	$post->setCreate_at(new \Datetime('now'));
        	$post->setAuthor($user);        	        	            

        	$post_insert = $this->getDoctrine()->getManager();
        	$post_insert->persist($post);
        	$post_insert->flush();
        	
        	return $this->redirect(
        		$this->generateUrl('detail',['id'=>$post->getId()])
        	);
        }

    	return $this->render('@AppBundle/Resources/views/table_post/create_post.html.twig',[
    		'form'=>$form->createView()
    	]);
    }
     /**
     * @Route("/post/delete/{id}", name="deletePost")     
     *
     */
    public function delete(Posts $post){    	
    		
    	if (!$post){
    		return $this->redirectToRoute('post');
    	}else{
    		$post_insert = $this->getDoctrine()->getManager();
    		$post_insert->remove($post);
        	$post_insert->flush();

    		return $this->redirectToRoute('post');
    	}
        
    }
     /**
     * @Route("/post/edit/{id}", name="editPost")     
     *
     */
    public function editPost(Request $request,  Posts $post,UserInterface $user){    	
    	#Editar el Formulario
    	$form = $this->createForm(PostType::class,$post);

    	#Rellenar el formulario con los datos del Request
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
        	$post->setCreate_at(new \Datetime('now'));
        	$post->setAuthor($user);        	        	            

        	$postJson  = json_encode($post,true);  
			echo '<pre>';
			dump(gettype($post));
			echo '</pre>';
			die();



        	$post_edit = $this->getDoctrine()->getManager();
        	$post_edit->persist($post);
        	$post_edit->flush();
        	
        	return $this->redirect(
        		$this->generateUrl('detail',['id'=>$post->getId()])
        	);
        }

    	return $this->render('@AppBundle/Resources/views/table_post/create_post.html.twig',[
    		'form'=>$form->createView()
    	]);
        
    }
}


?>
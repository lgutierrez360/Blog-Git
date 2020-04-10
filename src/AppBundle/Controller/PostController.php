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
     * @Route("/post/{id}", name="detailPostLogueado")     
     *
     */
    public function detailPostLogueado(Posts $post){ 
   	    if (!$post){
            return $this->redirectToRoute('post');
        }else{
            return $this->render('@AppBundle/Resources/views/table_post/view_post.html.twig',[
                'post'=>$post

            ]); 
        }    	 	        
    }
    /**
     * @Route("/blog/{id}", name="detailPostPublico")     
     *
     */
    public function detailPostPublico(Posts $post){ 
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
            #estilo a titulo y a parrafo
            
            $decorador = $this->get('app.transform_text');            
        	
            $titleConverted = $decorador->convertTextForm($post->getTitle());
            $bodyConverted  = $decorador->convertTextForm($post->getBody());
            $post->setTitle($titleConverted);                                    
            $post->setBody($bodyConverted);                               

            $post->setCreate_at(new \Datetime('now'));
        	$post->setAuthor($user);        	        	            
        	$post_insert = $this->getDoctrine()->getManager();

        	$post_insert->persist($post);
        	$post_insert->flush();
        	
        	return $this->redirect(
        		$this->generateUrl('detailPostLogueado',['id'=>$post->getId()])
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
    public function editPost(Request $request,  Posts $post){    	
    	#Editar el Formulario
    	$form = $this->createForm(PostType::class,$post);

    	#Rellenar el formulario con los datos del Request
        $form->handleRequest($request);

        if ($form->isSubmitted()) {

            #llamo al servicxio decorador
            $decorador = $this->get('app.transform_text');            
            
            $titleConverted = $decorador->convertTextForm($post->getTitle());
            $bodyConverted  = $decorador->convertTextForm($post->getBody());
            $post->setTitle($titleConverted);                                    
            $post->setBody($bodyConverted);
        	$post->setCreate_at(new \Datetime('now'));	

        	$post_edit = $this->getDoctrine()->getManager();
        	$post_edit->persist($post);
        	$post_edit->flush();
        	
        	return $this->redirect(
        		$this->generateUrl('detailPostLogueado',['id'=>$post->getId()])
        	);
        }

    	return $this->render('@AppBundle/Resources/views/table_post/create_post.html.twig',[
    		'form'=>$form->createView()
    	]);
        
    }
}


?>
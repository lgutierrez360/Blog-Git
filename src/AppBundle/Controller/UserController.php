<?php 

namespace AppBundle\Controller;
//namespace Kilik\TableDemoBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;    #para validar email
use Symfony\Component\HttpFoundation\Session\Session; #para el manejo de sesiones

use AppBundle\Entity\Users;
//use AppBundle\Entity\Posts;
use AppBundle\Form\RegisterType;

//use AppBundle\Repository\UserRepository;


//use Kilik\TableBundle\Components\ApiTable;
use AppBundle\table\Components\ApiTable;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/*
 * KilikTableBundle
 */

use Kilik\TableBundle\Components\Column;
use Kilik\TableBundle\Components\Filter;
use Kilik\TableBundle\Components\Table;


class UserController extends Controller{
    private function resjson($data){
        //serializar datos con servicio serializer
        $json = $this->get('serializer')->serialize($data,'json');
        //responder con httpfoundation 
        $response = new Response(); 
        //asignar contenido a la respuesta
        $response->setContent($json);
        //indicar formato de respuesta
        $response->headers->set('Content-Type','application/json');
        //devolver la respuesta
        return $response;
    }
     /**
     * @Route("/user", name="user")
     */
    public function index(){
        $user_repo = $this->getDoctrine()->getManager();
        $repo  = $user_repo->getRepository('AppBundle:Users');
        $users = $repo->findAll();
        $user = $repo->find(1);
        
        return $this->resjson($users);                      

        /*foreach ($users as $user) {
             echo "{$user->getNombre()} {$user->getApellido()}";
        }
        die();*/
    
    
        /*return $this->json([
            'message' => 'Welcome a new UserController',
            'path' => 'src/Controller/PostController.php'
        ]);*/
    }

   
    /*public function register(Request $request ){
        $user = new Users;
        $form = $this->createForm(RegisterType::class,$user);
        return $this->render('security/register.html.twig',[
            'form'=>$form->createView()
        ]);
    }*/


     /**
     * @Route("/create", name="create")
     */
    /* 
    public function create(Request $request){
        #recoger los datos por post
        //$dataForm = $request->get('dataForm',null);        
        $_nombre        = $request->get('_nombre',null) ;
        $_apellido      = $request->get('_apellido',null) ;
        $_email         = $request->get('_email',null) ;
        $_nombreUser    = $request->get('_nombreUser',null) ;
        $_clave         = $request->get('_clave',null) ;
        $_clave_repetir = $request->get('_clave_repetir',null) ;

        $params = array(

            'nombre'=> $_nombre,       
            'apellido'=> $_apellido,     
            'email'=> $_email,        
            'nombreUser'=> $_nombreUser,   
            'clave'=> $_clave,        
            'clave_repetir'=> $_clave_repetir
        );

        #comprobar y validar datos
        if ($params!=null){
            
            $nombre         = (!empty($params['nombre']))? $params['nombre']:null;
            $apellido       = (!empty($params['apellido']))? $params['apellido']:null;
            $email          = (!empty($params['email']))? $params['email']:null;
            $nombreUser     = (!empty($params['nombreUser']))? $params['nombreUser']:null;
            $clave          = (!empty($params['clave']))? $params['clave']:null;            
            $clave_repetir  = (!empty($params['clave_repetir']))? $params['clave_repetir']:null;            
            
            #Validador de email
            $validator = Validation::createValidator();
            $validate_email = $validator->validate($email,[new Email()]);  

            if (!empty($nombre) && !empty($apellido) && !empty($email) && count($validate_email)==0 && !empty($clave) && ($clave ==$clave_repetir)){
                #si la validacion es correcta crear  el usuario 
                $user = new Users();
                $user->setNombre($nombre);
                $user->setApellido($apellido);
                $user->setEmail($email);
                $user->setNombreuser($nombreUser);
                $user->setClave($clave);
                $user->setActivo('NO');
                $user->setAdministrador('NO');
                $user->setFechaCreacion(new \Datetime('now'));
                #cifrar la contrasenia
                $pwd= hash('sha256', $clave);
                $user->setClave($pwd);
                
                #comprobar si el usuario existe (duplicado)
                $doctrine = $this->getDoctrine();
                $user_insert = $doctrine->getManager();
                $user_db  = $doctrine->getRepository('AppBundle:Users');

                $isset_user =$user_db->findBy(array(
                    'email' => $email 
                ));

                if (count($isset_user)==0){
                    #guardo el usuario
                    $user_insert->persist($user);
                    $user_insert->flush();

                    $data=[
                        'status'=>'success',
                        'code'=>200,
                        'message'=>'El usuario fue creado correctamente.',
                        'user'=>$user
                    ];    
                }else{
                    $data=[
                    'status'=>'error',
                    'code'=>400,
                    'message'=>'El usuario ya existe.'
                    ];    
                }
                                  
            }else{
                $data=[
                    'status'=>'error',
                    'code'=>200,
                    'message'=>'Validacion incorrecta.'
                ];
            }
        }else{
            $data=[
                'status'=>'error',
                'code'=>200,
                'message'=>'Todos los campos son obligatorio.'
            ];
        } 
     
        #respuesta json
        //return $this->resjson($data);
        return $this->resjson($data);
    }
    */

     /**
     * @Route("/user/{id}", name="detailUser")     
     *
     */
    public function detailUser(Users $user){        
            
        if (!$user){
            return $this->redirectToRoute('profile');
        }else{
            return $this->render('@AppBundle/Resources/views/table_user/view_user.html.twig',[
                'user'=>$user

            ]); 
        }
        
    }
     /**
     * @Route("/user/status/{id}", name="estatusUser")     
     *
     */
    public function estatusUser(Users $user){        

        if (!$user){
            return $this->redirectToRoute('profile');
        }else{
            ($user->getActive() == 'SI')? $status = 'NO' : $status = 'SI';
            
            $user->setActive($status);

            $user_active = $this->getDoctrine()->getManager();
            $user_active->persist($user);
            $user_active->flush();
            return $this->redirectToRoute('profile');
        }
        
    }   
    
    #METODOS USADOS PARA EL MANEJO DE KILIK TABLE

    /**
     * @Route("/profile", name="profile")
     */
    public function profile(Request $request){
        
        return $this->render(            
            '@AppBundle/Resources/views/table_user/table_user_filter.html.twig',[
                'table'=> $this->get('kilik_table')->createFormView(
                    $this->tableUsersTable()
                )
            ]
        );
    }
    /**
     * @Route("/list_user_ajax", name="list_user_ajax")
     */
    public function ajaxListUserAction(Request $request){

        return $this->get('kilik_table')->handleRequest(
            $this->tableUsersTable(),
            $request
        );
    }
    /*
    * Estgo es una prueba
    */
    public function getUsersAction()
    {
        $data = array("Usuarios" => array(
        array(
            "nombre"   => "Víctor",
            "Apellido" => "Robles"
        ),
        array(
            "nombre"   => "Antonio",
            "Apellido" => "Martinez"
        )));
         
        return $data;
    }

    public function tableUsersTable(){
        //$em = $this->getDoctrine()->getManager();
        //$queryBuilder = $em->getRepository(Users::class)->getQueryTable();        

        $queryBuilder = $this->getDoctrine()->getManager()->getRepository(Users::class)->createQueryBuilder('u')->select('u')
            ->where('u.administrator = :administrator')
            ->setParameter('administrator', 'NO');

        $table = (new Table())
            ->setRowsPerPage(10)
            ->setId('table_users')
            ->setPath($this->generateUrl('list_user_ajax'))
            ->setQueryBuilder($queryBuilder, 'u')
            ->setTemplate('@AppBundle/Resources/views/table/_defaultTable.html.twig')
            ->addColumn(
                (new Column())->setLabel('Id')
                    ->setSort(['u.id' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.id')
                            ->setName('u_id')
                    )
            )            
            ->addColumn(
                (new Column())->setLabel('name')
                    ->setSort(['u.name' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.name')
                            ->setName('u_name')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Apellido')
                    ->setSort(['u.surname' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.surname')
                            ->setName('u_surname')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Email')
                    ->setSort(['u.email' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.email')
                            ->setName('u_email')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Activo')
                    ->setSort(['u.active' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.active')
                            ->setName('u_active')
                    )
            )
            ->addColumn(
                (new Column())->setLabel('Administrador')
                    ->setSort(['u.administrator' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.administrator')
                            ->setName('u_administrator')
                    )
            );
        return $table;
    }        
}


?>
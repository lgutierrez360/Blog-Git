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
use AppBundle\Form\RegisterType;

//use AppBundle\Repository\UserRepository;

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
    
        /*return $this->json([
            'message' => 'Welcome a new UserController',
            'path' => 'src/Controller/PostController.php'
        ]);*/
    }
   

     /**
     * @Route("/user/{id}", name="detailUser")     
     *
     */
    public function detailUser($id){        
        $em = $this->getDoctrine()->getRepository(Users::class);
        $user = $em->findOneBy([
            'id' => $id
        ]);
        if (!isset($user) || empty($user) || !is_object($user) ){

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
    public function estatusUser($id){        
        $em = $this->getDoctrine()->getRepository(Users::class);
        $user = $em->findOneBy([
            'id' => $id
        ]);
        if (!isset($user) || empty($user) || !is_object($user) ){

            return $this->redirectToRoute('profile');
        }else{
            ($user->getIsActive() == true)? $status = false : $status = true;
            
            $user->setIsActive($status);

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
                    ->setSort(['u.is_active' => 'asc'])
                    ->setFilter(
                        (new Filter())
                            ->setField('u.is_active')
                            ->setName('u_is_active')
                    )
                    #setRaw(true) enabled styles
                    ->setRaw(true)
                    ->setDisplayCallback(
                        function ($value, $row) {
                            /* En este contexto $value almacena el valor de activo 0:false | 1:true
                                return "<font color='red'>" .$value.'</font>';
                            */
                            if ($value) {
                                return "<font color='green'><b>Activo</b></font>";
                            } else {
                                return "<font color='red'><b>Inactivo</b> </font>";
                            }
                        }
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
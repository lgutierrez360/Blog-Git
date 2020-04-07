<?php

namespace ApiBundle\Controller;
     

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

use AppBundle\Entity\Users;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;     
use AppBundle\Services\JwtAuth;
/**
 * 
 */
class ApiUserController extends Controller{
     /**
     * @Route("/login_blog", name="login_blog")
     */
    
    public function loginApiAction(Request $request, JwtAuth $jwt_auth){
        
        $data = [
            'status'       => 'error',
            'code'         =>  400,
            'message'      => 'No se pudo loguear'
        ];
        #recoger los datos por post            

        $json = $request->get('json',null);
        $params = json_decode($json);  
        
        if( !empty($json) ){
            //$data = $jwt_auth->pruebajw();
            #$jwt_auth = new JwtAuth();

            $email     = ( !empty($params->email) )?$params->email:null;
            $password  = ( !empty($params->password) )?$params->password:null;
            $getToken  = ( !empty($params->getToken) )?$params->getToken:null;
            
            if (!empty($email) && !empty($password) ){
                #cifrar la contrasenia                
                $opciones = [
                    'cost' => 4,
                ];
                $psw = password_hash($password, PASSWORD_BCRYPT, $opciones);

                #Obtengo el token
                if (!empty($getToken)) {
                    $signup = $jwt_auth->signup($email, $psw, $getToken); 
                }else{
                    $signup = $jwt_auth->signup($email, $psw); 
                    echo '<pre>';
                    dump($signup);
                    echo '</pre>';
                    die();
                }
                $data = $signup;
            }
        }      

        return new JsonResponse($data);                    
    }
    
}
    
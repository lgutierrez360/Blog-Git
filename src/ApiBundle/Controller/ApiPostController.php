<?php

namespace ApiBundle\Controller;

//use DateTime;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserInterface;

use AppBundle\Entity\Users;
use AppBundle\Entity\Posts;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/*Configuracion para el RESTBUNDLE*/
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ApiPostController extends Controller
{    
    /**
    * @return array 
    */
    private function serializarPost(Posts $post){
        return array(
          'id'      => $post->getId(),
          'title'   => $post->getTitle(),
          'body'    => $post->getBody(),
          'author'  => $post->getAuthor()
      );
    }
    /**
    * @return Rpta Json Post 
    */
    public function showPostAction(Request $request, $id=null){    	
        $data = [
            'status'       => 'error',
            'code'         =>  400,
            'message'      => 'Post no encontrado'
        ];   
        if (isset($id) && !empty($id)){
        	$post= $this->getDoctrine()->getRepository(Posts::class)->findOneBy([
        		 'id' => $id
        	]);

            if($post && is_object($post)) {            
                $post_array = $this->serializarPost($post);                    
                $data = [
                    'status'       => 'success',
                    'code'         => 200,               
                    'post'         => $post_array                
                ];

            }
        }        
        //return resjson($data);
        return new JsonResponse(
            ['post' => $data]
        );
    }
    /**
    * @return Rpta Json de la confirmacion de la eliminacion del Post 
    */    

    public function deletePostAction(Request $request, $id=null){
        $data = [
            'status'       => 'error',
            'code'         =>  400,
            'message'      => 'No se pudo eliminar el Post'
        ];
        if (isset($id) && !empty($id)) {
            $post= $this->getDoctrine()->getRepository(Posts::class)->findOneBy([
                 'id' => $id
            ]);          

            if($post && is_object($post)) {            
                #Elimino el post
                $post_delete = $this->getDoctrine()->getManager();
                $post_delete->remove($post);
                $post_delete->flush();
                $post_delete->clear();
                
                $post_array = $this->serializarPost($post);                    
                
                $data = [
                    'status'       => 'success',
                    'code'         => 200,               
                    'post'         => $post_array                
                ];
            }

        }
        return new JsonResponse(
            ['post' => $data]
        );
    }

    //public function saveEntradaAction(Request $request){
    public function savePostAction(Request $request, JwtAuth $jwt_auth){
    	#respuesta por default
    	$data=[
	        'status'=>'error',
	        'code'=>400,
	        'message'=>'No se pudo crear el Blog.'				        
	    ]; 

    	#recoger el token 
    	$token= $request->header->get('Authorization',null);
    	#Comprobar el token
    	$auth_check =  $jwt_auth->checkToken($token);
    	if ($auth_check){
    		#recoger datos por post
    		$json = $reguest->get('json',null);
    		$params = json_decode($json);

    		#recojemos el objeto del usuario identificado
    		$identity =  $jwt_auth->checkToken($token,true);

    		#comprobar y validar los datos
    		if (!empty($json)) {
				$author = ($identity->sub != null)?$identity->sub:null;
				$title = ( !empty($params->title) )?$params->title:null;
				$body = ( !empty($params->body) )?$params->body:null;
				
				if (!empty($author) && !empty($title) && !empty($body)) {
					#guardar el post
					$post_insert = $this->getDoctrine()->getManager();
					$user= $this->getDoctrine()->getRepository(Users::class)->findOneBy([
						'id' => $author
					]); 	
					
					$post = new Posts();
					$post->setAuthor($user); 
					$post->setTitle($title); 
					$post->setBody($body); 
					$post->setCreate_at(new \Datetime('now'));

					$post_insert->persist($post);
        			$post_insert->flush();


        			$data=[
				        'status'=>'success',
				        'code'=>200,
				        'message'=>'El Blog fue Correctamente creado.'				        
				    ]; 
				}
    		}
    	}
		return $this->resjson($data);    			
		//return $this->JsonResponse($data);    			                       
    }

    public function editPostAction(Request $request){
        #Control de logueo de usuario
        /*if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        }
        $user = $this->getUser();*/

        #respuesta por default
        $data=[
            'status'=>'error',
            'code'=>400,
            'message'=>'No se pudo crear el Blog.'                      
        ]; 
        #recoger datos por post
        $json = $request->get('json',null);
        $params = json_decode($json);

        if( !empty($json) ){

            //$author = ($identity->sub != null)?$identity->sub:null;
            $author = ( !empty($params->author) )?$params->author:null;
            $title  = ( !empty($params->title) )?$params->title:null;
            $body   = ( !empty($params->body) )?$params->body:null;
            

            if (!empty($author) && !empty($title) && !empty($body)) {

                #nuevo post
                $post_save = $this->getDoctrine()->getManager();
                $post = new Posts();
                $post->setAuthor($author); 
                $post->setTitle($title); 
                $post->setBody($body); 
                $post->setCreate_at(new \Datetime('now'));

                $post_save->persist($post);
                $post_save->flush();
                
                $data=[
                    'status'=>'success',
                    'code'=>200,
                    'message'=>'El Blog se creo correctamente.'                      
                ];
            }

        }
        return new JsonResponse(
            ['post' => $data]
        );
    }

}

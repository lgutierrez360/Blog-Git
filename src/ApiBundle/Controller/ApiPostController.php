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

class ApiPostController extends Controller{    
    /**
    * @param $post | json 
    * @return post | array 
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
    * @param  id | int. 
    */
    public function showPostAction(Request $request, $id=null){
        
        #respuestas por default
        $data = [
            'status'       => 'error',
            'code'         =>  400,
            'message'      => 'Post no encontrado'
        ];   

        #llamada al servicio JWT        
        $jwt_auth = $this->get('app.jwtauth');
        
        #Recoger la cabecer de autenticacion 
        $token = $request->headers->get('Authorization');
        #Comprobar que el metodo es correcto
        $authCheck = $jwt_auth->checkToken($token);


        if ($authCheck) {
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
        } 
        //return resjson($data);
        return new JsonResponse(
            ['post' => $data]
        );
    }

    /**
    * @param  id | int. 
    * @return Rpta Json de la confirmacion de la eliminacion del Post 
    */ 
    public function deletePostAction(Request $request, $id=null){
        $data = [
            'status'       => 'error',
            'code'         =>  400,
            'message'      => 'No se pudo eliminar el Post'
        ];
        #llamda al servicio JWT        
        $jwt_auth = $this->get('app.jwtauth');
        
        #Recoger la cabecer de autenticacion 
        $token = $request->headers->get('Authorization');
        #Comprobar que el metodo es correcto
        $authCheck = $jwt_auth->checkToken($token);

        if ($authCheck) {
            if (isset($id) && !empty($id)) {
                $post= $this->getDoctrine()->getRepository(Posts::class)->findOneBy([
                     'id' => $id
                ]);          
                $identity = $jwt_auth->checkToken($token,true);

                if($post && is_object($post) && is_object($post) && $post->getAuthor()->getId()==$identity->sub) {            
                    #Elimino el post
                    $post_delete = $this->getDoctrine()->getManager();
                    $post_delete->remove($post);
                    $post_delete->flush();
                    $post_delete->clear();
                    
                    $post_array = $this->serializarPost($post);                    
                    
                    $data = [
                        'status'       => 'success',
                        'code'         => 200,               
                        'message'      => 'Post eliminado'                
                    ];
                }
            }
        }        
        return new JsonResponse(
            ['post' => $data]
        );
    }

    /**
    * @param  id | int del Post (Blog). 
    * @return Rpta Json confirmacion save del Post 
    */
    public function savePostAction(Request $request, $id=null){
        #respuesta por default
        $data=[
            'status'=>'error',
            'code'=>400,
            'message'=>'No se pudo crear el Blog.'                      
        ]; 

        #llamada al servicio JWT        
        $jwt_auth = $this->get('app.jwtauth');
        
        #Recoger la cabecer de autenticacion 
        $token = $request->headers->get('Authorization');

        #Comprobar que el metodo es correcto
        $authCheck = $jwt_auth->checkToken($token);
        
        if ($authCheck){
            #recoger datos por post
            $json = $request->get('json',null);

            #recojemos el objeto del usuario identificado
            $identity =  $jwt_auth->checkToken($token,true);

            #comprobar y validar los datos
            if (!empty($json)) {
                $params = json_decode($json);

                $author = ($identity->sub != null)?$identity->sub:null;
                $title = ( !empty($params->title) )?$params->title:null;
                $body = ( !empty($params->body) )?$params->body:null;
                #comprueba la existencia del usuario        
                $user= $this->getDoctrine()->getRepository(Users::class)->findOneBy([
                    'id' => $author
                ]);                             
                
                if (!empty($author) && !empty($title) && !empty($body) && is_object($user)) {

                    $post_save = $this->getDoctrine()->getManager();
                    if ($id == null){
                        #crear nuevo post
                        $post = new Posts();
                        $post->setAuthor($user);                                    
                        $post->setTitle($title); 
                        $post->setBody($body); 
                        $post->setCreate_at(new \Datetime('now'));
                        $post_save->persist($post);
                        $post_save->flush();
                        
                        $data=[
                            'status'=>'success',
                            'code'=>200,
                            'message'=>'El Blog fue Correctamente creado.'                      
                        ]; 
                        
                    }else{
                        #update post existente
                        $post= $this->getDoctrine()->getRepository(Posts::class)->findOneBy([
                            'id'     => $id,
                            'author' => $identity->sub
                        ]);
                        if (isset($post) && !empty($post) && is_object($post)) {
                            $post->setTitle($title); 
                            $post->setBody($body);                         

                            $post_save->persist($post);
                            $post_save->flush();
                            $data=[
                                'status'=>'success',
                                'code'=>200,
                                'message'=>'El Blog fue actualizado creado.'                      
                            ];
                        }                         
                    }
                }
            }
        }        
        return new JsonResponse(
            ['post' => $data]
        );                                     
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

<?php
namespace AppBundle\Services;
use Firebase\JWT\JWT;
use AppBundle\Entity\Users;

/**
 * 
 */
class JwtAuth{

	public $manager;

	public $key = 'clave_login_user';

	//public function __construct($manager){
	//	$this->manager =$manager; 
	//}


	public function signup($email, $password, $getToken=null){
		#comprobar si el usuario existe
		$user = $this->manager->getRepository(Users::class)->findOneBy([
		#$user = $this->getDoctrine()->getRepository(Users::class)->findOneBy([
			'email'    => $email,
			'password' => $password

		]);
		
		$signup =false;
		if (is_object($user)) {
			$signup =true;			
		}
		#si existe generar el token de seguridad
		if ($signup) {
			
			$token =[
				'id'=>$user->getId(),
				'name'=>$user->getName(),
				'surname'=>$user->getSurname(),
				'email'=>$user->getEmail(),
				'nick'=>$user->getNick(),
				'password'=>$user->getPassword()
			];
			$jwt = JWT::encode($token, $this->key, ['HS256']); 
			
			if (!empty($getToken)) {
				$data = $jwt;
			}else{
				$decode = JWT::decode($token, $this->key, ['HS256']);
				$data = $decode;
			}
		}else{
			$data= [
				'status'  =>'error',
				'message' => 'Login incorrecto'
			];
		}


		return $data;
	}
}

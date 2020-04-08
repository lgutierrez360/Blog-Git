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

	public function __construct($manager){
		$this->manager =$manager; 
	}

	/**
	* @param $email|string, $password|string, $getToken|bolean (opcional)
	* @return json del usuario si $getToken  = null    
	* @return token de seguridad si $getToken  = true    
	*/
	public function signup($email, $password, $getToken=null){
		#comprobar si el cifrado de la contraseña es correcta
		#cifrar la contrasenia                
        $opciones = [
            'cost' => 4
        ];   
		$psw = password_hash($password, PASSWORD_BCRYPT, $opciones);
        #verificacion para contraseñas bcrypt
        if (password_verify($password, $psw)) {
			#comprobar si el usuario existe y esta activo
			$user = $this->manager->getRepository(Users::class)->findOneBy([		
				'email'    => $email,
				'active'   => 'SI'

			]);
        }             
		$signup =false;
		if (is_object($user)) {
			$signup =true;			
		}
		#si existe generar el token de seguridad
		if ($signup) {
			
			$token =[
				'sub'=>$user->getId(),
				'name'=>$user->getName(),
				'surname'=>$user->getSurname(),
				'email'=>$user->getEmail(),
				'nick'=>$user->getNick()
			];
			$jwt = JWT::encode($token, $this->key, 'HS256'); 
			if (!empty($getToken)) {
				$data = $jwt;
			}else{
				$decode = JWT::decode($jwt, $this->key, ['HS256']);
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

	public function checkToken($jwt,$identity=false){
		$auth = false;
		$decoded = JWT::decode($jwt, $this->key, ['HS256']); 
		
		if ( isset($decoded) && !empty($decoded) &&  is_object($decoded) && isset($decoded->sub) ){			
			$auth = true;
		}
		#Obtiene los datos del user a traves del toquen
		if($identity){
			return $decoded; 
		}else{
			return $auth; 
		}
	}
}

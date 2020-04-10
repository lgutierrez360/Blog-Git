<?php 

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Users;
use AppBundle\Form\RegisterType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use AppBundle\Services\JwtAuth;
//use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller{
   
   /**
     * @Route("/login", name="login")
     */
   	//public function loginAction(AuthenticationUtils $authenticationUtils=null){
   	public function loginAction(Request $request){
   		//crear auth

   		$jwt_auth = $this->get("app.jwtauth");

	    //return $this->render('security/login.html.twig');
	    
	    $authenticationUtils = $this->get('security.authentication_utils');
	    
	    # get the login error if there is one
	    $error = $authenticationUtils->getLastAuthenticationError();

	    # last username entered by the user
	    $lastUsername = $authenticationUtils->getLastUsername();

	    return $this->render('security/login.html.twig', array(
	        'last_username' => $lastUsername,
	        'error'         => $error,
	    ));	   	 
	}	

    /**
     * @Route("/register", name="register")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $encoder=null){	 
    	#Crear el formulario
	    $user = new Users;
        $form = $this->createForm(RegisterType::class,$user);

        #Rellenar el formulario con los datos del Request
        $form->handleRequest($request);

        #Comprobar si el formulario fue enviado
        if ($form->isSubmitted()) {
        	#modifique el objeto para guardarlo

	        $factory = $this->get("security.encoder_factory");
	        $encoder = $factory->getEncoder($user);
	        $password = $encoder->encodePassword(
	            $form->get("password")->getData(),
	            $user->getSalt()
	        );

        	//$encoded =  $encoder->encodePassword($user,$user->getPassword());
        	$user->setPassword($password);
        	$user->setActive('NO');
            $user->setAdministrator('NO');
            $user->setCreate_at(new \Datetime('now'));
            $user_insert= $this->getDoctrine()->getManager();
			$user_insert->persist($user);

            $user_insert->flush();        	
        	
        	return $this->redirectToRoute('profile');  	
        }

        return $this->render('security/register.html.twig',[
            'form'=>$form->createView()
        ]);  	
    }
     /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request){
        
        $request->getSession()->clear();
    	return $this->redirectToRoute('login');
    }

}


?>
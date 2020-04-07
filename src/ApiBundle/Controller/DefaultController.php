<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller{

    public function pruebaAction($id){

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


     /*   $view = View::create();
        $view->setData(array('id'=>$id,'nombre'=>'cristian'));
        return $this->handleView($view);*/

    }
}


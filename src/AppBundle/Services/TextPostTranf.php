<?php
namespace AppBundle\Services;
 
class TextPostTranf{
 	private $texto;

 	public function convertTextForm($texto){
 		$this->texto = mb_strtolower($texto);
 		return ucfirst($this->texto);
 	}
     
}

<?php

class MvcController{
	
	
	#llamada a la plantilla
	#--------------------------
	public function plantilla(){
	#include() se utiliza para invocar el archivo que contiene codigo html.
	include "views/template.php";
	}
	#interaccion
	#--------------
	
	public function enlacesPaginasController(){
		if(isset($_GET["action"])){
		$enlacesController =$_GET["action"];
	}
	else{
		$enlacesController="index";
	}
		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}
}
?>
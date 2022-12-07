<?php

#funciones sin parametros
function saludo(){

	echo "hola<br>";



}
saludo();

#funciones con parametros
function despedida($adios){
	echo $adios;
}
despedida("chao<br>");

#funciones con retorno
function retorno($retornar){


return $retornar;
}

echo retorno("retorno");


?>
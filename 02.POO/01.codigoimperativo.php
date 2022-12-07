<?php
#codigo imperativo o espaguetti
$automovil1=(object)["marca"=>"toyota", "modelo"=>"corolla"];
$automovil2=(object)["marca"=>"Hyundai", "modelo"=>"accent Vision"];

function mostrar($automovil){
echo"<p>Hola! soy un $automovil->marca, modelo $automovil->modelo</p>";
}
mostrar($automovil1);
mostrar($automovil2);
?>
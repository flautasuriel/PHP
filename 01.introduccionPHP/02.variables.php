<?php
#variable numerica
$var= 5;
$vari=10;
var_dump($var);
#variable palabra

$letra="A";
var_dump($letra);

echo "<br>estoy en el grupo: $var $letra</br>";


#suma
$res=$var+$vari;
echo "<p>$res</p>";

#division
$res1=$var*$vari;
echo "<p>$res1</p>";

#multiplicacion
$res2=$var/$vari;
echo "<p>$res2</p>";

#resta
$res3=$var-$vari;
echo "<p>$res3</p>";

#variable booleana
$electricidad= true;
echo "<br>$electricidad</br>";
var_dump($electricidad);

#variable arreglo
$colores= array("rojo", "verde", "azul", "negro");
echo "<br>$colores[3]</br>";
var_dump($colores);

#variable arreglo con propiedades
$verduras= array("verdura1"=>"Lechuga", "verdura2"=>"tomate", "verdura2"=>"brocoli");
echo "<br>esto es una variable arreglo con propiedades $verduras[verdura1]</br>";
var_dump($verduras);

#variable objeto;
$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "<br>esto es una variable objeto: $frutas->fruta2</br>";
var_dump($frutas);

?>
<?php
#condiciones
 $a=10;
 $b=10;
 
	if($a>$b){
	
	echo"a es mayor que b";
	}
	else if ($a==$b){
		echo "a es igual que b";
	}
	else{
		
		echo"a es menor que b";
	}
	
	#switches
	echo "<br>";
	$dia ="domingo";
	switch($dia){
		case'sabado':
		echo"voy a estudiar php";
		break;
		case'viernes':
		echo"voy a la fiesta";
		break;
		case'domingo':
		echo"voy a descansar";
		break;
		default: echo "voy a la escuela";
	}
	
	#ciclo while
	echo "<br>";
	$n=1;
	while($n<5){
		echo $n;
		$n++;
		
	}
	echo $n;
	
	#ciclo do while
	$p=1;
	echo "<br>";
	do{
		echo $p;
		$p++;
	}
	while($p<=5);
	
	#ciclo for
	echo "<br>";
	for($i=1; $i<=5; $i++){
		echo $i;
	}
?>
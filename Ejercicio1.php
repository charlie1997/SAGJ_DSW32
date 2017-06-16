<?php
	$variable;
	$variable=23;
	echo ($variable+3);
	echo"<br>";
	echo ($variable++);
	echo"<br>";
	echo ($variable--);
	echo"<br>";
	echo ($variable+=5);
	echo"<br>";
	echo ($variable-=6);
	echo"<br>";
	
	//Inicio  //Condicion //Incremento
	for($x=0; $x<$variable; $x++){
		echo $x;
		echo "<br>";
	}

	while($variable <=27){
	echo "<li>";
	echo $variable ++;
	echo "</ul>>"	;
	}
?>
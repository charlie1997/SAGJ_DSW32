<?php

print_r($_REQUEST);
$nombre=(isset($_REQUEST['username'])?$_REQUEST['username']:null);
$passw=(isset($_REQUEST['psw'])?$_REQUEST['psw']:null);

if($nombre=="admin"){
	if($passw=="jaguar"){
		$respuesta['Error']=0;
		$respuesta['Mensaje']="Bienvenido" .$nombre;
	} else{
		$respuesta['Error']=2;
		$respuesta['Mensaje']="Password Incorrecto";
	}
} else{
		$respuesta['Error']=1;
		$respuesta['Mensaje']="Nombre De Usuario Inexistente";
		
}
echo json_encode($respuesta,0);
?>
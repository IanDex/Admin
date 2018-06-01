<?php
//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	$mysqli=new mysqli("173.194.107.21","root","root","aulas_fundacion_telefonica"); 

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
?>

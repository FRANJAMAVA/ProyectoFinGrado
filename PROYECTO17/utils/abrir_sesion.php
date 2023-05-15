<?php 

	session_start();
	//$_SESSION['usuario']=$nombre;
	$_SESSION['id_usuario']=$fila['id'];
	$_SESSION['nombre']=$fila['nombre'];
	$_SESSION['apellidos']=$fila['apellidos'];
	$_SESSION['direccion'];
	$_SESSION['productos_carrito']=array();
	$_SESSION['id_carrito']=array();	

?>
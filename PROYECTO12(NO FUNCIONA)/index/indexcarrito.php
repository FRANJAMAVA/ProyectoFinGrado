<?php

if (isset($_POST['enviado'])){
	session_start();
	$id_producto=$_POST['id_producto'];
	$id_usuario=$_SESSION['id_usuario'];
	$nombreProducto=$_POST['nombre'];
	$foto=$_POST['foto'];
	$precio=$_POST['precio'];
	$producto = array();
	$producto = array($id_producto,$id_usuario,$nombreProducto,$foto,$precio);
	//$_SESSION['productos_carrito']=array();

	array_push($_SESSION['productos_carrito'],$producto);


}
require '../view/viewcarrito.php';

?>
<?php
$errores ="";



	//Comprobamos que se han seteado el formulario
	if (isset($_POST['submit'])){
		$id=$_POST['id'];
		$nombre= $_POST['nombre'];
		$alto= $_POST['alto'];
		$ancho= $_POST['ancho'];
		$largo= $_POST['largo'];
		$luces= $_POST['luces'];
		$precio= $_POST['precio'];
		$stock= $_POST['stock'];
		$foto= $_POST['foto'];
		//Saneamos los datos introducidos
		$nombre=trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		$alto=trim($alto);
		$alto = filter_var($alto, FILTER_SANITIZE_STRING);
		$ancho=trim($ancho);
		$ancho = filter_var($ancho, FILTER_SANITIZE_STRING);
		$largo=trim($largo);
		$largo = filter_var($largo, FILTER_SANITIZE_STRING);
		$luces=trim($luces);
		$luces = filter_var($luces, FILTER_SANITIZE_STRING);
		$precio=trim($precio);
		$precio = filter_var($precio, FILTER_SANITIZE_STRING);
		$stock=trim($stock);
		$stock = filter_var($stock, FILTER_SANITIZE_STRING);
		$foto=trim($foto);
		$foto = filter_var($foto, FILTER_SANITIZE_STRING);
		
		
				
		

		$conexion = new mysqli('localhost', 'root', '', 'proyecto');
		if(!$conexion->connect_errno){

			$datos = $conexion->query("UPDATE fuentes
			SET nombre ='$nombre', alto = '$alto', ancho='$ancho', largo = '$largo', luces = '$luces', precio = '$precio', stock = '$stock', foto = '$foto'
			WHERE id = '$id'");
		}else{
			  echo "No se ha realizado la modificacion";
		}		
			


	}
require '../index/indexmostrararticulos.php';

?>
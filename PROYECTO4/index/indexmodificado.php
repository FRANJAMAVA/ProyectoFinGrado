<?php
$errores ="";



	//Comprobamos que se han seteado el formulario
	if (isset($_POST['submit'])){
		$id=$_POST['id'];
		$nombre= $_POST['nombre'];
		$apellidos= $_POST['apellidos'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$alias= $_POST['alias'];
		//Saneamos los datos introducidos
		$nombre=trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		$apellidos=trim($apellidos);
		$apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING);
				
		$email= trim($email);
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		$password= trim($password);
		$salt = '1234';
		$password= hash('sha256', $salt.$password);
		$alias=trim($alias);
		$alias = filter_var($alias, FILTER_SANITIZE_STRING);

		$conexion = new mysqli('localhost', 'root', '', 'proyecto');
		if(!$conexion->connect_errno){

			$datos = $conexion->query("UPDATE clientes
			SET nombre ='$nombre', apellidos = '$apellidos', email='$email', password = '$password', alias = '$alias'
			WHERE id = '$id'");
		}else{
			  echo "No se ha realizado la modificacion";
		}		
			


	}
require '../index/indexmostrarclientes.php';

?>
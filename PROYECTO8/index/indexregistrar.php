<?php
$errores ="";



	
	if (isset($_POST['submit'])){
		$nombre= $_POST['nombre'];
		$apellidos= $_POST['apellidos'];
		$email= $_POST['email'];
		$contraseña= $_POST['password'];
		$alias= $_POST['alias'];
		

		
		
		if($nombre =="" || $apellidos=="" || $email=="" || empty($contraseña) || $alias==""){//COMPROBAR QUE CAMPOS ESTAN VACIOS
			$errores ="Falta algun dato, introduzcalos de nuevo.\n
			Muchas gracias";
			//echo "<h3>HOLA</h3>";
		}else{//SANEAMOS VARIABLES
				$nombre=trim($nombre);
				$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
				$apellidos=trim($apellidos);
				$apellidos = filter_var($apellidos, FILTER_SANITIZE_STRING);
				$contraseña= trim($contraseña);
				$salt = '1234';
				$contraseña= hash('sha256', $salt.$contraseña);
				$email= trim($email);
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				$alias=trim($alias);
				$alias = filter_var($alias, FILTER_SANITIZE_STRING);			
							
								
				include '../utils/operaciones.php';//COMPROBAMOS SI ESTA EL USUARIO METIDO
				comprobarUsuarios($nombre,$apellidos,$email,$contraseña,$alias);
				
				
		}
		


	}
require '../view/viewRegistrase.php';

?>



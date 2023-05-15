<?php
$esta = false;

function comprobarUsuarios($nombre,$apellidos,$email,$contraseña,$alias){
	$errores ="";


	$conexion = new mysqli('localhost', 'root', '', 'proyecto');

	if(!$conexion->connect_errno){

		$datos = $conexion->query("SELECT *  FROM clientes");

		if($datos->num_rows){

			while($fila = $datos->fetch_assoc()){
				if($fila['nombre']==$nombre && $fila['apellidos']==$apellidos &&$fila['email']==$email && $fila['password']==$contraseña &&  $fila['alias']==$alias){
					$esta = true;
					

				}
			}
		}
		if($esta){

			echo "<script type= 'text/javascript'> alert('Usuario ya registrado');window.location.href='../index/indexlogin.php'</script>" ;



			//header ("Location:../index/indexlogin.php");
		}else{

			$statement = $conexion->prepare("INSERT INTO clientes(id, nombre,apellidos, email, password, alias) VALUES (?,?,?,?,?,?) ");
			
			$statement->bind_param('isssss',$id,$nombre,$apellidos,$email,$contraseña,$alias);
			$id = null;
			$statement->execute();

			if($conexion->affected_rows >=1){
				//echo 'FILAS AGREGADAS : ' . $conexion->affected_rows;
				header ("Location:../index/indexlogin.php");
				
			}else{
				echo '<h3>NO SE INSERTO NADA</h3>';
			}

		}
	}else{
		die('NO HEMOS PODIDO ESTABLECER LA CONEXION');
	}
}
?>

<?php

$esta = false;

function comprobarUsuarios($nombre,$alto,$ancho,$largo,$luces,$precio,$stock,$foto){
	$errores ="";


	$conexion = new mysqli('localhost', 'root', '', 'proyecto');

	if(!$conexion->connect_errno){

		$datos = $conexion->query("SELECT *  FROM fuentes");

		if($datos->num_rows){

			while($fila = $datos->fetch_assoc()){
				if($fila['nombre']==$nombre){
					$esta = true;
					

				}
			}
		}
		if($esta){

			echo "<script type= 'text/javascript'> alert('Articulo ya dado de alta');window.location.href='../index/indexmostrararticulos.php'</script>" ;



			//header ("Location:../index/indexlogin.php");
		}else{

			$statement = $conexion->prepare("INSERT INTO fuentes(id, nombre,alto, ancho, largo, luces, precio, stock, foto) VALUES (?,?,?,?,?,?,?,?,?) ");
			
			$statement->bind_param('isiiisiis',$id,$nombre,$alto,$ancho,$largo,$luces,$precio,$stock,$foto);
			$id = null;
			$statement->execute();

			if($conexion->affected_rows >=1){
				//echo 'FILAS AGREGADAS : ' . $conexion->affected_rows;
				header ("Location:../index/indexmostrararticulos.php");
				
			}else{
				echo '<h3>NO SE INSERTO NADA</h3>';
			}

		}
	}else{
		die('NO HEMOS PODIDO ESTABLECER LA CONEXION');
	}
}
?>

<?php


	session_start();
	echo $_POST['id'];
	echo "<br>";
	var_dump($_SESSION['id_carrito']);
	echo "<br>";
	echo implode(" ",$_SESSION['id_carrito']);

	$id_usuario = $_POST['id'];
	$id_productos = implode(" ",$_SESSION['id_carrito']);
	$direccionEnvio = $_POST['direccion'];
	$fecha =date('Y-m-d');;
	
	/*$fecha = date('Y-m-d'); // Obtener fecha en formato AAAA-MM-DD
	$hora = date('H:i:s'); // Obtener hora en formato HH:MM:SS

	echo "Fecha: " . $fecha . "<br>";
	echo "Hora: " . $hora;*/
	$importe=0;

	$conexion = new mysqli('localhost', 'root', '', 'proyecto');

	if(!$conexion->connect_errno){

		$statement = $conexion->prepare("INSERT INTO compras(id, id_usuario, id_productos, importe, fecha) VALUES (?,?,?,?,?) ");
			
			$statement->bind_param('iisss',$id,$id_usuario,$id_productos,$importe, $fecha);
			$id = null;
			$statement->execute();

			/*foreach($_SESSION['id_carrito'] as $value){
						
					

				$sql = "SELECT stock FROM fuentes where fuentes.id ='$value'";//CONSULTA
					$datos = $conexion->query($sql);//CONSULTA 
						if($datos->num_rows){
						
							while($fila = $datos->fetch_assoc()){
								$stock = $fila - 1;

								$datos1 = $conexion->query("UPDATE fuentes
								SET  stock = '$stock' WHERE id = '$value'");


							}
						}

			}*/


			if($conexion->affected_rows >=1){
				//echo 'FILAS AGREGADAS : ' . $conexion->affected_rows;
				//header ("Location:../index/indexlogin.php");

				echo "<script type= 'text/javascript'> alert('COMPRA REALIZADA CON EXITO');
							session_destroy</script>" ;
							header ("Location:../index.php");
				
				
			}else{
				echo '<h3>NO SE INSERTO NADA</h3>';
			}




			


	}else{
		die('NO HEMOS PODIDO ESTABLECER LA CONEXION');
	}
	

	
	





?>

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
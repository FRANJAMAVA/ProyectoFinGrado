<?php

$articulos=array() ;

			$conexion = new mysqli('localhost', 'root', '', 'proyecto');//HACEMOS CONEXION
			if(!$conexion->connect_errno){//COMPROBAMOS QUE ESTA BIEN

				$sql = "SELECT * FROM fuentes";//CONSULTA
				$datos = $conexion->query($sql);//CONSULTA 
					if($datos->num_rows){

					
						while($fila = $datos->fetch_assoc()){
							array_push($articulos,$fila);
							//array_push($articulos,$fila['foto']);


						}
					}	
						

			}else{
				die('Adios');
			}

					


	

require '../view/mostrararticulosview.php';


?>
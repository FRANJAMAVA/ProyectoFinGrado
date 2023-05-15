<?php

$personas=array() ;

			$conexion = new mysqli('localhost', 'root', '', 'proyecto');//HACEMOS CONEXION
			if(!$conexion->connect_errno){//COMPROBAMOS QUE ESTA BIEN

				$sql = "SELECT * FROM clientes";//CONSULTA
				$datos = $conexion->query($sql);//CONSULTA 
					if($datos->num_rows){

					
						while($fila = $datos->fetch_assoc()){
							//array_push($personas,$fila['id'],$fila['name'],$fila['email'],$fila['password'],$fila['fecha']);
							array_push($personas,$fila);


						}
					}	
					/*foreach ($personas as  $persona) {
							foreach($persona as $value){
								echo $value;
							}
							
						}*/	

				

			}else{
				die('Adios');
			}

					


	

require '../view/mostrarclientesview.php';


?>
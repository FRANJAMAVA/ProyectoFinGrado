<?php


$articulos=array() ;
if (isset($_POST['borrar'])){
	$id = $_POST['id'];
	

			$conexion = new mysqli('localhost', 'root', '', 'proyecto');//HACEMOS CONEXION
			if(!$conexion->connect_errno){//COMPROBAMOS QUE ESTA BIEN

				$sql1 =  "DELETE  FROM fuentes WHERE  fuentes.id = '$id' ";
				$connect = $conexion->query($sql1);

				$sql = "SELECT * FROM fuentes";//CONSULTA
				$datos = $conexion->query($sql);//CONSULTA 
					if($datos->num_rows){

					
						while($fila = $datos->fetch_assoc()){
							
							array_push($articulos,$fila);


						}
					}	
									

			}else{
				die('Adios');
			}

					


}


require '../../view/mostrararticulosview.php';


?>
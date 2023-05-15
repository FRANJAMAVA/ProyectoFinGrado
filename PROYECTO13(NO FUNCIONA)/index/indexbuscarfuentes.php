<?php

 $fuentes = array();
 $errores ="";
 //if(isset($_POST['submit'])){
 	

 	$palabra = $_POST['buscar'];
 	$conexion= new mysqli('localhost', 'root', '','proyecto');

	 	if($conexion->connect_errno){
		die("Conexion no establecida");
		}else{	
			$sql ="SELECT * FROM fuentes where fuentes.nombre= '$palabra' or fuentes.alto='$palabra'  or fuentes.ancho='$palabra' or fuentes.largo='$palabra' or fuentes.precio='$palabra'or fuentes.stock='$palabra'or fuentes.luces='$palabra'";
			//$datos = $conexion->query("SELECT * FROM fuentes where fuentes.nombre LIKE '%".$palabra."%' or peliculas.Titulo LIKE '%".$palabra."%' " );
		//$datos = $conexion->query("SELECT  b.Cancion, p.NombreArchivoFoto FROM  bso b, peliculas p  where  b.BSO = p.Id ");

			$datos = $conexion->query($sql );
			if($datos->num_rows){
				while($fila = $datos->fetch_assoc()){
							array_push($fuentes,$fila);
							//array_push($articulos,$fila['foto']);


				}
			
			}else{
				$errores ="No hay ningun artículo con ese criterio de busqueda.\n
			Introduzca otro parámetro de búsqueda";
			}

		}
//
 
require '../view/viewfuentes.php';
?>
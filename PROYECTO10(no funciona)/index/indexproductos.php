
<?php
$errores;
$fuentes = array();
$contador=0;
$conexion= new mysqli('localhost', 'root', '','proyecto');
if($conexion->connect_errno){
	die("Esta historia se acabo, hasta otra");
}else{
	

	$datos = $conexion->query("SELECT * FROM fuentes");
	//$datos = $conexion->query("SELECT  b.Cancion, p.NombreArchivoFoto FROM  bso b, peliculas p  where  b.BSO = p.Id ");
	if($datos->num_rows){
		while($fila = $datos->fetch_assoc() ){
			array_push($fuentes, $fila);
			//echo("*******************************".$fila['NombreArchivoFoto']."**********".$fila['Cancion']);
			
			
			
		}
		
	}
}
require '../view/viewfuentes.php';
?>
<?php
$errores ="";



	
	if (isset($_POST['submit'])){
		$nombre= $_POST['nombre'];
		$alto= $_POST['alto'];
		$ancho= $_POST['ancho'];
		$largo= $_POST['largo'];
		$luces= $_POST['luces'];
		$precio= $_POST['precio'];
		$stock= $_POST['stock'];
		$foto= $_POST['foto'];
		

		
		
		if($nombre =="" || $alto=="" || $ancho=="" || empty($largo) || $luces==""|| $precio==""|| $stock==""|| $foto==""){//COMPROBAR QUE CAMPOS ESTAN VACIOS
			$errores ="Falta algun dato, introduzcalos de nuevo.\n
			Muchas gracias";
			//echo "<h3>HOLA</h3>";
		}else{//SANEAMOS VARIABLES
			$nombre=trim($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
			$alto=trim($alto);
			$alto = filter_var($alto, FILTER_SANITIZE_STRING);
			$ancho=trim($ancho);
			$ancho = filter_var($ancho, FILTER_SANITIZE_STRING);
			$largo=trim($largo);
			$largo = filter_var($largo, FILTER_SANITIZE_STRING);
			$luces=trim($luces);
			$luces = filter_var($luces, FILTER_SANITIZE_STRING);
			$precio=trim($precio);
			$precio = filter_var($precio, FILTER_SANITIZE_STRING);
			$stock=trim($stock);
			$stock = filter_var($stock, FILTER_SANITIZE_STRING);
			$foto=trim($foto);
			$foto = filter_var($foto, FILTER_SANITIZE_STRING);			
							
								
				include '../utils/operaciones1.php';//COMPROBAMOS SI ESTA EL ARTICULO METIDO
				comprobarUsuarios($nombre,$alto,$ancho,$largo,$luces,$precio,$stock,$foto);			
				
		}
		


	}
require '../view/viewaltaproductos.php';

?>



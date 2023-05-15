<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link rel="stylesheet" href=../css/estilosproyecto.css> <!--  link a los estilos css de todas las webs-->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- fuente de texto de google font -->
	<link rel="icon" type="image/x-icon" href="../imagenes/fuente2.gif">
	<style type="text/css">
		H1 {Text-align:center} /*H1 alineado al centro de la página*/

		body {

			background-image: url('../imagenes/fuentefondoclientes.jpg');
			background-repeat: no-repeat;
			background-size: /*ancho*/ 100%, /*alto*/ 100%;
			font-size: 16px;

		}
		table, th, td {
  			border: 1px solid grey;
		}

	</style>
</head>
<body>
	
	
	<h3>MODIFICAR</h3>
	<a href="../index.php"><button>Inicio</button></a>
	<a href="../index/indexmostrararticulos.php"><button>Atras</button></a>

	<?php
	if (isset($_POST['modificar'])){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$alto = $_POST['alto'];
		$ancho = $_POST['ancho'];
		$largo = $_POST['largo'];
		$luces = $_POST['luces'];
		$precio= $_POST['precio'];
		$stock= $_POST['stock'];
		$foto= $_POST['foto'];
		
		echo "<form action= '../index/indexmodificadoarticulos.php ' method='post' >";
		echo "<input type='hidden' name='id' value='$id' >";
		echo "<br><input type='text' name='nombre' placeholder='$nombre' value='$nombre'>";
		echo "<br><br><input type='text' name='alto' placeholder='$alto' value='$alto'>";
		echo "<br><br><input type='text' name='ancho' placeholder='$ancho' value='$ancho'>";
		echo "<br><br><input type='text' name='largo' placeholder='$largo'value='$largo'>";
		echo "<br><br><input type='text' name='luces' placeholder='$luces' value='$luces'>";
		echo "<br><br><input type='text' name='precio' placeholder='$precio' value='$precio'>";
		echo "<br><br><input type='text' name='stock' placeholder='$stock'value='$stock'>";
		echo "<br><br><input type='text' name='foto' placeholder='$foto' value='$foto'>";

		echo "<br><br><input type='submit' name='submit' value='Enviar'>
					<br>";
		
		echo "</form>";
	}

	
	?>

</body>
</html>


















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
	<a href="../index/indexmostrarclientes.php"><button>Atras</button></a>

	<?php
	if (isset($_POST['modificar'])){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$alias= $_POST['alias'];
		
		echo "<form action= '../index/indexmodificado.php ' method='post' >";
		echo "<input type='hidden' name='id' value='$id' >";
		echo "<br><input type='text' name='nombre' placeholder='$nombre' value='$nombre'>";
		echo "<br><br><input type='text' name='apellidos' placeholder='$apellidos' value='$apellidos'>";
		echo "<br><br><input type='email' name='email' placeholder='$email' value='$email'>";
		echo "<br><br><input type='password' name='password' placeholder='$password'required>";
		echo "<br><br><input type='text' name='alias' placeholder='$alias' value='$alias'>";

		echo "<br><br><input type='submit' name='submit' value='Enviar'>
					<br>";
		
		echo "</form>";
	}

	
	?>

</body>
</html>


















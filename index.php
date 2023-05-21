<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link rel="stylesheet" href="../css/estilosproyecto.css"> <!--  link a los estilos css de todas las webs-->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- fuente de texto de google font -->
	<link rel="icon" type="image/x-icon" href="../imagenes/fuente2.gif">
	<style type="text/css">
		H1 {Text-align:center} /*H1 alineado al centro de la página*/

		body {

			background-image: url('../imagenes/fuente.gif');
			background-repeat: no-repeat;
			background-size: /*ancho*/ 100%, /*alto*/ 100%;

		}

	</style>
		
</head>
<body>
	
	<h1 style="color: green;"><img src="../imagenes/fuente2.gif" width="100" height="100"> Aquatic Line <img src="../imagenes/fuente2.gif" width="100" height="100"></h1> <!-- Titulo de la web -->
	<div class="wrap"> 
		
		
		<input type="button" onclick="window.location='../index/logear/indexlogin.php'"
		class="Redirect" name="submit2" class="btn btn-primary" value="Acceder" id="iniciarsesion">
		<br>
		<br>
		<input type="button" onclick="window.location='../index/registrar/indexregistrar.php'"
		class="Redirect" name="submit2" class="btn btn-primary" value="Registrarse" id="iniciarsesion">

	
	</div>


	


</body>
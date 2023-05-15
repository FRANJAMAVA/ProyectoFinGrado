<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link rel="stylesheet" href="css/estilosproyecto.css"> <!--  link a los estilos css de todas las webs-->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- fuente de texto de google font -->
	<link rel="icon" type="image/x-icon" href="imagenes/fuente2.gif">
	<style type="text/css">
		H1 {Text-align:center} /*H1 alineado al centro de la página*/

		body {

			background-image: url('imagenes/fuente.gif');
			background-repeat: no-repeat;
			background-size: /*ancho*/ 100%, /*alto*/ 100%;

		}

	</style>
		
</head>
<body>
	<h1 style="color: green;"><img src="imagenes/fuente2.gif" width="100" height="100"> Aquatic Line <img src="imagenes/fuente2.gif" width="100" height="100"></h1> <!-- Titulo de la web -->
	<div class="wrap"> 
		<!-- contenedor --> 

	<!--<form action="" name="formulario" method="post"> --><!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->

<!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
		<!-- 
		<input type="text" placeholder="Nombre:" name="nombre" id="nombre">
		<br>
		<br>
		
		<input type="text" placeholder="Apellido 1:" name="apellido1" id="apellido1">
		<br>
		<br>
		
		<input type="text" placeholder="Apellido 2:" name="apellido2" id="apellido2">
		<br>
		<br>
		
		<input type="email" placeholder="Email:" name="email" id="email">
		<br>
		<br>
		
		<input type="password" placeholder="Contraseña:" name="password" id="password">
		<br>
		<br>
		<input type="text" placeholder="Alias:" name="alias" id="alias">
		<br>
		<br>

		<input type="submit" name="submit" class="btn btn-primary" value="Registrarsess" id="registrarse"><br><br>  
		
		<input type="button" onclick="window.location='../index/indexlogin.php'"
		class="Redirect" name="submit2" class="btn btn-primary" value="Acceder" id="iniciarsesion"><br>
		<br>

		<input type="button" onclick="window.location='indexviewRegistrase.php'"
			class="Redirect" name="submit2" class="btn btn-primary" value="Registrarse" id="iniciarsesion"><br><br>


	<input type="reset" value="Borrar Todo" name="B2" id="volver">

	<!--</form>-->
	<!-- Poner imagen en la web -->
	<!--<img src="logo.jpg" alt="logo" alt="Logo" />-->
	<!--
	<button class="btn btn-primary" onclick="window.location='index/indexregistrar.php'" >Registrarse</button>
	<br>
	<br>
	<button class="btn btn-primary" onclick="window.location='index/indexlogin.php'" >Logear</button>
	<br>-->

		
		<input type="button" onclick="window.location='index/indexlogin.php'"
		class="Redirect" name="submit2" class="btn btn-primary" value="Acceder" id="iniciarsesion">
		<br>
		<br>
		<input type="button" onclick="window.location='index/indexregistrar.php'"
		class="Redirect" name="submit2" class="btn btn-primary" value="Registrarse" id="iniciarsesion">

	
	</div>


	


</body>
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

			background-image: url('../imagenes/fuente.gif');
			background-repeat: no-repeat;
			background-size: /*ancho*/ 100%, /*alto*/ 100%;

		}

	</style>
		
</head>
<body>

	<div id = "container">
		<header>


			<form action= "../index/indexaltaproductos.php " method="post" >
					
				<input type="text" name="nombre" placeholder="Nombre" >
				<br>
				<br>
				<input type="text" name="alto" placeholder="Alto" >
				<br>
				<br>
				<input type="text" name="ancho" placeholder="Ancho" >
				<br>
				<br>
				<input type="text" name="largo" placeholder="Largo" >
				<br>
				<br>
				<input type="text" name="luces" placeholder="Luces">
				<br>
				<br>
				<input type="text" name="precio" placeholder="Precio">
				<br>
				<br>
				<input type="text" name="stock" placeholder="Stock">
				<br>
				<br>
				<input type="text" name="foto" placeholder="Foto">
				<br>
				<br>
				<input type="submit" name="submit" value="	Enviar">
				<br>
				
			</form>	
			<a href="../index.php"><button>Back</button></a>	
			
		
	</div>
	<p style="color: black;"><?php 

		print_r($errores);
			 ?></p>

</body>
</html>
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
		<div id="formulario">
			
			<form action= " " method="post" >

					
				<input type="text" name="alias" placeholder="Alias" >
				
				<input type="password" name="contraseña" placeholder="Contraseña" >
				<br>
				<input type="submit" name="enviado" class="btn btn-primary" value="Enviar">
				
				<br>						

			</form>
			<a href="../index.php"><button>Back</button></a>

		</div>
		<div >
			

		</div>
		<p style="color: red;"><?php if($errores !="") print_r($errores) ?></p>
		<p style="color: red;"><?php if($esta =="no") echo "No esta en la base de datos"?></p>
		<p id = "usuario"></p>
			

	</div>


</body>
</html>
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
<body>
<h3 style="color:red;">Administrador</h3>
<a href="../index/indexregistrar.php"><button>Alta</button></a>
<a href="../view/viewAdministrador.php"><button>Atras</button></a>
<br>
<br>
<table width="50%" border="0" align="center">
				<tr>
					<td class ="primera_fila">Id</td>
					<td class ="primera_fila">Nombre</td>
					<td class ="primera_fila">Apellidos</td>
					<td class ="primera_fila">Email</td>
					<td class ="primera_fila">Contraseña</td>
					<td class ="primera_fila">Alias</td>
					<td colspan="2">Opciones</td>
					
				</tr>

				<?php
				

				foreach ($personas as  $persona) :?>
					
					<?php
					echo "<tr>";
					foreach($persona as $value) :?>
						
							<td><?php echo $value ?></td>
					
						
					<?php
					endforeach;

					?>
					<td>
				
						<form method='post' action='../index/indexborrar.php'><input type='hidden' name='id' value=<?php echo $persona['id']?>/><input type='submit' name='borrar' value='Borrar'/></form>
					


					</td>
	
					<td>
						<form method='post' action='../view/viewmodificar.php'>
							<input type='hidden' name='id' value=<?php echo $persona['id']?>/>
							<input type='hidden' name='nombre' value=<?php echo $persona['nombre']?>/>
							<input type='hidden' name='apellidos' value=<?php echo $persona['apellidos']?>/>
							<input type='hidden' name='email' value=<?php echo $persona['email']?>/>
							<input type='hidden' name='password' value=<?php echo $persona['password']?>/>
							<input type='hidden' name='alias' value=<?php echo $persona['alias']?>/>
							<input type='submit' name='modificar' value='Modificar'/>
						</form>
					</td>

					<?php
					echo "<tr>";
					
					?>
					

				<?php
				endforeach;
				?>

				
				



</table>
	

</body>
</html>
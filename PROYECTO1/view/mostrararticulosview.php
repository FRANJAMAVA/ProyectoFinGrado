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
<h2 style="color:red;">Administrador</h2>
<button class="btn btn-primary" onclick="window.location='../index/indexbaja.php'" >Alta</button>
<button class="btn btn-primary" onclick="window.location='../index/indexordenar.php'" >Ordenar</button>
	
	
	
	<button class="btn btn-primary" onclick="window.location='../index/indexbuscar.php'" >Buscar</button>
<br>
<br>

<table width="50%" border="0" align="center">
				<tr>
					<td class ="primera_fila">Id</td>
					<td class ="primera_fila">Nombre</td>
					<td class ="primera_fila">Alto</td>
					<td class ="primera_fila">Ancho</td>
					<td class ="primera_fila">Largo</td>
					<td class ="primera_fila">Luces</td>
					<td class ="primera_fila">Precio</td>
					<td class ="primera_fila">Stock</td>
					<td class ="primera_fila">Foto</td>
					<td colspan="2">Opciones</td>
					
				</tr>

				<?php

				foreach ($articulos as  $articulo) :?>
					
					<?php
					echo "<tr>";
					foreach($articulo as $value) :?>
						
							<td><?php echo $value ?></td>
						<!--<img src="../image/"<?php echo $value ?>" height ='250px' width='150'" >-->
						
					<?php
					endforeach;
					?>
					<td>
						<button class="btn btn-primary" onclick="window.location='../index/indexbaja.php'" >Baja</button>
					</td>
	
					<td>
						<button class="btn btn-primary" onclick="window.location='../index/indexmodificar.php'" >Modificar</button>
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
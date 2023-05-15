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
	<div id ="container" style="color: red;">
		
		<div id="">
			<div id ="imagenes"   >
				


				<?php

				foreach ($fuentes as  $fuente) :
					$contador++;?>

					<div id="fuentes">

						<table width="50%" border="0" align="center">
							<tr>
								<!--<td class ="primera_fila">Id</td>-->
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
						echo "<tr>";
						foreach($fuente as $indice => $value) :
							if($indice !='id'){?>
							
								<td><?php echo $value ?></td>
							<?php 
							}
							?>							
							
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
						</table>
						<br>
						<br>
					

				<?php
				echo "</div>";
				endforeach;
				?>




			
			
			
		</div>
	</div>

</body>
</html>
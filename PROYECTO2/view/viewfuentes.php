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

				<table width="75%" border="0" align="center">
					  <tr>
					    <th colspan="3">Nombre</th>
					    
					  </tr>
					  <tr>
					    <td rowspan="7" id="fotofuente" width="50%"></td>
					    
					  </tr>
					  <tr>
					    <td width="10%">Alto</td>
					    <td width="15%"></td>
					  </tr>
					   <tr>
					    <td>Ancho</td>
					    <td></td>
					  </tr>
					  <tr>
					    <td>Largo</td>
					    <td></td>
					  </tr>
					   <tr>
					    <td>Luces</td>
					    <td></td>
					  </tr>
					   <tr>
					    <td>Precio</td>
					    <td></td>
					  </tr>
					   <tr>
					    <td>Stock</td>
					    <td></td>
					  </tr>



				</table>




				<?php

				foreach ($fuentes as  $fuente) :?>
					<table width="75%" border="0" align="center">
					  <tr>
					    <th colspan="3">Nombre</th>
					    
					  </tr>
					  <tr>
					    <td rowspan="7" id="fotofuente" width="50%"><img src="../image/"<?php echo $fuente['foto'] ?>" height ='250px' width='150'" ></td>


					  </tr>
					  <tr>
					    <td width="10%">Alto</td>
					    <td width="15%"><?php echo $fuente['alto']?></td>
					  </tr>
					   <tr>
					    <td>Ancho</td>
					    <td><?php echo $fuente['ancho']?></td>
					  </tr>
					  <tr>
					    <td>Largo</td>
					    <td><?php echo $fuente['largo']?></td>
					  </tr>
					   <tr>
					    <td>Luces</td>
					    <td><?php echo $fuente['luces']?></td>
					  </tr>
					   <tr>
					    <td>Precio</td>
					    <td><?php echo $fuente['precio']?></td>
					  </tr>
					   <tr>
					    <td>Stock</td>
					    <td><?php echo $fuente['stock']?></td>
					  </tr>



				</table>


					

				<?php
				
				endforeach;
				?>







			
			
			
		</div>
	</div>

</body>
</html>
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
		<form action= "../index/indexbuscarfuentes.php " method="post" style="display: inline-block;">
					
				<input type="text" name="buscar" placeholder="Buscar" class="buscar">
				<input type="submit" name="	submit" value="	Buscar" class="buscar">
				<br>
				
		</form>
		<a href="../index.php"><button>Inicio</button></a>
		<div id="">
			
				<?php

				foreach ($fuentes as  $fuente) :?>
					<table width="75%" border="0" align="center">
					  <tr>
					    <th colspan="3">Nombre</th>
					    
					  </tr>
					  <tr>
					    <th colspan="3"><?php echo $fuente['nombre']?></th>
					    
					  </tr>
					  <tr>
					    <td rowspan="7" id="fotofuente" width="50%"><img src="../imagenes/<?php echo $fuente['foto']?>" height ='350px' width='100%'></td>


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
					  <td colspan="3">
						<!--<button class="btn btn-primary" onclick="window.location='../index/indexbaja.php'" >Comprar</button>-->
						<form method="post" action="indexcarrito.php">
							
							<input type="hidden" name="id_producto" value="<?php echo $fuente['id']?>">
							<input type="hidden" name="nombre" value="<?php echo $fuente['nombre']?>">
							<input type="hidden" name="foto"  value="<?php echo $fuente['foto']?>">
							<input type="hidden" name="precio"  value="<?php echo $fuente['precio']?>">
							<input type="submit" name ="enviado" value= "Agregar al carrito">
						</form>
						
									
						<button class="btn btn-primary" onclick="window.location='../index/indexmodificar.php'" >Borrar</button>
					</td>




				</table>
				<br>
				<br>


					

				<?php
				
				endforeach;
				?>			
			
			
		</div>
		<p style="color: black;"><?php 

		//print_r($errores);
			 ?></p>
	</div>

</body>
</html>
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
<button class="btn btn-primary" onclick="window.location='../index/indexaltaproductos.php'" >Alta</button>
<button class="btn btn-primary" onclick="window.location='../index/indexordenar.php'" >Ordenar</button>
	
	
<form action= "../index/indexbuscar.php " method="post" style="display: inline-block;">
					
				<input type="text" name="buscar" placeholder="Buscar" class="buscar">
				<input type="submit" name="	submit" value="	Buscar" class="buscar">
				<br>
				
</form>
<!--<button class="btn btn-primary" onclick="window.location='../index/indexbuscar.php'" >Buscar</button>-->
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
				
						<form method='post' action='../index/indexborrararticulos.php'><input type='hidden' name='id' value=<?php echo $articulo['id']?>/><input type='submit' name='borrar' value='Borrar'/></form>
					


					</td>
	
					<td>
						<form method='post' action='../view/viewmodificararticulos.php'>
							<input type='hidden' name='id' value=<?php echo $articulo['id']?>/>
							<input type='hidden' name='nombre' value=<?php echo $articulo['nombre']?>/>
							<input type='hidden' name='alto' value=<?php echo $articulo['alto']?>/>
							<input type='hidden' name='ancho' value=<?php echo $articulo['ancho']?>/>
							<input type='hidden' name='largo' value=<?php echo $articulo['largo']?>/>
							<input type='hidden' name='luces' value=<?php echo $articulo['luces']?>/>
							<input type='hidden' name='precio' value=<?php echo $articulo['precio']?>/>
							<input type='hidden' name='stock' value=<?php echo $articulo['stock']?>/>
							<input type='hidden' name='foto' value=<?php echo $articulo['foto']?>/>
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
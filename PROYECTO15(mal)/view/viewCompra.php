<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Registrarse</title>
	<link rel="stylesheet" href=../css/estilosproyecto.css> <!--  link a los estilos css de todas las webs-->
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- fuente de texto de google font -->
	<link rel="icon" type="image/x-icon" href="../imagenes/fuente2.gif">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
  
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
	<h3>PRODUCTOS METIDOS EN LA CESTA DE LA COMPRA</h3>
	
				<div class="datos" style="float:left; width: 50%;">
				<fieldset >
					<legend>Datos personales</legend>
					
					<?php
							$id=$_SESSION['id_usuario'];
							$nombre=$_SESSION['nombre'];
							$apellidos=$_SESSION['apellidos'];
							echo "<form action= '../index/indexAltaTablaCompra.php ' method='post' >";
							echo "<input type='hidden' name='id' value='$id' >";
							echo "<br><span>NOMBRE : </span><br><input type='text' name='nombre' placeholder='$nombre' value='$nombre'>";
							echo "<br><br><span>APELLIDOS : </span><br><input type='text' name='apellidos' placeholder='$apellidos' value='$apellidos'>";
							
							echo "<br><br><span>DIRECCION DE ENVIO : </span><br><input type='text' name='direccion' placeholder='Introduzca direccion' size='150px'>";

							echo "<br><br><input type='submit' name='submit' value='Confirmar compra'>
										<br>";
							
							echo "</form>";


						?>
						<a href="../index.php"><button>Inicio</button></a>
				</fieldset>
			</div>
			<div class="datos" >

				<fieldset style="height: auto;">
					<legend>Productos Elegidos</legend>

					<table  border="0" align="center" width="200px">
					  <tr>
					    <th colspan="3">COMPRA</th>
					    
					  </tr>	
					<?php

							foreach ($_SESSION['productos_carrito'] as $indice=> $fuente) :?>
								
								  <tr>
								    <td rowspan="4" id="fotofuente" width="50%"><img src="../imagenes/<?php echo $fuente['3']?>" height ='150px' width='150px'></td>

								  </tr>
								  <tr>
								    <td width="10%">Nombre</td>
								    <td width="15%"><?php echo $fuente['2']?></td>
								  </tr>
								   <tr>
								    <td>Precio</td>
								    <td><?php echo $fuente['4']?></td>
								  </tr>
								  <tr>
								    <td>Cantidad</td>
								    <td>Cantidad</td>
								  </tr>
								 									

							<?php
								array_push($indices,$indice);
							endforeach;
							?>
						</table>
				</fieldset>
			</div>



	

</body>
</html>
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
		
		<a href="../index.php"><button>Inicio</button></a>
			<table  border="0" align="center" width="200px">
					  <tr>
					    <th colspan="3">CARRITO DE LA COMPRA</th>
					    
					  </tr>		

		    <?php

				foreach ($_SESSION['productos_carrito']  as  $indice => $fuente) :?>
					
					  <tr>
					    <td rowspan="5" id="fotofuente" width="50%"><img src="../imagenes/<?php echo $fuente['3']?>" height ='150px' width='150px'></td>

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
					  <tr>
					    <td colspan="2"><form method="post" action="indexbaja.php">							
							<input type="hidden" name="id_carrito" value="<?php echo $indice?>">				
							<input type="submit" name ="enviado" value= "Anular">
						</form></td>
					   
					  </tr>

						

				<?php
				
				endforeach;
				?>
				</table>

					
						
									
					
				    <button class="btn btn-primary" onclick="window.location='../index/indexbaja.php'" >Comprar</button>
				    <button class="btn btn-primary" onclick="window.location='../index/indexproductos.php'" >Seguir comprando</button>
				    <button class="btn btn-primary" onclick="window.location='../index/indexBorrarCompra.php'" >Anular compra</button>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <br>
				    <form method="post" action="../index/indexALtaCompra.php">
							
							<input type="hidden" name="id_producto" value="<?php echo $fuente['0']?>">
							<input type="hidden" name="nombre" value="<?php echo $fuente['1']?>">
							<input type="hidden" name="foto"  value="<?php echo $fuente['3']?>">
							<input type="hidden" name="precio"  value="<?php echo $fuente['4']?>">
							<button type="submit">Verificar compra</button>
						</form>

								
		
	</div>

</body>
</html>
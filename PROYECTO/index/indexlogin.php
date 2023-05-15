<?php
$errores="";
$esta ="si" ;
$usuario =[];

if (isset($_POST['enviado'])){//COMPROBAR QUE HEMOS SETEADO SUBMIT
	$alias = $_POST['alias'];
	$contraseña = $_POST['contraseña'];

		if($usuario =="" || empty($contraseña)){//COMPROBAR QUE CAMPOS ESTAN VACIOS
			$errores ="Usuario o contraseña incorrectos";
		}else{
			$alias=trim($alias); //SANEAR CAMPOS
			$alias = filter_var($alias, FILTER_SANITIZE_STRING);
			$contraseña=trim($contraseña);
			$salt = '1234';
			$contraseña= hash('sha256', $salt.$contraseña);
			$contraseña = filter_var($contraseña, FILTER_SANITIZE_STRING);

			//include '../utils/abrir_sesion.php';//Lo nuevo
			$conexion = new mysqli('localhost', 'root', '', 'proyecto');//HACEMOS CONEXION
			if(!$conexion->connect_errno){//COMPROBAMOS QUE ESTA BIEN

				$sql = "SELECT * FROM clientes";//CONSULTA
				$datos = $conexion->query($sql);//CONSULTA REALIZADA
				
				if($datos->num_rows){
					
					while($fila = $datos->fetch_assoc()){
						if($fila['alias']==$alias && $fila['password']==$contraseña){
							
							if($fila['alias'] =="administrador"){

								//header ("Location:https://www.wikipedia.org/");
								header ("Location:../view/operacionesview.php");
							}
							include '../utils/abrir_sesion.php';//Abrimos sesion
							echo "<script type= 'text/javascript'> alert('Ha entrado el usuario " .$alias. "');
							window.location.href='../view/viewAdministrador.php'</script>" ;
							//header ("Location:../view/Verproducto.view.php");

						}else{								

							$esta = "no";
						}

					}
				}

			}else{
				die('Adios');
			}

		}			


	
}
require '../view/loginview.php';


?>
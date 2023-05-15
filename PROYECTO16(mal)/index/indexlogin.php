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
							
							if($fila['alias'] =="ad" && $contraseña == '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2'){

								//header ("Location:https://www.wikipedia.org/");
								header ("Location:../view/viewAdministrador.php");
							}
							include '../utils/abrir_sesion.php';//Abrimos sesion
							$_SESSION['id_usuario']=$fila['id'];
							$_SESSION['nombre']=$fila['nombre'];
							$_SESSION['apellidos']=$fila['apellidos'];
							echo "<script type= 'text/javascript'> alert('Ha entrado el usuario " .$alias." con id ".$_SESSION['id_usuario']. "');
							window.location.href='../index/indexproductos.php'</script>" ;
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
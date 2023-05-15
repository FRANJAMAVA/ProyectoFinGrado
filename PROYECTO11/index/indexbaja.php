<?php
session_start();

$id = $_POST['id_carrito'];
 foreach ($_SESSION['productos_carrito'] as $indice => $fuente) {
        if ($indice == $id) {
            unset($_SESSION['productos_carrito'][$indice]);
            //break;
        }
    }


if (empty($_SESSION['productos_carrito'])) {
    require 'indexproductos.php';
} else {
    require '../view/viewcarrito.php';
}



?>
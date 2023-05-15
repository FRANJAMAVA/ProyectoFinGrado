<?php
session_start();
$id = $_POST['id_carrito'];
 foreach ($_SESSION['productos_carrito'] as $indice => $fuente) {
        if ($indice == $id) {
            unset($_SESSION['productos_carrito'][$indice]);
            //break;
        }
    }

require '../view/viewcarrito.php';

?>
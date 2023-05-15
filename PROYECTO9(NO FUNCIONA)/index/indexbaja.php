<?php

$id = $_POST[$fuente['0']];
 foreach ($_SESSION['productos_carrito'] as $indice => $fuente) {
        if ($fuente['id'] == $id) {
            unset($$_SESSION['productos_carrito'][$indice]);
            //break;
        }
    }

require '../view/viewcarrito.php';

?>
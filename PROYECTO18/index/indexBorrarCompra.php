<?php



session_start();


 foreach ($_SESSION['productos_carrito'] as $indice => $fuente) {
        
            unset($_SESSION['productos_carrito'][$indice]);
            //break;
        
    }








header ("Location:indexproductos.php");

?>
<?php
session_start();
$id = $_POST['id_carrito'];
 foreach ($_SESSION['productos_carrito'] as $indice => $fuente) {

    unset($_SESSION['productos_carrito'],$fuente);
       
    }

require '../view/viewfuentes.php';

?>
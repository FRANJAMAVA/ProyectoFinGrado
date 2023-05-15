<?php
// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'proyecto');

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST['borrar'])) {
    $id = $_POST['id'];

    // Consulta para borrar el registro de la base de datos
    $sql = "DELETE FROM clientes WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Registro borrado exitosamente.";
    } else {
        echo "Error al borrar el registro: " . mysqli_error($conn);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
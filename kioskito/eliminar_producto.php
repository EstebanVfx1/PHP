<?php
include_once("conexion.php");

$idProducto = $_GET['id_producto'];

try {
    $conexion->query("DELETE FROM producto WHERE id='$idProducto'");
    header("Location: productos.php");
} catch (Exception $e) {
    //echo "Error al eliminar el proveedor. Es posible que la clave primaria esté siendo utilizada en otra tabla.";
    echo '<script>alert("Error al eliminar el proveedor. Es posible que la clave primaria esté siendo utilizada en otra tabla.");</script>';
}

header("refresh:0; url=proveedores.php");
exit();
?>
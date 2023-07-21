<?php
include_once("conexion.php");

$idProveedor = $_GET['id_proveedor'];

try {
    $conexion->query("DELETE FROM proveedor WHERE id_proveedor='$idProveedor'");
    header("Location: proveedores.php");
} catch (Exception $e) {
    //echo "Error al eliminar el proveedor. Es posible que la clave primaria esté siendo utilizada en otra tabla.";
    echo '<script>alert("Error al eliminar el proveedor. Es posible que la clave primaria esté siendo utilizada en otra tabla.");</script>';
}

header("refresh:0; url=proveedores.php");
exit();
?>



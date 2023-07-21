<?php
include_once("conexion.php");

$id_proveedor = $_REQUEST['id_proveedor']; // Asegúrate de obtener el valor correcto del id_proveedor desde la URL
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];

// TODO: Validar y sanitizar los valores de $id_proveedor, $direccion y $telefono para evitar problemas de seguridad.

$consulta = "UPDATE proveedor SET direccion='$direccion', telefono='$telefono' WHERE id_proveedor='$id_proveedor'";

if ($conexion->query($consulta)) {
    header("Location: proveedores.php"); // Redireccionar a la página de proveedores después de la actualización exitosa.
} else {
    echo "¡No se pudo actualizar!";
}
?>


<?php
include_once("conexion.php");

$nombre = $_REQUEST['nombre'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];


$consulta = "INSERT INTO proveedor (id_proveedor, direccion, telefono) VALUES ('$nombre', '$direccion', '$telefono')";


if ($conexion->query($consulta)) {
    header("Location: proveedores.php");
} else {
    echo "¡No se envió xd!";
}
$conexion->close();
?>

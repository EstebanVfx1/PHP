<?php
include_once("conexion.php");

$id_producto = $_REQUEST['idp'];
$nombre = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];
$costo = $_REQUEST['costo'];
$precio = $_REQUEST['precio'];
$cantidad = $_REQUEST['cantidad'];
$proveedor = $_REQUEST['select_proveedor'];

$consulta = "UPDATE producto SET nombre='$nombre', descripcion='$descripcion', costo=$costo, precio=$precio, cantidad=$cantidad, proveedor='$proveedor' WHERE id='$id_producto'";

if ($conexion->query($consulta)) {
    header("Location: productos.php");
} else {
    echo "¡No se pudo actualizar!";
}
?>
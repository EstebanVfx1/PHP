<?php
include_once("conexion.php");

$id_venta = $_REQUEST['id_factura'];

$consultaanular = $conexion->query("UPDATE factura SET estado=1 WHERE id_ventas = '$id_venta'");

header("refresh:1; url=lista_factura.php");
exit();
?>
<?php
include_once("conexion.php");

$proveedor = $_REQUEST['select_proveedor'];

if ($proveedor !== "Abrir este menu") {
    $nombre = $_REQUEST['nombre'];
    $descripcion = $_REQUEST['descripcion'];
    $costo = $_REQUEST['costo'];
    $precio = $_REQUEST['precio'];
    $cantidad = $_REQUEST['cantidad'];
    $consulta = "INSERT INTO producto(nombre, descripcion, costo, precio, cantidad, proveedor) VALUES 
    ('$nombre', '$descripcion', '$costo', '$precio', '$cantidad', '$proveedor')";

    if ($conexion->query($consulta)) {
        echo "Producto insertado exitosamente.";
    } else {
        echo "Error al insertar el producto: " . $conexion->error;
    }
} else {
    echo "Selecciona un proveedor válido.";
}

$conexion->close(); // Cerrar la conexión después de realizar las operaciones con la base de datos
//include("productos.php");
header("refresh:0; url=productos.php");
exit();
?>


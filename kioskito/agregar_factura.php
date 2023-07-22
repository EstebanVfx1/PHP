<?php
include_once("conexion.php");

$id_producto = $_REQUEST['select_proveedor'];
$cantidad = $_REQUEST['cantidad'];
$consultastock = $conexion->query("SELECT cantidad, precio FROM producto WHERE id = $id_producto");

if ($id_producto !== "Selecciona el producto" && $cantidad>0 && $consultastock) {

    $consultastockfila = $consultastock->fetch_assoc();

    $stock = $consultastockfila['cantidad'];
    $precio = $consultastockfila['precio'];
    $total_precio = $cantidad * $precio;
    if($stock>=$cantidad){
        $consulta = "INSERT INTO factura(id_producto, cantidad, total, estado) VALUES 
        ('$id_producto', '$cantidad', '$total_precio', '0' )";
        if ($conexion->query($consulta)) {
            echo "Producto insertado exitosamente.";
        } else {
            echo "Error al insertar el producto: " . $conexion->error;
        }
    }else{
        echo "STOCK INSUFICIENTE";
    }

    
} else {
    echo "Selecciona un proveedor válido o una cantidad valida";
}

$conexion->close(); // Cerrar la conexión después de realizar las operaciones con la base de datos
//include("productos.php");
header("refresh:1; url=index.php");
exit();
?>
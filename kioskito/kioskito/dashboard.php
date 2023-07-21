<?php
include_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard-HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <table class="table table-bordered">
            <tr class="well">
                <td>
                <h1 align="center">Listado Alumnos</h1>
                    <form name="form3" method="post" action="" class="form-search container">
                        <div class="input-prepend input-append">
                            <span class="add-on"><i class="icon-search"></i></span>
                            <input type="text" name="nombre-producto" autocomplete="off" class="form-control mb-2" autofocus placeholder="Nombre Producto">
                            <input type="text" name="descrip-producto" autocomplete="off" class="form-control" autofocus placeholder="Descripcion producto">
                            <div class="input-group mt-2">
                                <span class="input-group-text">$</span>
                                <input type="text" name="costo" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Valor Costo">
                            </div>
                            <div class="input-group mt-2">
                                <span class="input-group-text">$</span>
                                <input type="text" name="valor" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Valor Precio">
                            </div>
                            <input type="number" class="form-control mt-2" name="canitdad" placeholder="Cantidad">
                            <select name="select_proveedor" class="form-select mt-2" aria-label="Default select example">
                                <option selected>Selecciona el proveedor</option>
                                <?php
                                if(true){
                                    $consulta=$conexion->query("SELECT * FROM provedor");
                                }

                                while($row=$consulta->fetch_array()){
                                    
                                ?>
                                <option value="<?php echo $row['nombre'] ?>" ><?php echo $row['nombre'] ?></option>

                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn btn-primary mt-3" name="buton"><strong>Guardar</strong></button>
                    </form>
                </td>
            </tr>
        </table>
        <?php 
        if(isset($_POST['nombre-producto'])&&isset($_POST['descrip-producto'])){
            $nombre_producto = $_REQUEST['nombre-producto'];
            $descrip_producto = $_REQUEST['descrip-producto'];
            $costo = $_REQUEST['costo'];
            $valor = $_REQUEST['valor'];
            $cantidad = $_REQUEST['canitdad'];
            $id_proveedor= $_REQUEST['select_proveedor'];
            $conexion->query("INSERT INTO producto(nombre, descripcion, costo, precio, cantidad, id_proveedor)
            VALUES ('$nombre_producto', '$descrip_producto', '$costo', '$valor', '$cantidad' , '$id_proveedor')");
        }else{
            echo "ingrese los datos gei";
        }
        ?>
    </div>
</body>
</html>
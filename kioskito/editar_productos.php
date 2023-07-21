<?php
// Incluir el archivo de conexión a la base de datos
include_once("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Resto de las etiquetas head... -->
</head>

<body>
  <!-- Resto del contenido de la página... -->

  <div class="modal fade" id="editar<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="update_db_producto.php" method="POST" >
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="idp" value="<?php echo $row['id']?>">
                    <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Costo</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="costo" value="<?php echo $row['costo']?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="precio" value="<?php echo $row['precio']?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Cantidad</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="cantidad" value="<?php echo $row['cantidad']?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="descripcion" style="height: 400px"><?php echo $row['descripcion']?></textarea>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Selecciona El Proveedor</label>
                <div class="col-sm-10">
                  <select class="form-select" name="select_proveedor" aria-label="Default select example">
                    <option selected>Abrir este menu</option>
                    <?php
                    // Utilizar una variable diferente para recorrer los resultados de la consulta de proveedores
                    $consulta_proveedores = $conexion->query("SELECT id_proveedor FROM proveedor");

                    while ($row_proveedor = $consulta_proveedores->fetch_array()){
                    ?>
                    <option value="<?php echo $row_proveedor['id_proveedor'] ?>"><?php echo $row_proveedor['id_proveedor'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
              </div>
            </form><!-- End General Form Elements -->
          </div>
        </div>
      </div>
    </div>
</body>

</html>

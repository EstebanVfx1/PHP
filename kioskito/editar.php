<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Resto de las etiquetas head... -->
</head>

<body>
  <!-- Resto del contenido de la página... -->

  <div class="modal fade" id="editar<?php echo $row['id_proveedor']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="update_db_proveedor.php" method="POST">
            <div class="row mb-3">
              <label for="id_proveedor" class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
              <input type="text" id="id_proveedor" name="id_proveedor" class="form-control" value="<?php echo $row['id_proveedor']?> " disabled>
                <input type="hidden" id="id_proveedor" name="id_proveedor" class="form-control" value="<?php echo $row['id_proveedor']?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
              <div class="col-sm-10">
                <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $row['direccion']?>">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">Telefono</label>
              <div class="col-sm-10">
                <input type="number" id="telefono" name="telefono" class="form-control" value="<?php echo $row['telefono']?>">
              </div>
            </div>
            <div class="modal-footer"> <!-- Mover el modal-footer aquí -->
              <button type="button" name="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
          </form><!-- End General Form Elements -->
        </div>
        <!-- Modal-footer se movió dentro del modal-body -->
      </div>
    </div>
  </div>
</body>

</html>

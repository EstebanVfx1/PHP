<?php
include_once("conexion.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <style>
      .stuloranmdom{
        height: 690px;

      }
  </style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link " href="lista_factura.php">
          <i class="bi bi-grid"></i>
          <span>Facturas</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Productos</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="agregar_producto.php">
              <i class="bi bi-circle"></i><span>Agregar Producto</span>
            </a>
          </li>
          <li>
            <a href="productos.php">
              <i class="bi bi-circle"></i><span>Productos</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Proveedores</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="agregar_proveedor.php">
              <i class="bi bi-circle"></i><span>Agregar Proveedor</span>
            </a>
          </li>
          <li>
            <a href="proveedores.php">
              <i class="bi bi-circle"></i><span>Proveedores</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Facturas</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID Factura</th>
                      <th>Nombre Producto</th>
                      <th>Stock Vendido</th>
                      <th>Total Pago</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $sqlListarFactura = "SELECT v.id_ventas, v.fecha, v.cantidad, v.total, p.nombre
                        FROM factura v
                        INNER JOIN producto p ON v.id_producto = p.id
                        WHERE v.estado = 0";
                        $consulta = $conexion->query($sqlListarFactura);

                        while ($row = $consulta->fetch_array()) {
                        ?>   
                    <tr>
                        <td>
                            <?php echo $row['id_ventas']?>
                        </td>
                        <td>
                            <?php echo $row['nombre']?>
                        </td>
                        <td>
                            <?php echo $row['cantidad']?>
                        </td>
                        <td>
                        <?php echo $row['total']?>
                        </td>
                        <td>
                            <a name="id_ventas"  class="btn btn-outline-danger" href="anular_factura.php? id_factura=<?php echo $row['id_ventas'] ?>" >ANULAR</a>
                        </td>
                      </tr>
                      <?php } ?>
                    <tbody>
                  </tbody>
                </table>
              <!-- Default Table -->
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Facturas Anuladas</h5>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID Factura</th>
                      <th>Nombre Producto</th>
                      <th>Stock Vendido</th>
                      <th>Total Pago</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $sqlListarFactura = "SELECT v.id_ventas, v.fecha, v.cantidad, v.total, p.nombre
                        FROM factura v
                        INNER JOIN producto p ON v.id_producto = p.id
                        WHERE v.estado = 1";
                        $consulta = $conexion->query($sqlListarFactura);

                        while ($row = $consulta->fetch_array()) {
                        ?>   
                    <tr>
                        <td>
                            <?php echo $row['id_ventas']?>
                        </td>
                        <td>
                            <?php echo $row['nombre']?>
                        </td>
                        <td>
                            <?php echo $row['cantidad']?>
                        </td>
                        <td>
                        <?php echo $row['total']?>
                        </td>
                        <td>
                            <a name="id_ventas" role="button" aria-disabled="true" class="btn btn-outline-danger disabled" href="anular_factura.php? id_factura=<?php echo $row['id_ventas'] ?>" disabled>ANULAR</a>
                        </td>
                      </tr>
                      <?php } ?>
                    <tbody>
                  </tbody>
                </table>
              <!-- Default Table -->
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- ... Tu tabla y código PHP anterior ... -->

 


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
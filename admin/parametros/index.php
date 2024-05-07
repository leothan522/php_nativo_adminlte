<?php
session_start();
require_once "../../vendor/autoload.php";
use app\controller\ParametrosController;
$controller = new ParametrosController();
$controller->isAdmin();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php asset('public\\favicon\\apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php asset('public\\favicon\\apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php asset('public\\favicon\\apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php asset('public\\favicon\\apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php asset('public\\favicon\\apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php asset('public\\favicon\\apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php asset('public\\favicon\\apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php asset('public\\favicon\\apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php asset('public\\favicon\\apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php asset('public\\favicon\\android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php asset('public\\favicon\\android-icon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php asset('public\\favicon\\android-icon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php asset('public\\favicon\\favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php asset('public\\favicon\\manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php asset('public\\favicon\\ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">

  <title><?php if (isset($controller->TITTLE)) { echo config('app_name').' | '.$controller->TITTLE; } else { echo config('app_name').' | Dashboard'; } ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php asset('app/resources/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php asset('app/resources/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php asset('app/resources/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('app/resources/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('app/resources/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">

    <!-- Theme style -->
  <link rel="stylesheet" href="<?php asset('app/resources/adminlte/dist/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-footer-fixed">

<!-- Preloader -->
<?php require_once "../_layout/preloader.php" ?>

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php require_once "../_layout/navbar.php"?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require_once  "../_layout/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php require_once "_layout/header.php"; ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php require_once "_layout/content.php"?>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require_once "../_layout/footer.php"?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
      <?php require_once "_layout/right-sidebar.php" ?>
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php asset('app/resources/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php asset('app/resources/adminlte/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- Bootstrap 4 -->
<script src="<?php asset('app/resources/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php asset('app/resources/adminlte/dist/js/adminlte.min.js'); ?>"></script>

<!-- DataTables  & Plugins -->
<script src="<?php asset('app/resources/adminlte/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/pdfmake/pdfmake.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<script src="<?php asset('public/js/datatable-app.js', true); ?>"></script>



<!-- SweetAlert2 -->
<script src="<?php asset('app/resources/adminlte/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<script src="<?php asset('public/js/sweetalert-app.js',true);  ?>"></script>
<script src="<?php asset('public/js/app.js', true); ?>"></script>

<!-- InputMask -->
<script src="<?php asset('app/resources/adminlte/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?php asset('app/resources/adminlte/plugins/inputmask/jquery.inputmask.min.js'); ?>"></script>
<script src="<?php asset('public/js/inputmask-app.js', true); ?>"></script>

<script src="<?php asset('admin/parametros/_app/parametros.js', true) ?>"></script>
</body>
</html>

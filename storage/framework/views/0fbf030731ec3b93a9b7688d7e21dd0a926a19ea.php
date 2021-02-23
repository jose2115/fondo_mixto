<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $__env->yieldContent('titulo'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<link rel="stylesheet" href="<?php echo e(asset('css/tooltip.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/estilo.css')); ?>">
<link href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" />

  <?php $__env->startSection('css'); ?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <?php echo $__env->yieldSection(); ?>

  <?php echo $__env->yieldContent('extra-css'); ?>
</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo e(route('home')); ?>" class="nav-link"><i class="fas fa-home"> </i> Inicio</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#modalEditPerfil" data-toggle="modal" data-target="#modalEditPerfil" class="nav-link"> <i class="fas fa-edit"> </i>Cambiar Clave</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
            <?php echo csrf_field(); ?>
            <a id="btn-salir" class="nav-link"  >  <i class="fas fa-file-alt"> </i> Cerrar Sesión</a>
          </form>
         
        </li>
        <li>
          
        </li>

       
      </ul>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper "  id="fondocontainer">
      <!-- Content Header (Page header) -->

      <section class="content-header">
        <div class="container-fluid">
          <?php echo $__env->yieldContent('link'); ?>
        </div><!-- /.container-fluid -->
      </section>


      <!-- Main content -->
      <section class="content">
        <?php echo $__env->yieldContent('content'); ?>
      </section>
      <?php echo $__env->make('modals.edit-perfil', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Desarrollado por</b> <a href="https://www.parquesoftsucre.com.co/" target="_blank">ParqueSoft Sucre</a>
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2020 <a href="javascript:void(0)">Fondo Mixto </a>.</strong> Todos los derechos reservado 

    </footer>

  </div>
  <!-- ./wrapper -->
  <?php $__env->startSection('script'); ?>

  <!-- jQuery -->
  <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <!-- bs-custom-file-input -->
  <script src="<?php echo e(asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo e(asset('js/adminlte.min.js')); ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo e(asset('js/demo.js')); ?>"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      bsCustomFileInput.init();
    });
  </script>
  <script src="<?php echo e(asset('plugins/select2/js/select2.full.min.js')); ?>"></script>
  <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/perfil.js')); ?>"></script>

  <script >
    $(function() {

      $("#btn-salir").click(function(event){
        event.preventDefault();
        Swal.fire({
          title: 'Cerrar Sesión',
          text: "¿Desea Salir del Sistema?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si',
          cancelButtonText: 'No'
      }).then((result) => {
          if (result.value) {
            $('#logout-form').submit();
          }
      })
        
       
      });

     

      
  });
  </script>
  <?php echo $__env->yieldSection(); ?>

  <?php echo $__env->yieldContent('extra-script'); ?>

</body>

</html>
<?php /**PATH /home/fomiclo27/public_html/resources/views/layouts/main.blade.php ENDPATH**/ ?>
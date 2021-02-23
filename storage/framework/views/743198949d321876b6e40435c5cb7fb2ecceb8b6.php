
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fondo  | Mixto</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/main_form.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/estilo.css')); ?>">
  
  <link rel="stylesheet" href="<?php echo e(asset('css/util_form.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="body_login">
    <div class="container" id="container">
        <div class="form-container sign-in-container">
                <form id="formlogin"  action="<?php echo e(route('login')); ?>" method="POST">
                    <?php echo csrf_field(); ?>

                    <h3 class="le">Cultura de Sucre</h1>
                    <div class="social-container">
                        <img  style ="height:90px" src="<?php echo e(asset('/img/logo_cultura2.png')); ?>" >
                    </div>
                    <h5>Ingresa tus credenciales</h5>

     
                        <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                
					                <input class="input100 <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="number" name="documento" placeholder="Usuario">
                          <span class="focus-input100"></span>
                         
                        </div>
                        <div class="wrap-input100  validate-input con2" data-validate="La Contraseña es requerida">
					                
					                <input class="input100 <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="password" name="password" placeholder="Contraseña">
                          <span class="focus-input100"></span>
                         
				                </div>

                    <div class="row">

                      <div class="col-md-12">
                        <button style="float:center" type="submit"   autofocus >Ingresar</button>

                      </div>

                    </div>

                </form>

        </div>

        <div class="overlay-container">
            <div class="overlay">
                 <div class="overlay-panel overlay-right">
                    
                </div>
            </div>
        </div>
    </div>

<!-- jQuery -->
<script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('js/adminlte.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/login.js')); ?>"></script>
<script src="<?php echo e(asset('js/main_form.js')); ?>"></script>

</body>
</html>












<?php /**PATH C:\laragon\www\parque\resources\views/auth/login.blade.php ENDPATH**/ ?>
<?php $__env->startSection('titulo', "Archivos"); ?>
<?php $__env->startSection('extra-css'); ?>
<?php $__env->stopSection(); ?>
<!-- elFinder CSS (REQUIRED) -->
<link rel="stylesheet" type="text/css" href="<?php echo e(asset($dir.'/css/elfinder.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset($dir.'/css/theme.css')); ?>">

<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />


<?php $__env->startSection('content'); ?>
<div class="container-fluid" >

    <div id="elfinder"></div>





</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('extra-script'); ?>
<!-- jQuery and jQuery UI (REQUIRED) -->
       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

        <!-- elFinder JS (REQUIRED) -->
        <script src="<?php echo e(asset($dir.'/js/elfinder.min.js')); ?>"></script>

        <?php if($locale): ?>
            <!-- elFinder translation (OPTIONAL) -->
            <script src="<?php echo e(asset($dir."/js/i18n/elfinder.$locale.js")); ?>"></script>
        <?php endif; ?>

        <!-- elFinder initialization (REQUIRED) -->
        <script type="text/javascript" charset="utf-8">
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            $().ready(function() {
                $('#elfinder').elfinder({
                    // set your elFinder options here
                    <?php if($locale): ?>
                        lang: '<?php echo e($locale); ?>', // locale
                    <?php endif; ?>
                    customData: { 
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    url : '<?php echo e(route("elfinder.connector")); ?>',  // connector URL
                    soundPath: '<?php echo e(asset($dir.'/sounds')); ?>'
                });
            });
        </script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\vendor\barryvdh\laravel-elfinder\src/../resources/views/elfinder.blade.php ENDPATH**/ ?>
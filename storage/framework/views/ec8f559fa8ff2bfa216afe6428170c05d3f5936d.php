<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Reporte de Proyectos Filtro de Fechas</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <img src="<?php echo e(asset('img/fondomi.png')); ?>">
     </div>
 
   
    <h1 class="p-text"><center>REPORTE DE PROYECTOS POR RANGOS DE FECHAS</center></h1>
     <h4>Desde <?php echo e($fecha1); ?> - Hasta <?php echo e($fecha2); ?></h4>
     <h4>Fecha de Impresión: <?php echo e($date); ?></h4>
    <table class="pure-table">
        <thead>
            <tr>
                <th>#</th>
                <th>N° Radicado</th>
                <th>Solicitante</th>                       
                <th>Descripción</th>                
                <th>Inversión Departamento</th>
                <th>Fecha</th>
                
            </tr>
        </thead>
        <tbody>
           <?php $__empty_1 = true; $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
           <tr>
               <td><?php echo e($loop->iteration); ?></td>
               <td><?php echo e($s->codigo_radicado); ?></td>
               <?php if($s->razon_social=='Natural'): ?>
               <td><?php echo e($s->nombre. ' '.$s->apellido); ?></td>
                <?php else: ?>
                <td><?php echo e($s->razon_social); ?></td> 
               <?php endif; ?>                   
               <td><?php echo e($s->descripcion); ?></td>               
               <td>$<?php echo e(number_format($s->fondo_mixto, 0)); ?></td>
               <td><?php echo e($s->fecha); ?></td>
              
              
           </tr>
               
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
               
           <?php endif; ?>
        </tbody>
    </table>
</body>
</html><?php /**PATH C:\laragon\www\parque\resources\views/pdf/fechas.blade.php ENDPATH**/ ?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Reporte de Proyectos Filtro de Fechas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   
    <div class="header">
       <img src="<?php echo e(asset('img/fondomi.png')); ?>">
    </div>

 <table class="table table-bordered" >
   <tr>
     <th>Indicador</th>
     <th>Meta Producto</th>
     <th>Año <?php echo e($year); ?></th>
     <th>Ejecución</th>
     <th>% Ejecución</th>
     <th>Observaciones</th>
     <th>Inversión Departamento</th>
     <th>Otras Fuentes</th>
   </tr>
   <?php $__currentLoopData = $indicadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
       <tr>
         <td><?php echo e($ind->indicador->nombre_indicador); ?></td>
         <td><?php echo e($ind->indicador->meta); ?></td>
         <td><?php echo e($ind->cantidad); ?></td>
         <?php
         $val=0;
         $otros=0;
             $can=DB::table('indicador_solicitud as ind')->where('indicador_id', $ind->indicador->id)
             ->whereDate('ind.created_at', '>=' ,$date1)
             ->whereDate('ind.created_at', '<=', $date2)

             ->select('ind.solicitud_id')->get();
           
         ?>
         <td><?php echo e(count($can)); ?></td>
         <?php
         $cant=count($can);
         $total=($cant*100)/$ind->cantidad    
         ?>
         <td><?php echo e(round($total, 2)); ?>%</td>
          <td>
           <?php $__currentLoopData = $can; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $pre=DB::select('SELECT pro.titulo, p.fondo_mixto AS valor, 
            p.recurso_municipio, p.ministerio_cultura, p.ingreso_propio  FROM presupuestos p INNER JOIN proyectos pro 
            ON p.proyecto_id=pro.id WHERE pro.solicitud_id=?', [ $item->solicitud_id]);
            
            foreach($pre as $p){
              echo '*'. $p->titulo.'-$'.number_format($p->valor).'<br>';
              $val+=$p->valor;
              $otros+=$p->recurso_municipio+$p->ministerio_cultura+$p->ingreso_propio;
            }
           
            ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </td>
          <td>$<?php echo e(number_format($val, 0)); ?></td>
          <td>$<?php echo e(number_format($otros, 0)); ?></td>
        
        
        
       </tr>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </table>

</body>
</html><?php /**PATH C:\laragon\www\parque\resources\views/pdf/indicador-fechas.blade.php ENDPATH**/ ?>
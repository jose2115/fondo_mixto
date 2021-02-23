
<?php $__env->startSection('titulo', "Comprobantes"); ?>
<?php $__env->startSection('extra-css'); ?>
<!-- SweetAlert2 -->
<!-- icheck bootstrap -->
<link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link'); ?>
<div class="row mb-2">
  <div class="col-sm-12 text-center letra_titulo">
    <p>Comprobantes</p>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
  <div class="card card" style="background:#EBF5FB">
    <div class="card-header">   

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus">
            </i></button>
      </div>
    </div>
    <!-- /tabla -->
    <div class="card-body table-responsive" id="id_table">    
        <div id="datos">
          <table class="table table-condensed table-responsive" style="width: 100%;">
            <tr>
              <td>
                
              </td>
              <th>COMPROBANTE DE EGRESO N° <?php echo e($c->id); ?></th>
              <td></td>
            </tr>
            <tr>
              <th>BANCO</th>
              <th>BENEFICIARIO</th>
              <th>CHEQUE N°</th>
              <th>C.C NIT BENEFICIARIO</th>
              <th>FECHA</th>
            </tr>
            <tr>
              
              <td><?php echo e($c->banco); ?></td>                
              <td><?php echo e($c->beneficiario); ?></td>                
              <td><?php echo e($c->cheque); ?></td>
              <td><?php echo e($c->nit); ?></td>
              <td><?php echo e($c->fecha); ?></td>
            </tr>
            <tr>
              <th colspan="3">CONCEPTO</th>
              <th>VALOR</th>
            </tr>
            <tr>
              <td colspan="3">
                <?php echo e($c->concepto); ?>

              </td>
              <td>
          <?php echo e($c->valor); ?>

              </td>
            </tr>
            
            <tr>
              <th colspan="2">MENOS RETEFUENTE POR SERVICIO</th>
              <td style="width: 10%;">   
               <?php echo e($c->por_servicio); ?>%</td>

              <td>   $ <?php echo e(number_format($c->ret_servicio, 0)); ?></td>
            </tr>
            <tr>
              <th colspan="2">MENOS RETEFUENTE POR COMPRA</th>
              <td style="width: 10%;">   <?php echo e($c->por_compra); ?>%</td>
              <td>  $ <?php echo e(number_format($c->ret_compra, 0)); ?></td>
            </tr>
            <tr>
              <th colspan="2">ADMINISTRACIÓN Y PAPELERIA</th>
              <td style="width: 10%;">  <?php echo e($c->por_papeleria); ?>%</td>
              <td>  $ <?php echo e(number_format($c->admin_papeleria, 0)); ?></td>
            </tr>
            <tr>
              <th colspan="2">MENOS DEDUCCIONES Y DESCUENTOS</th>
              <td style="width: 5%;">   <?php echo e($c->por_descuento); ?> %</td>
              <td>   $ <?php echo e(number_format($c->descuentos, 0)); ?></td>
            </tr>
            <tr>
            <th colspan="2">SUBTOTAL</th>
            <td colspan="2">  $ <?php echo e(number_format($c->subtotal, 0)); ?></td>
          </tr>
          <tr>
            <th colspan="2">IVA</th>
            <td style="width: 5%;">  <?php echo e($c->por_iva); ?> %</td>
            <td > $ <?php echo e(number_format($c->iva, 0)); ?></td>
          </tr>
          <tr>
            <th colspan="2">TOTAL</th>
            <td colspan="2">   $ <?php echo e(number_format($c->total, 0)); ?></td>
          </tr>
         
        </tr>
            <tr>
              

             <td>
             <a  target="_blank" href="<?php echo e(route('reporte.comprobante', $c->id)); ?>" class="btn btn-primary"> <i class="fa fa-print"></i> IMPRIMIR</a>
             <a href="<?php echo e(route('comprobantes.edit', $c->id)); ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> EDITAR</a>
             </td>
           </tr>
          </table>
        </div>
      </form>
       


    </div>
    <!-- /fin tabla-->
    
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>

<!-- DataTables -->


<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!--data tables y js de documentos--->

<script src="<?php echo e(asset('js/comprobante.js')); ?>"></script>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/comprobantes/show.blade.php ENDPATH**/ ?>
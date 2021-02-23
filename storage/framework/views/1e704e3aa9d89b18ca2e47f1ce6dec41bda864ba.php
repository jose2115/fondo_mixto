
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
      <?php echo Form::model($comprobante, ['route' => ['comprobantes.update', $comprobante->id],
      'method' => 'PUT', 'id'=>'form_edit']); ?>

      <input type="hidden" name="solicitud_id" id="id" value="<?php echo e($comprobante->solicitud_id); ?>">
            

        <div id="datos">
          <table class="table table-condensed table-responsive" style="width: 100%;">
            <tr>
              <td>
                
              </td>
              <th>COMPROBANTE DE EGRESO N°</th>
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
              
              <td>
                <?php echo Form::text('banco', null, ['class'=>'form-control', 'id'=>'banco']); ?>

               </td>
               <td>
                <?php echo Form::text('beneficiario', null, ['class'=>'form-control', 'id'=>'banco']); ?>

               </td>              
              <td><?php echo Form::text('cheque', null, ['class'=>'form-control', 'id'=>'cheque']); ?></td>
              <td>
                <?php echo Form::text('nit', null, ['class'=>'form-control', 'id'=>'nit']); ?></td>
              <td> <?php echo Form::date('fecha', null, ['class'=>'form-control', 'id'=>'fecha']); ?></td>
            </tr>
            <tr>
              <th colspan="3">CONCEPTO</th>
              <th>VALOR</th>
            </tr>
            <tr>
              <td colspan="3">
                
                <textarea name="concepto" id="concepto" style="width: 100%;">
                  <?php echo e($comprobante->concepto); ?>

                </textarea>
              </td>
              <td>
                <input type="number" class="form-control" id="valor" name="valor" value="<?php echo e($comprobante->valor); ?>">
              </td>
            </tr>
            
            <tr>
              <th colspan="2">MENOS RETEFUENTE POR SERVICIO</th>
              <td style="width: 10%;">   
                <?php echo Form::number('por_servicio', null, ['class'=>'form-control', 'id'=>'por_servicio']); ?>%</td>

              <td>   <?php echo Form::number('ret_servicio', null, ['class'=>'form-control', 'id'=>'ret_servicio', 'readonly']); ?></td>
            </tr>
            <tr>
              <th colspan="2">MENOS RETEFUENTE POR COMPRA</th>
              <td style="width: 10%;">   <input type="number" class="form-control porcentaje" id="por_compra" name="por_compra" value="<?php echo e($comprobante->por_compra); ?>">%</td>
              <td>   <input type="number" class="form-control lect" id="ret_compra" name="ret_compra" value="<?php echo e($comprobante->ret_compra); ?>"></td>
            </tr>
            <tr>
              <th colspan="2">ADMINISTRACIÓN Y PAPELERIA</th>
              <td style="width: 10%;">   <?php echo Form::number('por_papeleria', null, ['class'=>'form-control', 'id'=>'por_papeleria']); ?>%</td>
              <td>   <?php echo Form::number('admin_papeleria', null, ['class'=>'form-control', 'id'=>'admin_papeleria', 'readonly']); ?></td>
            </tr>
            <tr>
              <th colspan="2">MENOS DEDUCCIONES Y DESCUENTOS</th>
              <td style="width: 5%;">   <?php echo Form::number('por_descuento', null, ['class'=>'form-control', 'id'=>'por_descuento']); ?> %</td>
              <td>   <?php echo Form::number('descuentos', null, ['class'=>'form-control', 'id'=>'descuentos', 'readonly']); ?></td>
            </tr>
            <tr>
            <th colspan="2">SUBTOTAL</th>
            <td colspan="2">  <?php echo Form::number('subtotal', null, ['class'=>'form-control', 'id'=>'subtotal', 'readonly']); ?></td>
          </tr>
          <tr>
            <th colspan="2">IVA</th>
            <td style="width: 5%;">   <input type="number" class="form-control porcentaje" id="por_iva" name="por_iva" value="<?php echo e($comprobante->por_iva); ?>"> %</td>
            <td >  <?php echo Form::number('iva', null, ['class'=>'form-control', 'id'=>'iva', 'readonly']); ?></td>
          </tr>
          <tr>
            <th colspan="2">TOTAL</th>
            <td colspan="2">  
              <?php echo Form::number('total', null, ['class'=>'form-control', 'id'=>'total', 'readonly']); ?>

            </td>
          </tr>
         
        </tr>
            <tr>
              

             <td>
               <button type="button" id="actualizar" class="btn btn-success" ><i class="fa fa-save"></i> GUARDAR</button>
             </td>
           </tr>
          </table>
        </div>
        <?php echo Form::close(); ?>

       


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




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\parque\resources\views/comprobantes/edit.blade.php ENDPATH**/ ?>
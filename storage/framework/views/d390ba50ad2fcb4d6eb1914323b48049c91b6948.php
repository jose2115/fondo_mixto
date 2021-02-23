
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
      <form id="form_create" action="<?php echo e(route('comprobantes.store')); ?>" method="POST" onkeypress="return disableEnterKey(event);" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <table class="table table-bordered">
          <input type="hidden" name="solicitud_id" id="id" value="<?php echo e($solicitud->id); ?>">                  
            <tr>
              <th>Proponente:</th>
              <td> <?php echo e($solicitud->solicitante->razon_social); ?></td>
            </tr>
            <tr>
              <th>Tipo:</th>
              <td><?php echo e($solicitud->categoria->tipo_solicitud); ?></td>
            </tr>
        </table>

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
              
              <td><input type="text" class="form-control" id="banco" name="banco"></td>         
              <td><input type="text" class="form-control" id="beneficiario" name="beneficiario"></td>   
              <td><input type="text" class="form-control" id="cheque" name="cheque"></td>
              <td><input type="text" class="form-control" id="nit" name="nit"></td>
              <td><input type="date" class="form-control" id="fecha" name="fecha"></td>
            </tr>
            <tr>
              <th colspan="3">CONCEPTO</th>
              <th>VALOR</th>
            </tr>
            <tr>
              <td colspan="3">
                <textarea name="concepto" id="concepto" style="width: 100%;"></textarea>
              </td>
              <td>
                <input type="number" class="form-control" id="valor" name="valor" >
              </td>
            </tr>
            
            <tr>
              <th colspan="2">MENOS RETEFUENTE POR SERVICIO</th>
              <td style="width: 10%;">   
                <input type="number" class="form-control porcentaje" id="por_servicio" name="por_servicio">%</td>

              <td>   <input type="number" class="form-control lect" id="ret_servicio" name="ret_servicio"></td>
            </tr>
            <tr>
              <th colspan="2">MENOS RETEFUENTE POR COMPRA</th>
              <td style="width: 10%;">   <input type="number" class="form-control porcentaje" id="por_compra" name="por_compra">%</td>
              <td>   <input type="number" class="form-control lect" id="ret_compra" name="ret_compra"></td>
            </tr>
            <tr>
              <th colspan="2">ADMINISTRACIÓN Y PAPELERIA</th>
              <td style="width: 10%;">   <input type="number" class="form-control porcentaje" id="por_papeleria" name="por_papeleria">%</td>
              <td>   <input type="number" class="form-control lect" id="admin_papeleria" name="admin_papeleria"></td>
            </tr>
            <tr>
              <th colspan="2">MENOS DEDUCCIONES Y DESCUENTOS</th>
              <td style="width: 5%;">   <input type="number" class="form-control porcentaje" id="por_descuento" name="por_descuento"> %</td>
              <td>   <input type="number" class="form-control lect" id="descuentos" name="descuentos"></td>
            </tr>
            <tr>
            <th colspan="2">SUBTOTAL</th>
            <td colspan="2">   <input type="text" class="form-control lect number" id="subtotal" name="subtotal"></td>
          </tr>
          <tr>
            <th colspan="2">IVA</th>
            <td style="width: 5%;">   <input type="number" class="form-control porcentaje" id="por_iva" name="por_iva"> %</td>
            <td >   <input type="number" class="form-control lect" id="iva" name="iva"></td>
          </tr>
          <tr>
            <th colspan="2">TOTAL</th>
            <td colspan="2">   <input type="text" class="form-control lect number" id="total" name="total"></td>
          </tr>
         
        </tr>
            <tr>
              

             <td>
               <button type="button" id="guardar" class="btn btn-success" ><i class="fa fa-save"></i> GUARDAR</button>
             </td>
           </tr>
          </table>
        </div>
      </form>
       


    </div>    <!-- /fin tabla-->
   
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>

<!-- DataTables -->


<!-- SweetAlert2 -->
<script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
<!--data tables y js de documentos--->

<script src="<?php echo e(asset('js/comprobante.js')); ?>"></script>
<script>
  const number = document.querySelector('.number');
  function formatNumber (n) {
    n = String(n).replace(/\D/g, "");
    return n === '' ? n : Number(n).toLocaleString();
  }
  number.addEventListener('keyup', (e) => {
    const element = e.target;
    const value = element.value;
    element.value = formatNumber(value);
  });
</script>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fomiclo27/public_html/resources/views/comprobantes/create-comprobante.blade.php ENDPATH**/ ?>
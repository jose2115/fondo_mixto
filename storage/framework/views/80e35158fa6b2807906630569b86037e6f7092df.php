<div class="modal fade" id="modalFormato" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" id="fondocontainer">
        <h4 id="centrartitle">Añadir Formato <i class="fas fa-user-plus"></i></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background:#E1E2E3">


        <div class="card card">
          <div class="card-header">
            <h3 class="card-title">Presentacion Proyecto</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /tabla -->
          <div class="card-body">

            <div class="form-row">

                <div class="col-md-6">
                <label for="">Fecha de Inicio</label>
                <input type="date" id="fecha_ini" name="fecha_ini" class="form-control">
              </div>

              <div class="col-md-6">
                <label for="">Fecha Final</label>
                <input type="date" id="fecha_fin" name="fecha_fin"  class="form-control">
              </div>
              
              

              <div class="col-md-12">
                <div class="form-group">
                <label>Líneas</label>
                    <select name="id_linea[]" id="id_linea" class="form-control select2bs4 show-tick" style="width: 100%;" multiple>
                      <?php $__currentLoopData = $lineas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option  value="<?php echo e($linea->id); ?>"><?php echo e($linea->descripcion); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
              </div>

            </div>



          </div>

          
          <!-- /fin tabla-->          
        </div>

        <!---  -->

         <div class="card card">
          <div class="card-header">
            <h3 class="card-title">Objetivos</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            </div>
          </div>
          <!-- /tabla -->
          <div class="card-body">

                         <div class="form-row">

                  <div class="col-md-10 col-sm-10"></div>
                      <div class="col-md-2 col-sm-2">
                            <button style="float:right" id="btnAddObjetivo" type="button" class="btn btn-primary btn-md btn-group-vertical" > <i class="fas fa-plus-circle"></i></button>
                      </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="total-999">Objetivo General:</label>
                      <input type="text" class="form-control" name="objetivo_general" id="objetivo_general">
                    </div>
                  </div>


                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="total-999">Objetivo Especifico:</label>
                      <input type="text" class="form-control"  id="objetivo_especifico">
                    </div>
                  </div>

                <div id="clonar_objetivo"></div>


                  <br>

                    <div class="table-responsive">
                        <table class="table table-hover table-sm  mejoratb" id="table_objetivo">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Objetivo especifico</th>
                                    
                                    <th style="width:20%" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody style="background-color:#EBF5FB">

                            </tbody>
                        </table>
                    </div>

                    <input type="hidden" id="table_objetivo_empty" value="1">

                </div>

               

            </div>
          

          
          <!-- /fin tabla-->          
        </div>


        
        



      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-success" onclick="validateFormato('<?php echo e(route('validate.formato')); ?>')">Completado <i class="fas fa-times-circle"></i></button>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\parque\resources\views/modals/add-formato.blade.php ENDPATH**/ ?>
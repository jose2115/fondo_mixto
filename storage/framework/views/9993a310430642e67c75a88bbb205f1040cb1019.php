
<div class="modal fade" id="modalCreate2" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer2">
          <h4 id="centrartitle"><label for="" class="le2">Editar Solicitantes</label>   <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
       
            <form id="form1" action="<?php echo e(route('solicitante.update', 'solicitante')); ?>" method="POST" onkeypress="return disableEnterKey(event);">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <input type="hidden" name="id_row" id="id_row">

                    <div class="form-row">
                        <div class="col-md-4">
                             <label for="">Tipo de Personeria</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                <select name="persona_id"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="persona_id3" required>
                                <option value="">Tipo de personeria</option>
                                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($persona->id); ?>"><?php echo e($persona->tipo_persona); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select> 
                                 <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                             <label for="">Tipo de Proponente:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                    <select name="proponente_id" id="proponente_id" class="form-control  <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <option value="">Tipo de Proponente</option>
                                     <?php $__currentLoopData = $proponentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proponente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($proponente->id); ?>"><?php echo e($proponente->nombre_proponente); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>
                         
                        <div class="col-md-4" id="tipo">
                            <label for="">Razón Social:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                               <input name="razon_social" id="razon_social" placeholder="Razón Social" type="text"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <label for="nit_cc" id="nit_cc"><strong>NIT:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Campo es requerido">
                              <input name="nid" id="nid" placeholder="NIT" type="text"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            
                        </div>
                        
                         <div class="col-md-4" id="celular">
                             <label for="celular" ><strong>Celular:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Celular es requerido">
					            <input name="celular"  id="celular" placeholder="Celular" type="number"   class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                                </div>
                        </div>

                        <div class="col-md-4" id="email">
                            <label for="email" ><strong>Correo Electrónico:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					            <input name="email" id="email" placeholder="Correo Electrónico" type="email"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>     
                                <span class="focus-input100"></span>
                        </div>
                            
                           
                        </div>
                        <div class="col-md-4">
                            <label for="departamento"><strong>Departamento:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <select name="nombre_departamento" id="id_departamento" class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> departamento" required>
                                    <option value="">Escoger Departamento</option>
                                        <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($departamento->id); ?>"><?php echo e($departamento->nombre_departamento); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>    
                             <span class="focus-input100"></span>
                         
                            </div>
                           
                        </div>

                        <div class="col-md-4">
                            <label for="municipio" ><strong>Municipio:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					               <select name="municipio_id"  id="municipio_id" class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> municipio" required>
                                        <option value="">---Escoger Municipio---</option> 
                                     
                                    </select> 
					               
                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="direccion" ><strong>Dirección:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="direccion" id="direccion" placeholder="Dirección" type="text"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>   
					                
                                    <span class="focus-input100"></span>
                         
                                </div>
                        </div>

                        <div class="col-md-12" id="legal">
                           
                            <h4>Datos del representante legal</h4>
                            <br>
                        </div>
                        <div class="col-md-4" id="nombres2">
                            <label for="">Nombres:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Nombre es requerido">
                               <input name="nombre" id="nombre" placeholder="Nombre" type="text"  class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required> 
                                <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                               <span class="focus-input100"></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-md-4" id="apellidos2">
                          <label for="apellido" ><strong>Apellidos:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <input name="apellido" id="apellido" placeholder="Apellidos" type="text"   class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                            </div>
                        </div>

                        <div class="col-md-4" id="cc">
                            <label for="email" ><strong>CC Repesentante Legal:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="cc" id="representante_legal" placeholder="CC" type="number"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <span class="focus-input100"></span>
                         
                        </div>
                            
                            
                        </div>

                        <div class="col-md-4" id="departamento">
                            <label for="departamento"><strong>Departamento:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <select name="nombre_departamento" id="id_departamento2" class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> departamento2" required>
                                    <option value="">Escoger Departamento</option>
                                        <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($departamento->id); ?>"><?php echo e($departamento->nombre_departamento); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>    
                             <span class="focus-input100"></span>
                        
                            </div>
                        </div>
                        <div class="col-md-4" id="municipio">
                            <label for="municipio" ><strong>Municipio:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					               <select name="municipio_id_r" id="municipio_id_r" class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> municipio2" required>
                                        <option value="">---Escoger Municipio---</option> 
                                     
                                    </select> 
					               
                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>
                        <div class="col-md-4" id="direccion">
                            <label for="direccion" ><strong>Dirección:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="direccion_r" id="direccion_r" placeholder="Dirección" type="text"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>   
					                
                                    <span class="focus-input100"></span>
                         
                                </div>
                        </div>
                        <div class="col-md-4">
                            <label for="celular" ><strong>Celular:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Celular es requerido">
					            <input name="celular_r" id="celular_r" placeholder="Celular" type="number"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                                </div>
                        </div>

                        <div class="col-md-4" id="email">
                           <label for="email" ><strong>Correo Electrónico:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					            <input name="email_r" id="correo_r" placeholder="Correo Electrónico" type="email"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>     
                                <span class="focus-input100"></span>
                        </div>

                        
                    </div>
            </form>
            <br>
                     <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                         <button id="actualizar" type="button" class="btn btn-success">Actualizar <i class="fas fa-pencil-alt"></i></button>
                    </div>
             </div>
           
           
           
           <form id="form2" action="<?php echo e(route('solicitante2.update', 'solicitante2')); ?>" method="POST" onkeypress="return disableEnterKey(event);">
                 <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>
                <input type="hidden" name="id_row" id="id_row">
                    <div class="form-row">
                        
                        <div class="col-md-4">
                             <label for="">Tipo de Personeria</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                <select name="persona_id"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="persona_id4" required>
                                <option value="">Tipo de personeria</option>
                                <?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $persona): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($persona->id); ?>"><?php echo e($persona->tipo_persona); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </select> 
                                 <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                             <label for="">Tipo de Proponente:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                    <select name="proponente_id" id="proponente_id2" class="form-control  <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                    <option value="">Tipo de Proponente</option>
                                     <?php $__currentLoopData = $proponentes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proponente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($proponente->id); ?>"><?php echo e($proponente->nombre_proponente); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>

                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>
                         
                       
                        <div class="col-md-4">
                            <label for="nit_cc" id="nit_cc"><strong>CC:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Campo es requerido">
                              <input name="cc" id="nit_cc2" placeholder="CC" type="text"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-4" id="nombres">
                             <label for="">Nombres:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Nombre es requerido">
                               <input name="nombre" id="nombre" placeholder="Nombre" type="text"  class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required> 
                                <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                               <span class="focus-input100"></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="col-md-4" id="apellidos">
                             <label for="apellido" ><strong>Apellidos:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <input name="apellido" id="apellido" placeholder="Apellidos" type="text"   class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                            </div>
                           
                           
                        </div>

                         <div class="col-md-4" id="celular">
                             <label for="celular" ><strong>Celular:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Celular es requerido">
					            <input name="celular_r" id="celular_r" placeholder="Celular" type="number"   class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>
                                <span class="focus-input100"></span>
                                </div>
                        </div>

                        <div class="col-md-4" id="email">
                            <label for="email" ><strong>Correo Electrónico:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					            <input name="email_r" id="correo_r" placeholder="Correo Electrónico" type="email"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>     
                                <span class="focus-input100"></span>
                        </div>
                            
                           
                        </div>
                        <div class="col-md-4">
                            <label for="departamento"><strong>Departamento:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <select name="nombre_departamento" id="id_departamento2" class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> departamento2" required>
                                    <option value="">Escoger Departamento</option>
                                        <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($departamento->id); ?>"><?php echo e($departamento->nombre_departamento); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>    
                             <span class="focus-input100"></span>
                         
                            </div>
                           
                        </div>

                        <div class="col-md-4" id="municipio">
                            <label for="municipio" ><strong>Municipio:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					               <select name="municipio_id_r"  id="municipio_id_r" class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> municipio2" required>
                                        <option value="">---Escoger Municipio---</option> 
                                     
                                    </select> 
					               
                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="direccion" ><strong>Dirección:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="direccion_r" id="direccion_r" placeholder="Dirección" type="text"  class="form-control <?php $__errorArgs = ['documento'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required>   
					                
                                    <span class="focus-input100"></span>
                         
                                </div>
                        </div>

                        
                        
            </form>
            <br>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                            <button id="actualizar2" type="button" class="btn btn-success">Actualizar <i class="fas fa-pencil-alt"></i></button>
                        </div>
        
                </div>
        </div>
       
     
    </div>
</div>
<?php /**PATH C:\laragon\www\parque\resources\views/modals/create-solicitantes2.blade.php ENDPATH**/ ?>
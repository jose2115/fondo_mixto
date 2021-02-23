
<div class="modal fade" id="modalCreate" data-backdrop="static">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" id="fondocontainer2">
          <h4 id="centrartitle"><label for="" class="le2">Crear Solicitantes</label>   <i class="fas fa-user-plus"></i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" style="background:#E1E2E3">
       
            <form id="formulario1" action="{{route('solicitante.store')}}" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                    <div class="form-row">
                        
                        <div class="col-md-4">
                             <label for="">Tipo de Personeria</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                <select name="persona_id"  class="form-control @error('documento') is-invalid @enderror" id="persona_id" required>
                                <option value="">Tipo de personeria</option>
                                @foreach ($personas as $persona)
                                    <option value="{{$persona->id}}">{{$persona->tipo_persona}}</option>
                                @endforeach
                                 </select> 
                                 <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                             <label for="">Tipo de Proponente:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                    <select name="proponente_id" class="form-control  @error('documento') is-invalid @enderror" required>
                                    <option value="">Tipo de Proponente</option>
                                     @foreach ($proponentes as $proponente)
                                    <option value="{{$proponente->id}}">{{$proponente->nombre_proponente}}</option>
                                    @endforeach
                                    </select>

                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>
                         
                        <div class="col-md-4" id="tipo">
                            <label for="">Razón Social:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                               <input name="razon_social" id="razon_social" placeholder="Razón Social" type="text"  class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <label for="nit_cc" id="nit_cc"><strong>NIT:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Campo es requerido">
                              <input name="nid" id="nit_cc2" placeholder="NIT" type="text"  class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            
                        </div>
                        
                         <div class="col-md-4" id="celular">
                             <label for="celular" ><strong>Celular:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Celular es requerido">
					            <input name="celular"  placeholder="Celular" type="number"   class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                                </div>
                        </div>

                        <div class="col-md-4" id="email">
                            <label for="email" ><strong>Correo Electrónico:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					            <input name="email"  placeholder="Correo Electrónico" type="email"  class="form-control @error('documento') is-invalid @enderror" required>     
                                <span class="focus-input100"></span>
                        </div>
                            
                           
                        </div>
                        <div class="col-md-4">
                            <label for="departamento"><strong>Departamento:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <select name="nombre_departamento"  class="form-control @error('documento') is-invalid @enderror departamento" required>
                                    <option value="">Escoger Departamento</option>
                                        @foreach ($departamentos as $departamento)
                                       <option value="{{$departamento->id}}">{{$departamento->nombre_departamento }}</option>
                                        @endforeach
                                    </select>    
                             <span class="focus-input100"></span>
                         
                            </div>
                           
                        </div>

                        <div class="col-md-4">
                            <label for="municipio" ><strong>Municipio:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					               <select name="municipio_id"  class="form-control @error('documento') is-invalid @enderror municipio" required>
                                        <option value="">---Escoger Municipio---</option> 
                                     
                                    </select> 
					               
                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="direccion" ><strong>Dirección:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="direccion"  placeholder="Dirección" type="text"  class="form-control @error('documento') is-invalid @enderror" required>   
					                
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
                               <input name="nombre" placeholder="Nombre" type="text"  class="form-control @error('nombre') is-invalid @enderror" required> 
                                @error('nombre')
                               <span class="focus-input100"></span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4" id="apellidos2">
                          <label for="apellido" ><strong>Apellidos:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <input name="apellido" placeholder="Apellidos" type="text"   class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                            </div>
                        </div>

                        <div class="col-md-4" id="cc">
                            <label for="email" ><strong>CC Repesentante Legal:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="cc"  placeholder="CC" type="number"  class="form-control @error('documento') is-invalid @enderror" required>
                                    <span class="focus-input100"></span>
                         
                        </div>
                            
                            
                        </div>

                        <div class="col-md-4" id="departamento">
                            <label for="departamento"><strong>Departamento:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <select name="nombre_departamento"  class="form-control @error('documento') is-invalid @enderror departamento2" required>
                                    <option value="">Escoger Departamento</option>
                                        @foreach ($departamentos as $departamento)
                                       <option value="{{$departamento->id}}">{{$departamento->nombre_departamento }}</option>
                                        @endforeach
                                    </select>    
                             <span class="focus-input100"></span>
                        
                            </div>
                        </div>
                        <div class="col-md-4" id="municipio">
                            <label for="municipio" ><strong>Municipio:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					               <select name="municipio_id_r"  class="form-control @error('documento') is-invalid @enderror municipio2" required>
                                        <option value="">---Escoger Municipio---</option> 
                                     
                                    </select> 
					               
                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>
                        <div class="col-md-4" id="direccion">
                            <label for="direccion" ><strong>Dirección:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="direccion_r"  placeholder="Dirección" type="text"  class="form-control @error('documento') is-invalid @enderror" required>   
					                
                                    <span class="focus-input100"></span>
                         
                                </div>
                        </div>
                        <div class="col-md-4">
                            <label for="celular" ><strong>Celular:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Celular es requerido">
					            <input name="celular_r"  placeholder="Celular" type="number"  class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                                </div>
                        </div>

                        <div class="col-md-4" id="email">
                           <label for="email" ><strong>Correo Electrónico:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					            <input name="email_r"  placeholder="Correo Electrónico" type="email"  class="form-control @error('documento') is-invalid @enderror" required>     
                                <span class="focus-input100"></span>
                        </div>

                        
                    </div>
            </form>
            <br>
                     <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                        <button id="guardar" type="button" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
                    </div>
             </div>
           
            
           
           <form id="formulario2" action="{{route('solicitante.store')}}" method="POST" onkeypress="return disableEnterKey(event);">
                @csrf
                    <div class="form-row">
                        
                        <div class="col-md-4">
                             <label for="">Tipo de Personeria</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                <select name="persona_id"  class="form-control @error('documento') is-invalid @enderror" id="persona_id2" required>
                                <option value="">Tipo de personeria</option>
                                @foreach ($personas as $persona)
                                    <option value="{{$persona->id}}">{{$persona->tipo_persona}}</option>
                                @endforeach
                                 </select> 
                                 <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                             <label for="">Tipo de Proponente:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
                                    <select name="proponente_id" class="form-control  @error('documento') is-invalid @enderror" required>
                                    <option value="">Tipo de Proponente</option>
                                     @foreach ($proponentes as $proponente)
                                    <option value="{{$proponente->id}}">{{$proponente->nombre_proponente}}</option>
                                    @endforeach
                                    </select>

                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>
                         
                       
                        <div class="col-md-4">
                            <label for="nit_cc" id="nit_cc"><strong>CC:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Campo es requerido">
                              <input name="cc" id="nit_cc2" placeholder="CC" type="text"  class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-4" id="nombres">
                             <label for="">Nombres:</label>
                            <div class="wrap-input100  validate-input con" data-validate="El Nombre es requerido">
                               <input name="nombre" placeholder="Nombre" type="text"  class="form-control @error('nombre') is-invalid @enderror" required> 
                                @error('nombre')
                               <span class="focus-input100"></span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4" id="apellidos">
                             <label for="apellido" ><strong>Apellidos:</strong></label>
                            <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <input name="apellido" placeholder="Apellidos" type="text"   class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                            </div>
                           
                           
                        </div>

                         <div class="col-md-4" id="celular">
                             <label for="celular" ><strong>Celular:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Celular es requerido">
					            <input name="celular_r"  placeholder="Celular" type="number"   class="form-control @error('documento') is-invalid @enderror" required>
                                <span class="focus-input100"></span>
                                </div>
                        </div>

                        <div class="col-md-4" id="email">
                            <label for="email" ><strong>Correo Electrónico:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					            <input name="email_r"  placeholder="Correo Electrónico" type="email"  class="form-control @error('documento') is-invalid @enderror" required>     
                                <span class="focus-input100"></span>
                        </div>
                            
                           
                        </div>
                        <div class="col-md-4">
                            <label for="departamento"><strong>Departamento:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					             <select name="nombre_departamento"  class="form-control @error('documento') is-invalid @enderror departamento" required>
                                    <option value="">Escoger Departamento</option>
                                        @foreach ($departamentos as $departamento)
                                       <option value="{{$departamento->id}}">{{$departamento->nombre_departamento }}</option>
                                        @endforeach
                                    </select>    
                             <span class="focus-input100"></span>
                         
                            </div>
                           
                        </div>

                        <div class="col-md-4" id="municipio">
                            <label for="municipio" ><strong>Municipio:</strong></label>
                             <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					               <select name="municipio_id_r"  class="form-control @error('documento') is-invalid @enderror municipio" required>
                                        <option value="">---Escoger Municipio---</option> 
                                     
                                    </select> 
					               
                                    <span class="focus-input100"></span>
                         
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="direccion" ><strong>Dirección:</strong></label>
                                <div class="wrap-input100  validate-input con" data-validate="El Usuario es requerido">
					                <input name="direccion_r"  placeholder="Dirección" type="text"  class="form-control @error('documento') is-invalid @enderror" required>   
					                
                                    <span class="focus-input100"></span>
                         
                                </div>
                        </div>

                        
                        
            </form>
            <br>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i></button>
                            <button id="guardar2" type="button" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
                        </div>
        
                </div>
        </div>
       
     
    </div>
</div>

 <div class="container blanco" >
            <form action="registrar" method="get" class="form-horizontal" id="formUsuarios">


                <div class="form-group">
                    <label class="col-md-4 control-label" for="id_nombre">Nombre:</label>
                    <div class="col-md-4">    
                        <input type="text" id="id_nombre" name=""  class="form-control input-md">
                            <span class="help-block" onclick="ayudaNombre()" style="cursor: pointer;">Ayuda</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_apellido">Apellido1:</label>
                        <div class="col-md-4">    
                            <input type="text" id="id_apellido1" name="" class="form-control input-md"/>
                            <span class="help-block" onclick="">Ayuda</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_apellido2">Apellido2:</label>
                        <div class="col-md-4">    
                            <input type="text" id="id_apellido2" name="" class="form-control input-md"/>
                            <span class="help-block" onclick="">Ayuda</span>
                        </div>
                    </div>



                    <div class="form-group">
                        <label for="id_tipoUsuario" class="control-label col-md-4">Tipo de usuario</label>
                        <div class="col-md-4">
                            <select name="" id="id_tipoUsuario" class="form-control">
                                <option>Administrador</option>
                                <option>Usuario</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="id_estado" class="control-label col-md-4">Estado:</label>
                        <div class="col-md-4">
                            <select name="" id="id_estado" class="form-control" onchange="">
                                <option><s:property value="Elegir"/></option>
                        </select>
                    </div>       
                </div>


                <div class="form-group">
                    <label for="id_municipioS" class="col-md-4 control-label">Municipio:</label>
                    <div class="col-md-4">
                        <select name="" class="form-control" id="id_municipio">
                             <option><s:property value="bu.municipioS"/></option>
                            <option id="idMuni">Elige una opción</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="id_estatus" class="control-label col-md-4">Estatus:</label>
                    <div class="col-md-4">
                        <select name="" class="form-control" id="id_estatus">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
                    </div>
                </div>    

                <div class="form-group">
                    <label for="id_fecha" class="col-md-4 control-label">Fecha de registro:</label>
                    <div class="col-md-4">
                        <input type="text" name="" class="form-control" id="id_fecha"/>
                    </div>
                </div>


                    
                <div class="form-goup">
                    <div class="col-md-4 col-md-offset-4" >
                        <input type="button" name="boton" class="form-control btn btn-primary"  id="btnRegMod" value="Aceptar" />
                    </div>
                </div>
                  <br>

                <div class="form-goup">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="button" value="Cancelar" style="display: none;" class="form-control btn" onclick="cancelar()" id="idCancelar"/>
                    </div>
                </div>
                    <br>
                   

                <input type="hidden" name="bu.id" id="idEliMod">
            </form>
        </div>
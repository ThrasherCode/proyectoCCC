 <div class="container blanco" >
            <form action="registroDocente" method="POST" class="form-horizontal" id="formUsuarios">


                <div class="form-group">
                    <label class="col-md-4 control-label" for="id_nombre">Nombre:</label>
                    <div class="col-md-4">    
                        <input type="text" id="id_nombre" name="nombre"  class="form-control input-md">
                        <span id="span1" class="glyphicon glyphicon-alert spAlert spInvisible"><span class="capRED">&nbsp;&nbsp;&nbsp;Revisar caracteres no validos</span></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_apellido1">Apellido1:</label>
                        <div class="col-md-4" >    
                            <input type="text" id="id_apellido1" name="apellido1" class="form-control input-md"/>
                            <span class="glyphicon glyphicon-alert spAlert spInvisible" id="span2"><span class="capRED">&nbsp;&nbsp;&nbsp;Revisar caracteres no validos</span></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label" for="id_apellido2">Apellido2:</label>
                        <div class="col-md-4">    
                            <input type="text" id="id_apellido2" name="apellido2" class="form-control input-md" />
                            <span class="glyphicon glyphicon-alert spAlert spInvisible" id="span3"><span class="capRED">&nbsp;&nbsp;&nbsp;Revisar caracteres no validos</span></span>
                        </div>
                    </div>

                <div class="form-group">
                    <label for="id_estatus" class="control-label col-md-4">Estatus:</label>
                    <div class="col-md-4">
                        <select name="estatus" class="form-control" id="id_estatus">
                            <option>Activo</option>
                            <option>Inactivo</option>
                        </select>
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
                   

                <input type="hidden" name="" id="idEliMod">
            </form>
        </div>
<main>
    <div class="container-fluid">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="zmdi zmdi-plus"></i> &nbsp;ADMINISTRADOR</h3>
            </div>
            <div class="panel-body">
                <form>
                    <fieldset>
                        <legend><i class="zmdi zmdi-account-box"></i> &nbsp; Información personal</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">DNI/CEDULA *</label>
                                        <input pattern="[0-9-]{1,30}" class="form-control" type="text" name="dni-reg"
                                            required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombres *</label>
                                        <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text"
                                            name="nombre-reg" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Apellidos *</label>
                                        <input pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,30}" class="form-control" type="text"
                                            name="apellido-reg" required="" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Teléfono</label>
                                        <input pattern="[0-9+]{1,15}" class="form-control" type="text"
                                            name="telefono-reg" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Dirección</label>
                                        <textarea name="direccion-reg" class="form-control" rows="2"
                                            maxlength="100"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-key"></i> &nbsp; Datos de la cuenta</legend>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nombre de usuario *</label>
                                        <input pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,15}" class="form-control" type="text"
                                            name="usuario-reg" required="" maxlength="15">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Contraseña *</label>
                                        <input class="form-control" type="password" name="password1-reg" required=""
                                            maxlength="70">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Repita la contraseña *</label>
                                        <input class="form-control" type="password" name="password2-reg" required=""
                                            maxlength="70">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">E-mail</label>
                                        <input class="form-control" type="email" name="email-reg" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label">Genero</label>
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsGenero" id="optionsRadios1"
                                                    value="Masculino" checked="">
                                                <i class="zmdi zmdi-male-alt"></i> &nbsp; Masculino
                                            </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsGenero" id="optionsRadios2"
                                                    value="Femenino">
                                                <i class="zmdi zmdi-female"></i> &nbsp; Femenino
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend><i class="zmdi zmdi-star"></i> &nbsp; Nivel de privilegios</legend>
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div class="radio radio-primary">
                                        <div class="col-xs-12 col-sm-6">
                                            <p class="text-left">
                                                <b>
                                                    <div class="label label-success">Nivel 1</div> Control total del
                                                    sistema
                                                </b>
                                            </p>
                                            <p class="text-left">
                                                <b>
                                                    <div class="label label-primary">Nivel 2</div> Permiso para registro
                                                    y actualización
                                                </b>
                                            </p>
                                            <p class="text-left">
                                                <b>
                                                    <div class="label label-info">Nivel 3</div> Permiso para registro
                                                </b>
                                            </p>
                                        </div>
                                        <label>

                                            <input type="radio" name="optionsPrivilegio" id="optionsRadios1" value="1">
                                            <i class="zmdi zmdi-star"></i> &nbsp; Nivel 1
                                        </label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="optionsPrivilegio" id="optionsRadios2" value="2">
                                            <i class="zmdi zmdi-star"></i> &nbsp; Nivel 2
                                        </label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <label>
                                            <input type="radio" name="optionsPrivilegio" id="optionsRadios3" value="3"
                                                checked="">
                                            <i class="zmdi zmdi-star"></i> &nbsp; Nivel 3
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <p class="text-center" style="margin-top: 20px;">
                        <button class="btn btn-success">Guardar</button>
                        <input class="btn btn-danger" type="reset" value="Limpiar"></a>
                    </p>
                </form>
            </div>
        </div>
    </div>





    </div>
    <div style="height: 100vh"></div>

    </div>
</main>
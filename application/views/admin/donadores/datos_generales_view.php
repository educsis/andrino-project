<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Datos Generales</h3>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-3">
                    <label class="form-label">Tipo de donación</label>
                    <div>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_donacion" value="sangre" checked>
                            <span class="form-check-label">Sangre Completa</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo_donacion" value="aferesis">
                            <span class="form-check-label">Aferesis</span>
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <label class="form-label">DPI / Pasaporte</label>
                <input type="text" class="form-control" name="pasaporte" autocomplete="off" required="true">
                </div>
                <div class="col-6">
                    <label class="form-label">Nombres y Apellidos</label>
                    <input type="text" class="form-control" name="nombre" autocomplete="off" required="true">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-3">
                    <label class="form-label">Género</label>
                    <div>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="M" checked>
                            <span class="form-check-label">Masculino</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" value="F">
                            <span class="form-check-label">Femenino</span>
                        </label>
                    </div>
                </div>
                <div class="col-9">
                    <label class="form-label">Grupo Étnico</label>
                    <div>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="etnico" value="mestizo" checked>
                            <span class="form-check-label">Mestizo</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="etnico" value="maya">
                            <span class="form-check-label">Maya</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="etnico" value="garifuna">
                            <span class="form-check-label">Garifuna</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="etnico" value="Xinca">
                            <span class="form-check-label">Xinca</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="etnico" value="otros">
                            <span class="form-check-label">Otros / Extranjeros</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="etnico" value="noindica">
                            <span class="form-check-label">No Indica</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                    <label class="form-label">Profesión u Oficio</label>
                    <input type="text" class="form-control" name="prof" autocomplete="off" required="true">
                </div>
                <div class="col-3">
                    <label class="form-label">Comunidad Lingüistica</label>
                    <input type="text" class="form-control" name="comunidad" autocomplete="off" required="true">
                </div>
                <div class="col-2">
                    <label class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="dob" autocomplete="off" required="true">
                </div>
                <div class="col-3">
                    <label class="form-label">Nacionalidad</label>
                    <input type="text" class="form-control" name="nacionalidad" autocomplete="off" required="true">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-9">
                    <label class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" autocomplete="off" required="true">
                </div>
                <div class="col-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" autocomplete="off" required="true">
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                    <label class="form-label">Estado Civil</label>
                    <div>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="civil" value="soltero" checked>
                            <span class="form-check-label">Soltero</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="civil" value="casado">
                            <span class="form-check-label">Casado</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="civil" value="unido">
                            <span class="form-check-label">Unido</span>
                        </label>
                        <label class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="civil" value="divorciado">
                            <span class="form-check-label">Divorciado</span>
                        </label>
                    </div>
                </div>
                <div class="col-2">
                    <label class="form-label">Tipo de Sangre</label>
                        <select class="form-select" name="tiposangre" autocomplete="off" required="true">
                            <option selected>Seleccionar</option>
                            <option value="1">A+</option>
                            <option value="2">A-</option>
                            <option value="3">B+</option>
                            <option value="4">B-</option>
                            <option value="5">AB+</option>
                            <option value="5">AB-</option>
                            <option value="5">O+</option>
                            <option value="5">O-</option>
                        </select>
                </div>
                <div class="col-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" autocomplete="off" required="true">
                </div>
            </div>
        </div>
    </div>
</div>
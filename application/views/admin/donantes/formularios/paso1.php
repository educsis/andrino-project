<div id="paso1" class="content">
    <div class="content-header mb-3">
        <h6 class="mb-0"><?= $title ?></h6>
    </div>
    <div class="row g-4">
        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="DPI / Pasaporte" />
                <label for="username">DPI / Pasaporte</label>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Nombres" />
                <label for="username">Nombres</label>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Apellidos" />
                <label for="username">Apellidos</label>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-floating form-floating-outline">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Seleccionar</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                </select>
                <label for="exampleFormControlSelect1">Sexo</label>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-floating form-floating-outline">
            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="flatpickr-date" />
                <label for="flatpickr-date">Fecha Nacimiento</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Seleccionar</option>
                    <option value="1">Mestizo</option>
                    <option value="2">Maya</option>
                    <option value="3">Garifuna</option>
                    <option value="4">Xinca</option>
                    <option value="5">Otros / Extrangeros</option>
                    <option value="6">No Indica</option>
                </select>
                <label for="exampleFormControlSelect1">Grupo Étnico</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Profesión u Oficio" />
                <label for="username">* Profesión u Oficio</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Comunidad Lingüistica" />
                <label for="username">Comunidad Lingüistica</label>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Lugar y Fecha de Nacimiento" />
                <label for="username">Lugar y Fecha de Nacimiento</label>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Nacionalidad" />
                <label for="username">Nacionalidad</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected>Seleccionar</option>
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    <option value="3">Unido</option>
                    <option value="4">Divorciado</option>
                    <option value="5">Otro</option>
                </select>
                <label for="exampleFormControlSelect1">Estado Civil</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-floating form-floating-outline">
                <input type="text" id="username" class="form-control" placeholder="Dirección" />
                <label for="username">Dirección</label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-floating form-floating-outline">
                <input type="text" id="telefono" class="form-control" placeholder="Teléfono" />
                <label for="username">Teléfono</label>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-floating form-floating-outline">
                <input type="email" id="username" class="form-control" placeholder="Email" />
                <label for="username">Email</label>
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-floating form-floating-outline">
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
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
                <label for="exampleFormControlSelect1">Tipo Sangre</label>
            </div>
        </div>
        <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-outline-secondary btn-prev" disabled>
            <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
            <i class="mdi mdi-arrow-right"></i>
            </button>
        </div>
    </div>
</div>
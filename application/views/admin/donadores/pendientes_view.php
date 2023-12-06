<?php
    $donadores = $this->model->get_donadores(1);
?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-orange">Donadores Pendientes</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-vcenter card-table">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Fecha</th>
                    <th>Tipo</th>
                    <th>Edad</th>
                    <th>Donador</th>
                    <th>Teléfono</th>
                    <th>Sangre</th>
                    <th class="w-1"></th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($donadores as $d){
                        $birthDate = date('m/d/Y', strtotime($d['dob']));
                        $birthDate = explode("/", $birthDate);
                        //get age from date or birthdate
                        $edad = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                            ? ((date("Y") - $birthDate[2]) - 1)
                            : (date("Y") - $birthDate[2]));

                        $id = str_pad($d['iddonadores'], 8, '0', STR_PAD_LEFT);
                    ?>
                    <tr>
                        <td class="text-center" style="width: 110px;"><?= $id ?></td>
                        <td class="text-muted text-center" style="width: 120px;">
                            <?= date('d-m-Y', strtotime($d['created_at'])) ?>
                        </td>
                        <td class="text-muted" style="width: 150px;"><?= $d['tipo_donacion'] ?></td>
                        <td class="text-muted" style="width: 50px; text-align: center;"><?= $edad ?></td>
                        <td class="text-muted" ><?= $d['nombre'] ?></td>
                        <td class="text-muted" style="width: 130px;"><?= $d['telefono'] ?></td>
                        <td class="text-muted" style="width: 50px;"><?= $d['tiposangre'] ?></td>
                        <td class="text-center" style="width: 140px;">
                            <a href="#" class="btn btn-success btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-danger btn-icon btn-sm rechazarBtn" data-id="<?= $d['iddonadores'] ?>" data-bs-toggle="modal" data-bs-target="#modal-rechazar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-default btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal modal-blur fade" id="modal-rechazar" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-red">Donador Rechazado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div>
                        <textarea class="form-control" name="razon" required="true"></textarea>
                        <input type="hidden" id="rechazadoID" name="idrechazado">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" name="rechazar" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
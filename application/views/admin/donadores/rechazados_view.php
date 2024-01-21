<?php
    $donadores = $this->model->get_donadores(3);
?>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-red">Diferidos Permanentemente</h3>
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

                        $id = str_pad($d['iddonadores'], 4, '0', STR_PAD_LEFT);
                    ?>
                    <tr>
                        <td class="text-center" style="width: 140px;"><?= $id . '-' . date('m-y', strtotime($d['created_at'])) ?></td>
                        <td class="text-muted text-center" style="width: 120px;">
                            <?= date('d-m-Y', strtotime($d['created_at'])) ?>
                        </td>
                        <td class="text-muted" style="width: 150px;"><?= $d['tipo_donacion'] ?></td>
                        <td class="text-muted" style="width: 50px; text-align: center;"><?= $edad ?></td>
                        <td class="text-muted" ><?= $d['nombre'] ?></td>
                        <td class="text-muted" style="width: 130px;"><?= $d['telefono'] ?></td>
                        <td class="text-muted" style="width: 70px;"><?= $d['tiposangre'] ?></td>
                        <td class="text-center" style="width: 110px;">
                            <a href="#" class="btn btn-default btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                            </a>
                            <a href="#" class="btn btn-yellow btn-icon btn-sm comentarioBtn" data-bs-toggle="modal" data-bs-target="#modal-comentario" data-comentario="<?= $d['comentarios'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
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

<div class="modal modal-blur fade" id="modal-comentario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-success"></div>
            <div class="modal-body text-center py-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message" width="54" height="54" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 9h8" /><path d="M8 13h6" /><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                <h3>Comentario</h3>
                <div class="text-muted" id="comentarioText"></div>
            </div>
        </div>
    </div>
</div>
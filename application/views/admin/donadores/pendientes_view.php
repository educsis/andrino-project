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
                    <th>Donador</th>
                    <th>Sangre</th>
                    <th class="w-1"></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 130px;">000001</td>
                        <td class="text-muted text-center" style="width: 120px;">
                            <?= date('d-m-Y') ?>
                        </td>
                        <td class="text-muted" style="width: 150px;">Sangre Completa</td>
                        <td class="text-muted" >Fulano de Tal</td>
                        <td class="text-muted" style="width: 70px;">B+</td>
                        <td class="text-center" style="width: 110px;">
                            <a href="#" class="btn btn-success btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-danger btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width: 130px;">000002</td>
                        <td class="text-muted text-center" style="width: 120px;">
                            <?= date('d-m-Y') ?>
                        </td>
                        <td class="text-muted" style="width: 150px;">Aferesis</td>
                        <td class="text-muted">Mengano de Tal</td>
                        <td class="text-muted" style="width: 70px;">B+</td>
                        <td class="text-center" style="width: 110px;">
                            <a href="#" class="btn btn-green btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </a>
                            <a href="#" class="btn btn-red btn-icon btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
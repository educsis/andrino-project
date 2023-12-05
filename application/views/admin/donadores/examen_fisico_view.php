<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Examén Físico y Datos Clínicos</h3>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-2">
                    <label class="form-label">Peso Lb.</label>
                    <input type="text" class="form-control" name="peso" autocomplete="off" required="true">
                </div>
                <div class="col-2">
                    <label class="form-label">Temperatura °C</label>
                    <input type="text" class="form-control" name="temp" autocomplete="off" required="true">
                </div>
                <div class="col-2">
                    <label class="form-label">Presión Arterial</label>
                    <input type="text" class="form-control" name="presion" autocomplete="off" required="true">
                </div>
                <div class="col-2">
                    <label class="form-label">Pulso</label>
                    <input type="text" class="form-control" name="pulso" autocomplete="off" required="true">
                </div>
                <div class="col-2">
                    <label class="form-label">Hemoglobina</label>
                    <input type="text" class="form-control" name="hemoglobina" autocomplete="off" required="true">
                </div>
                <div class="col-2" style="text-align: right;">
                    <label class="form-label text-white">a</label>
                    <button type"submit" name="guardar" class="btn btn-success">Guardar</button>
                    <a href="<?= base_url('admin/donadores/lista-donadores') ?>" class="btn btn-white">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
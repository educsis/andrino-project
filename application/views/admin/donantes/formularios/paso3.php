<div id="paso3" class="content">
    <div class="content-header mb-3">
    <h6 class="mb-0"><?= $title ?></h6>
    </div>
    <div class="row g-4">
    <div class="col-sm-2">
        <small class="text-light fw-semibold d-block">¿Cómo se siente hoy de salud?</small>
        <div class="form-check form-check-inline mt-3">
            <input
            class="form-check-input"
            type="radio"
            name="sentir"
            id="sentir1"
            value="option1"
            checked="true" />
            <label class="form-check-label" for="inlineRadio1">Bien</label>
        </div>
        <div class="form-check form-check-inline">
            <input
            class="form-check-input"
            type="radio"
            name="sentir"
            id="sentir2"
            value="option2" />
            <label class="form-check-label" for="inlineRadio2">Mal</label>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="form-floating form-floating-outline">
        <input
            type="text"
            id="facebook"
            class="form-control"
            placeholder="Mal, ¿Por qué?" />
        <label for="facebook">Mal, ¿Por qué?</label>
        </div>
    </div>
    <div class="col-sm-2">
        <small class="text-light fw-semibold d-block">¿Su donación de sangre hoy es?</small>
        <div class="form-check form-check-inline mt-3">
            <input
            class="form-check-input"
            type="radio"
            name="inlineRadioOptions"
            id="inlineRadio1"
            value="option1"
            checked="true" />
            <label class="form-check-label" for="inlineRadio1">Voluntaria</label>
        </div>
        <div class="form-check form-check-inline">
            <input
            class="form-check-input"
            type="radio"
            name="inlineRadioOptions"
            id="inlineRadio2"
            value="option2" />
            <label class="form-check-label" for="inlineRadio2">Por preposición</label>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-between">
        <button class="btn btn-outline-secondary btn-prev">
        <i class="mdi mdi-arrow-left me-sm-1 me-0"></i>
        <span class="align-middle d-sm-inline-block d-none">Previous</span>
        </button>
        <button class="btn btn-primary btn-submit">Submit</button>
    </div>
    </div>
</div>  
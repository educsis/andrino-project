<!-- Content -->
<div class="container-fluid flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <h5>Nuevo Donante</h5>
        </div>

        <!-- Default Wizard -->
        <div class="col-12 mb-4">
            <div class="bs-stepper wizard-numbered mt-2">
            <div class="bs-stepper-header">
                <div class="step" data-target="#paso1">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-number">01</span>
                        </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#paso2">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-number">02</span>
                        </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#paso3">
                    <button type="button" class="step-trigger">
                        <span class="bs-stepper-circle"><i class="mdi mdi-check"></i></span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-number">03</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form onSubmit="return false">
                    <?php 
                        $data['title'] = 'Datos Generales';
                        $this->load->view('admin/donantes/formularios/paso1', $data);
                    ?>
                    <?php 
                        $data['title'] = 'Examen Físico  y Datos Clínicos';
                        $this->load->view('admin/donantes/formularios/paso2', $data);
                    ?>
                    <?php 
                        $data['title'] = 'Entrevista';
                        $this->load->view('admin/donantes/formularios/paso3', $data);
                    ?>
                </form>
            </div>
            </div>
        </div>
        <!-- /Default Wizard -->
    </div>
</div>
<!--/ Content -->
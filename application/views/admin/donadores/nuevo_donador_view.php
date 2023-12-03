<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Nuevo Donador
        </h2>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <?= $this->load->view('admin/donadores/datos_generales_view', '', TRUE) ?>
      <?= $this->load->view('admin/donadores/examen_fisico_view', '', TRUE) ?>
    </div>
  </div>
</div>

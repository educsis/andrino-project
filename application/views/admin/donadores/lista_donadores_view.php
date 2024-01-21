<div class="page-header d-print-none">
  <div class="container-xl">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Donadores
        </h2>
      </div>
      <div class="col-auto ms-auto d-print-none">
        <a href="<?= base_url('admin/donadores/nuevo_donador') ?>" class="btn btn-primary">
          <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
          Nuevo Donador
        </a>
      </div>
    </div>
  </div>
</div>
<div class="page-body">
  <div class="container-xl">
    <div class="row row-cards">
      <?= $this->load->view('admin/donadores/pendientes_view', '', TRUE) ?>
      <?= $this->load->view('admin/donadores/aceptados_view', '', TRUE) ?>
      <?= $this->load->view('admin/donadores/temporal_view', '', TRUE) ?>
      <?= $this->load->view('admin/donadores/rechazados_view', '', TRUE) ?>
    </div>
  </div>
</div>

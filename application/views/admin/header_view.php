<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url() ?>"
  data-template="horizontal-menu-template-starter">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Banco de Sangre Andrino .::. <?= $titulo ?></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon/favicon.ico') ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/materialdesignicons.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fonts/fontawesome.css') ?>" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/css/rtl/core.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/css/rtl/theme-raspberry.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/demo.css') ?>" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/node-waves/node-waves.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/typeahead-js/typeahead.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/bs-stepper/bs-stepper.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/bootstrap-select/bootstrap-select.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/select2/select2.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/flatpickr/flatpickr.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/pickr/pickr-themes.css') ?>" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?= base_url('assets/vendor/js/template-customizer.js') ?>"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/js/config.js') ?>"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="<?= base_url('admin/dashboard') ?>" class="app-brand-link gap-2">
                <img src="<?= base_url('assets/img/logo.svg') ?>" alt="logo" style="width: 140px;">
              </a>

              <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                <i class="mdi mdi-close align-middle"></i>
              </a>
            </div>

            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <div class="navbar-nav align-items-center">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                  <i class="mdi mdi-24px"></i>
                </a>
              </div>

              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?= base_url('assets/img/avatars/20.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?= base_url('assets/img/avatars/20.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Jenni Andrino</span>
                            <small class="text-muted">Administradora</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-outline me-2"></i>
                        <span class="align-middle">Mi Perfil</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-cog-outline me-2"></i>
                        <span class="align-middle">Configuración</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= base_url('admin/dashboard/logout') ?>">
                        <i class="mdi mdi-power me-2"></i>
                        <span class="align-middle">Cerrar Sesión</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
              <div class="container-xxl d-flex h-100">
                <ul class="menu-inner py-1">
                  <!-- Page -->
                  <li class="menu-item <?= ($titulo == 'Inicio')?'active':'' ?>">
                    <a href="<?= base_url('admin/dashboard') ?>" class="menu-link">
                      <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                      <div data-i18n="Page 1">Inicio</div>
                    </a>
                  </li>
                  <li class="menu-item <?= ($titulo == 'Nuevo Donante')?'active':'' ?>">
                    <a href="<?= base_url('admin/donantes/donante/nuevo_donante') ?>" class="menu-link">
                      <i class="menu-icon tf-icons mdi mdi-plus-outline"></i>
                      <div data-i18n="Page 2">Nuevo Donante</div>
                    </a>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- / Menu -->
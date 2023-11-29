<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?= base_url() ?>"
  data-template="horizontal-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login Basic - Pages | Materialize - Material Design HTML Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon/favicon.ico') ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
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
    <!-- Vendor -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') ?>" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/css/pages/page-auth.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css') ?>" />
    <!-- Helpers -->
    <script src="<?= base_url('assets/vendor/js/helpers.js') ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('assets/js/config.js') ?>"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative wrapper">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <img src="<?= base_url('assets/img/logo.svg') ?>" alt="logo" style="width: 300px;">
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">
              <form id="formAuthentication" class="mb-3" method="POST">
                <div class="form-floating form-floating-outline mb-3">
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Ingresar su usuario"
                    required="true"
                    autocomplete="off"
                    autofocus />
                  <label for="email">Usuario</label>
                </div>
                <div class="mb-3">
                  <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                      <div class="form-floating form-floating-outline">
                        <input
                          type="password"
                          id="password"
                          class="form-control"
                          name="password"
                          placeholder="Ingresar contraseña"
                          required="true"
                          autocomplete="off"
                          aria-describedby="password" />
                        <label for="password">Contraseña</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" name="login" type="submit">ENTRAR</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Login -->
         
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= base_url('assets/vendor/libs/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/popper/popper.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/js/bootstrap.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/node-waves/node-waves.jsv') ?>"></script>

    <script src="<?= base_url('assets/vendor/libs/hammer/hammer.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/i18n/i18n.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/typeahead-js/typeahead.js') ?>"></script>

    <script src="<?= base_url('assets/vendor/js/menu.js') ?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?= base_url('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.jsv') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') ?>"></script>

    <!-- Main JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

    <!-- Page JS -->
    <script src="<?= base_url('assets/js/pages-auth.js') ?>"></script>
  </body>
</html>

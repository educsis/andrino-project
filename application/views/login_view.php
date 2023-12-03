<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Andrido .::. Login</title>
    <!-- CSS files -->
    <link href="<?= base_url('dist/css/tabler.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/css/tabler-flags.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/css/tabler-payments.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/css/tabler-vendors.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('dist/css/demo.min.css?1684106062') ?>" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column bg-white">
    <script src="<?= base_url('dist/js/demo-theme.min.js?1684106062') ?>"></script>
    <div class="row g-0 flex-fill">
      <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-red d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="<?= base_url('static/logo.svg') ?>" height="70" alt=""></a>
          </div>
          <form method="POST" autocomplete="off" novalidate>
            <?php
            if($msg == 'error') {
            ?>
            <div class="alert alert-danger" role="alert">
                Hay un error en su usuario o contraseña.
            </div>
            <?php
            }
            ?>
            <div class="mb-3">
              <label class="form-label">Usuario</label>
              <input name="username" type="text" class="form-control" placeholder="Ingresar Usuario" autocomplete="off" required="true">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Contraseña
              </label>
              <div class="input-group input-group-flat">
                <input name="password" type="password" class="form-control"  placeholder="Ingresar Contraseña"  autocomplete="off">
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" name="login" class="btn btn-primary w-100 bg-red text-red-fg">Ingresar</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url('<?= base_url('static/photos/blood.png') ?>')"></div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?= base_url('dist/js/tabler.min.js?1684106062') ?>" defer></script>
    <!-- <script src="./dist/js/demo.min.js?1684106062" defer></script> -->
  </body>
</html>
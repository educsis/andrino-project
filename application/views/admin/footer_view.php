<footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    .::. creado por <span><img src="<?= base_url('static/krc.png') ?>" alt=""></span>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                    
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
     <!-- Libs JS -->
    <script src="<?= base_url('dist/libs/nouislider/dist/nouislider.min.js?1684106062') ?>" defer></script>
    <script src="<?= base_url('dist/libs/litepicker/dist/litepicker.js?1684106062') ?>" defer></script>
    <script src="<?= base_url('dist/libs/tom-select/dist/js/tom-select.base.min.js?1684106062') ?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url('dist/js/tabler.min.js?1684106062') ?>" defer></script>
    <script src="<?= base_url('dist/js/demo.min.js?1684106062') ?>" defer></script>
    <script>
      // @formatter:off
      document.addEventListener("DOMContentLoaded", function () {
        window.Litepicker && (new Litepicker({
          element: document.getElementById('datepicker-icon-prepend'),
          buttonText: {
            previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
                    nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
                  },
                }));
              });
      // @formatter:on
  </script>
  </body>
</html>
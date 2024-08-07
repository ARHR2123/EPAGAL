<footer class="footer" style="width: 95%;">
          <div class="container-fluid d-flex justify-content-between">
            <nav class="pull-left">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    EPAGAL
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://epagal.gob.ec/servicios/"> Nuestros Servicios </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://epagal.gob.ec/"> Sitio Web </a>
                </li>
              </ul>
            </nav>
            <div class="copyright">
              <p>Copyright &copy; 2024 EPAGAL - Todos los Derechos Reservados</p>
            </div>
            <div>
              <a target="_blank" href="https://epagal.gob.ec/quienes-somos/">Sobre Nosotros</a>.
            </div>
          </div>
        </footer>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/core/jquery-3.7.1.min.js"); ?>" ></script>
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/core/popper.min.js"); ?>" ></script>
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/core/bootstrap.min.js"); ?>" ></script>

    <!-- jQuery Scrollbar -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"); ?>" ></script>

    <!-- Chart JS -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/chart.js/chart.min.js"); ?>" ></script>

    <!-- jQuery Sparkline -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"); ?>" ></script>

    <!-- Chart Circle -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/chart-circle/circles.min.js"); ?>" ></script>

    <!-- Datatables -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/datatables/datatables.min.js"); ?>" ></script>

    <!-- Bootstrap Notify
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"); ?>" ></script> -->

    <!-- jQuery Vector Maps -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/jsvectormap/jsvectormap.min.js"); ?>" ></script>
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/jsvectormap/world.js"); ?>" ></script>

    <!-- Sweet Alert -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/plugin/sweetalert/sweetalert.min.js"); ?>" ></script>

    <!-- Kaiadmin JS -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/kaiadmin.min.js"); ?>" ></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/setting-demo.js"); ?>" ></script>
    <script src="<?php echo base_url("assets/plantilla/kaiadmin-lite-1.2.0/assets/js/demo.js"); ?>" ></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>

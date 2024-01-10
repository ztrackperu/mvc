
<footer class="main-footer">
      <strong>Copyright &copy; <span >Sistema Administrativo</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url; ?>Assets2/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url; ?>Assets2/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url; ?>Assets2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?php echo base_url; ?>Assets2/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url; ?>Assets2/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?php echo base_url; ?>Assets2/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?php echo base_url; ?>Assets2/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url; ?>Assets2/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?php echo base_url; ?>Assets2/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url; ?>Assets2/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?php echo base_url; ?>Assets2/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?php echo base_url; ?>Assets2/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?php echo base_url; ?>Assets2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url; ?>Assets2/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url; ?>Assets2/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url; ?>Assets2/dist/js/pages/dashboard.js"></script>
  <!-- DataTables  & Plugins -->
<!-- <script src="<?php echo base_url; ?>Assets2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url; ?>Assets2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.7.0.js" ></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" ></script>


  <script>
    const ruta = '<?php echo base_url; ?>';
</script>


  <?php

if(!empty($_GET['url'])){
    $script =$_GET['url'].'.js';
    if(file_exists('assets2/js/'.$script)){

        echo '<script src="'.base_url.'assets2/js/'.$script.'"></script>';

    }
    else{
        echo "no reconocido";
    }
}else{
    echo '<script src="'.base_url.'Assets/js/login.js"></script>';
}

  ?>

</body>

</html>
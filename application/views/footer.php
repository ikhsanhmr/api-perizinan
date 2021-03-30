<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2019 <a href="#">PLN STI SUMUT</a>.</strong> All rights
  reserved.
</footer>


<!-- Add the sidebar's background. This div must be placed
 immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>public/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>public/assets/dist/js/demo.js"></script>

<script src="<?php echo base_url(); ?>public/assets/timeline/timeline.min.js"></script>


<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>public/assets/bower_components/datatables.net-bs/js/buttons.colVis.min.js"></script>
<!-- page script -->

<!-- InputMask -->
<script src="<?php echo base_url(); ?>public/assets/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/assets/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- InputMask -->


<!-- ChartJS -->
<script src="<?php echo base_url(); ?>public/assets/chartjs/Chart.js"></script>
<!-- ChartJS -->

<!-- Select2 -->
<script src="<?php echo base_url(); ?>public/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Select2 -->

<script>
  fetch('https://siaplayani.sumutprov.go.id/main/apiweb/pln/yu8wgeArYwxn/all')
    .then(res => {
      return res.json()
    }).then(data => {
      let html = ""
      let no = 1
      data.map(item => {
        html = html + `
          <tr>
            <td>${no}</td>
            <td>${item.no_pendaftaran}</td>
            <td>${item.nama_pemohon}</td>
            <td>${item.nama_izin}</td>
            <td>${item.lokasi_izin}</td>
            <td>${item.kebutuhan_listrik}</td>
            <td>${item.thn_rencana_operasi}</td>
            <td>${item.status_berkas}</td>
            <td>${item.telp}</td>
            <td>${item.alamat_pemohon}</td>
            <td>${item.nama_perusahaan}</td>
            <td>${item.alamat_perusahaan}</td>
            <td>${item.email_perusahaan}</td>
            <td>${item.telp_perusahaan}</td>
            <td>${item.npwp_perusahaan}</td>
            <td>${item.NIB}</td>
            <td>${item.provinsi}</td>
            <td>${item.kabupaten}</td>
            <td>${item.kecamatan}</td>
            <td>${item.kelurahan}</td>
          </tr>
        `
        no++
      })
      dataPerijinan = [...data]
      document.querySelector('#table_aplikasi_perijinan tbody').innerHTML = html
      console.log(dataPerijinan)
      $(document).ready(function() {
        $('#table_aplikasi_perijinan').DataTable({
          "scrollX": true
        })
      })
    })
</script>
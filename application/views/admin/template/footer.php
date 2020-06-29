<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Gema fajar ramadhan</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
    </div>
</footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!--  -->
</div>
<!--  -->
<!-- modal logout -->
<div class="modal" id="logout">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <i>Apa Anda Yakin Ingin Keluar?</i>
        <br>
        <div align="right">
          <a href="<?= base_url('logouts') ?>" style="width:60px" class="btn btn-primary btn-sm">OK</a>
          <button class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<script src="<?= base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>dist/js/adminlte.js"></script>
<script src="<?= base_url('assets/admin/') ?>ckeditor/ckeditor.js"></script>
<script src="<?= base_url('assets/admin/') ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function () {
    $("#example1").DataTable({
      responsive: true,
      dom: 'Bfrtip',
      buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
    });
    $("#example2").DataTable({
      responsive: true,
    });
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
    if($this->session->flashdata('pesan') == TRUE)
    {
?>
    <script>
    Swal.fire(
    'Good job!',
    '<?= $this->session->flashdata('pesan') ?>',
    'success'
    )
    </script>
<?php
    }
?>
</body>
</html>

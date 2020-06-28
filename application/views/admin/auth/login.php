<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="background-color:grey">

<div class="container">
    <div class="row py-5">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
            <form action="<?= base_url('logins') ?>" method="POST">
                <div class="card-body">
                    <center><h3>Login</h3></center>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" id="username" placeholder="Username" name="username" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" required class="form-control">
                    </div>
                    <div align="right">
                        <button type="submit" inclick="cekLogin()" class="btn btn-success" name="login">Log In</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url('assets/admin/') ?>plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url('assets/admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/sparklines/sparkline.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?= base_url('assets/admin/') ?>dist/js/adminlte.js"></script>
<script src="<?= base_url('assets/admin/') ?>dist/js/pages/dashboard.js"></script>
<script src="<?= base_url('assets/admin/') ?>dist/js/demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
    if($this->session->flashdata('error') == TRUE)
    {
?>
    <script>
    Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: '<?= $this->session->flashdata('error') ?>'
    })
    </script>
<?php
    }
?>
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
<script>
    // $(document).ready(function(){
    //     $('#username').focus()
    // })

    function cekLogin()
    {
        var username = $('#username').val()
        var password = $('#password').val()
        if(username == '')
        {
            alert('username kosong...')
        }else if(password == '')
        {
            alert('Password Kosong..')
        }
    }
</script>
</body>
</html>

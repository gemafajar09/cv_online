<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Curiculum Vitae</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/cvs.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/assets/owlcarousel/assets/owl.theme.default.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
  <!-- visitor -->
  <?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $tanggal = date("Ymd");
    $waktu   = time();   
    $s = $this->db->query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'")->num_rows();
         
         if($s == 0){
            $this->db->query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
         }
         else{
            $this->db->query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
         }
?>
  <!--  -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-dark"><a href="<?= base_url('halaman') ?>"><span>MAKE.CV</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url('halaman') ?>">Home</a></li>

          <!-- <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Team</a></li>
            </ul>
          </li> -->
           
          <li><a href="<?= base_url('halaman#portofolio') ?>">Portfolio</a></li>
          <?php
            if($this->session->userdata('id_user') != NULL)
            {
          ?>
          <li><a href="<?= base_url('create') ?>">Create CV</a></li>
            <?php } ?>
          <?php
            if($this->session->userdata('id_user') != NULL){
          ?>
          <li class="drop-down"><a href="#"><img src="<?= base_url('assets/img/user.png') ?>" class="img-circle" width="20px" alt="Cinque Terre"> <?= $this->session->userdata('nama_user') ?></a>
            <ul>
              <li><a href="<?= base_url('history') ?>">History</a></li>
              <li><a href="<?= base_url('keluar') ?>">Log Out</a></li>
            </ul>
          </li>
          <?php
            }else{
          ?>
          <li class="drop-down"><a href="#">Sign In</a>
            <ul>
              <li><a href="#login"  data-toggle="modal">Login</a></li>
              <li><a href="#register" data-toggle="modal">Daftar</a></li>
            </ul>
          </li>
            <?php } ?>
        </ul>
      </nav>

    </div>
  </header>

  <!-- modal login -->
  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" style="background:none;">
        <div class="modal-body">
          <form action="<?= base_url('login') ?>" method="POST">
            <div class="row">
              <div class="col-md-4">
                  <img src="<?= base_url('assets/img/cvs.png') ?>" width="80px" alt="">
              </div>
              <div class="col-md-8">
                <h1 style="color:white">LOG IN</h1>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" required name="username" placeholder="Username" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" required name="password" placeholder="Password" class="form-control">
                </div>
              </div>
            </div>
            <div align="right">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>

  <div id="register" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" style="background:none;">
        <div class="modal-body">
          <form action="<?= base_url('register') ?>" method="POST">
            <div class="row">
              <div class="col-md-4">
                  <img src="<?= base_url('assets/img/cvs.png') ?>" width="80px" alt="">
              </div>
              <div class="col-md-8">
                <h1 style="color:white">Register NOW</h1>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" required name="nama" id="nama" placeholder="Nama Lengkap" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" required name="password" id="password" Placeholder="Password" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" required name="username" id="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <label>Repet Password</label>
                  <input type="password" required name="password2" id="password2" placeholder="Repeat Password" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" required name="email" id="email" placeholder="Email" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <br>
                  <button type="submit" class="btn btn-primary btn-lg">Register</button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- tutup modal -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(<?= base_url('assets/img/slide/slide-1.jpg') ?>)">
          </div>
<?php
$slide = $this->db->query("SELECT * FROM `slider`")->result();
foreach($slide as $a): 
?>
          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(<?= base_url('upload/slider/'.$a->gambar) ?>)">
            <div class="carousel-container">
              <div class="carousel-content">
                <!-- <h2 class="animated fadeInDown">Lorem <span>Ipsum Dolor</span></h2> -->
                <p class="animated fadeInUp"><?= $a->deskripsi ?></p>
                <!-- <a href="" class="btn-get-started animated fadeInUp">Read More</a> -->
              </div>
            </div>
          </div>
<?php endforeach ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
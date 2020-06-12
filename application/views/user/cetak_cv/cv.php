<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Curiculum Vitae</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets') ?>/img/cvs.png" rel="icon">
  <link href="<?= base_url('assets') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets') ?>assets/css/style.css" rel="stylesheet">

  <style>

    /* Sisi Kiri */
    .kontak{
      margin-bottom:30px; 
      margin-top:30px;
    }

    .kanan{
      padding-right:15px;
    }

    .samping{
      background-color:#007bff; 
      color:#fff; 
      margin-bottom:30px;
      height:100%;
    }

    .samping-konten{
      margin-left:40px; 
      margin-top:30px;
    }


    .garis{
      display: flex;
      height: 3px;
      overflow: hidden;
      font-size: .75rem;
      background-color: #fff;
      margin-top:10px;
    }

    .bawah{
      margin-bottom:10px
    }

    .bawah-kontak{
      margin-bottom:15px
    }

    .skil{
      font-size:14px;
    }

    .jinterest{
      margin-bottom:15px
    }

    .progress{
      margin-top: 4px;
    }

    .progress-bar{
      background-color: #ffc107;
    }

    /* End Sisi Kiri */
    
    /* sisi kanan */
    .kiri{
      margin-left:40px; 
      margin-top:80px;
    }

    .belakang{
      color:#007bff;
    }

    .jarak-h{
      line-height: 0.8;
    }

    .garis-kanan{
      display: flex;
      height: 3px;
      overflow: hidden;
      font-size: .75rem;
      background-color: #007bff;
      margin-top:10px;
    }
    /* end sisi kanan */
  </style>

</head>

<body>
  <!--  -->
<?php
$id = $this->session->userdata('id_user');
$dataUser = $this->db->query("SELECT id_buat FROM user WHERE id_user='$id'")->row_array();
$id_buat = $dataUser['id_buat'];
$data = $this->db->query("SELECT * FROM buat_cv WHERE id_buat = '$id_buat'")->row_array();
?>
  <!--  -->
  <div class="container-fluid">
    <div class="row">
      
      <!-- Sisi Kiri -->
      <div class="col-md-5">
        <div class="samping">
          <img src="<?= base_url('assets/') ?>img/team/team-1.jpg" alt="" height="550px" width="100%">
          <br>
          <div class="samping-konten">

          <!-- Contact -->
            <div class="row kontak">
              <div class="col-md-4">
                <b>Contact</b>  
              </div>
              <div class="col-md-8">
                <div class="garis"></div>
              </div>
            </div>
            
            <div class="row bawah">
              <div class="col-md-2">
                <i class="fa fa-phone bawah-kontak"></i> 
              </div>
              <div class="col-md-10">
                +<?= $data['no_telpon'] ?>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <i class="fa fa-envelope bawah-kontak"></i>
              </div>
              <div class="col-md-10">
                <?= $data['email'] ?>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <i class="fa fa-whatsapp bawah-kontak"></i>
              </div>
              <div class="col-md-10">
                <?= $data['whatsapp'] ?>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <i class="fa fa-map-marker bawah-kontak"></i>    
              </div>
              <div class="col-md-10">
                <?= $data['alamat'] ?>
              </div>
            </div>
          
          <!-- End Contact -->

          <!-- Skills -->

            <div class="row kontak">
              <div class="col-md-4">
                <b>Skills</b>  
              </div>
              <div class="col-md-8">
                <div class="garis"></div>
              </div>
            </div>
            <div class="row bawah">
              <div class="col-md-6 skil">
                Photoshop
              </div>
              <div class="col-md-11">
                <div class="progress">
                  <div class="progress-bar" style="width:70%">70%</div>
                </div>
              </div>
            </div>
            <div class="row bawah">
              <div class="col-md-6 skil">
                Illustrator
              </div>
              <div class="col-md-11">
                <div class="progress">
                  <div class="progress-bar" style="width:40%">70%</div>
                </div>
              </div>
            </div>
            <div class="row bawah">
              <div class="col-md-6 skil">
                Indesign
              </div>
              <div class="col-md-11">
                <div class="progress">
                  <div class="progress-bar" style="width:50%">70%</div>
                </div>
              </div>
            </div>
            <div class="row bawah">
              <div class="col-md-6 skil">
                Adobe XD
              </div>
              <div class="col-md-11">
                <div class="progress">
                  <div class="progress-bar" style="width:60%">70%</div>
                </div>
              </div>
            </div>
            <div class="row bawah">
              <div class="col-md-6 skil">
                Sketch
              </div>
              <div class="col-md-11">
                <div class="progress">
                  <div class="progress-bar" style="width:90%">70%</div>
                </div>
              </div>
            </div>

          <!-- End Skills -->

          <!-- Interest -->
            <div class="row kontak">
              <div class="col-md-4">
                <b>Interest</b>  
              </div>
              <div class="col-md-8">
                <div class="garis"></div>
              </div>
            </div>
            
            <div class="row bawah">
              <div class="col-md-4 jinterest">
                <i class="fa fa-motorcycle fa-2x"></i>
              </div>
              <div class="col-md-4 jinterest">
                <i class="fa fa-gamepad fa-2x"></i>
              </div>
              <div class="col-md-4 jinterest">
                <i class="fa fa-futbol-o fa-2x"></i>
              </div>
              <div class="col-md-4 jinterest">
                <i class="fa fa-bed fa-2x"></i>
              </div>
              <div class="col-md-4 jinterest">
                <i class="fa fa-music fa-2x"></i>
              </div>
              <div class="col-md-4 jinterest">
                <i class="fa fa-car fa-2x"></i>
              </div>
            </div>

          <!-- End Interest -->

          </div>
        </div>
      </div>
      <!-- End Sisi Kiri -->

      <!-- Sisi Kanan -->
      <div class="col-md-7">
        <div class="kiri">
          
          <!-- Nama -->
          <div>
            <!-- <h1 class="belakang jarak-h"><b>GEMA</b></h1> -->
            <h1 class="belakang"><?= $data['nama'] ?></h1>
          </div>
          <!-- End Nama -->

          <!-- konten -->
          <div class="row kontak">
            <div class="col-md-4">
              <b>Data Diri</b>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam!
          
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam!
          <!-- End Konten -->
          <!-- konten -->
          <div class="row kontak">
            <div class="col-md-4">
              <b>Jenjang Pendidikan</b>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam!
          
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam!
          <!-- End Konten -->

          
          <!-- konten -->
         <!--  <div class="row kontak">
            <div class="col-md-4">
              <b>EXPERIENCE</b>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam!
          
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam! -->
          <!-- End Konten -->

          
          <!-- konten -->
          <!-- <div class="row kontak">
            <div class="col-md-4">
              <b>EXPERIENCE</b>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>

          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam!
          
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quis assumenda provident ad, minus nulla animi explicabo accusantium consequuntur quibusdam aliquam molestiae odit facere tempora quisquam possimus necessitatibus recusandae quam! -->
          <!-- End Konten -->

        </div>
      </div>
      <!-- End Sisi Kanan -->
    </div>
  </div>

<!-- Vendor JS Files -->
  <script src="<?= base_url('assets') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets') ?>/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets') ?>/ckeditor/ckeditor.js"></script>
  <script src="<?= base_url('assets') ?>/assets/vendors/highlight.js"></script>
  <script src="<?= base_url('assets') ?>/assets/js/app.js"></script>
  <script src="<?= base_url('assets') ?>/assets/owlcarousel/owl.carousel.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets') ?>/js/main.js"></script>

</body>

</html>
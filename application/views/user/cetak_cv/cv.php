<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Curiculum Vitae</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/') ?>img/cvs.png" rel="icon">
  <link href="<?= base_url('assets/') ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
          <img src="<?= base_url('upload/dataDiri/'.$data['gambar']) ?>" alt="" height="550px" width="100%">
          <br>
          <div class="samping-konten">

          <!-- Contact -->
            <div class="row kontak">
              <div class="col-md-4">
                <b><h3>Contact</h3></b>  
              </div>
              <div class="col-md-8">
                <div class="garis"></div>
              </div>
            </div>
            
            <div class="row bawah">
              <div class="col-md-2">
                <h3><i class="fa fa-phone bawah-kontak"></i> </h3>
              </div>
              <div class="col-md-10">
                <h4>+<?= $data['no_telpon'] ?></h4>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <h3><i class="fa fa-envelope bawah-kontak"></i></h3>
              </div>
              <div class="col-md-10">
                <h4><?= $data['email'] ?></h4>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <h3><i class="fa fa-instagram bawah-kontak"></i></h3>
              </div>
              <div class="col-md-10">
                <h4><?= $data['instagram'] ?></h4>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <h3><i class="fa fa-whatsapp bawah-kontak"></i></h3>
              </div>
              <div class="col-md-10">
                <h4><?= $data['whatsapp'] ?></h4>
              </div>
            </div>

            <div class="row bawah">
              <div class="col-md-2">
                <h3><i class="fa fa-map-marker bawah-kontak"></i>    </h3>
              </div>
              <div class="col-md-10">
                <h4><?= $data['alamat'] ?></h4>
              </div>
            </div>
          
          <!-- End Contact -->

          <!-- Skills -->

            <div class="row kontak">
              <div class="col-md-4">
                <h3><b>Skills</b>  </h3>
              </div>
              <div class="col-md-8">
                <div class="garis"></div>
              </div>
            </div>
            <?php
            $datas = $this->db->query("SELECT hasil_perhitungan.*, tb_soal.soal as skill FROM tb_soal JOIN (
            (SELECT hasil.id_buat, hasil.id_matrix, hasil.id_soal, 
            ((hasil.k1*10) + (hasil.k2*10) + (hasil.k3*10) + (hasil.k4*10) +(hasil.k5*10) + (hasil.k6*10) + (hasil.k7*10) + (hasil.k8*10) + (hasil.k9*10) + (hasil.k10*10)) AS hasil 
             FROM 
            (SELECT tb_matrix.id_buat, tb_matrix.id_matrix, tb_matrix.id_soal, 
            k1/(SELECT MAX(k1) AS k1 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k1,
            k2/(SELECT MAX(k2) AS k2 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k2,
            k3/(SELECT MAX(k3) AS k3 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k3,
            k4/(SELECT MAX(k4) AS k4 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k4,
            k5/(SELECT MAX(k5) AS k5 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k5,
            k6/(SELECT MAX(k6) AS k6 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k6,
            k7/(SELECT MAX(k7) AS k7 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k7,
            k8/(SELECT MAX(k8) AS k8 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k8,
            k9/(SELECT MAX(k9) AS k9 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k9,
            k10/(SELECT MAX(k10) AS k10 FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') AS k10 
             FROM tb_matrix WHERE tb_matrix.id_buat = '$id_buat') hasil)) 
            hasil_perhitungan ON tb_soal.id_soal=hasil_perhitungan.id_soal ORDER BY hasil_perhitungan.hasil DESC")->result();
            foreach ($datas as $a) {
            ?>
            <div class="row bawah">
              <div class="col-md-6 skil">
                <h3><?= $a->skill ?></h3>
              </div>
              <div class="col-md-11">
                <div class="progress">
                  <div class="progress-bar" style="width:<?= round($a->hasil) ?>%"><?= round($a->hasil) ?>%</div>
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- End Skills -->

          <!-- Interest -->
            <div class="row kontak">
              <div class="col-md-4">
                <h3><b>Hobies</b> </h3> 
              </div>
              <div class="col-md-8">
                <div class="garis"></div>
              </div>
            </div>
            
            <div class="row bawah">
            <?php 
            $hobi = $this->db->query("SELECT * FROM hobi WHERE id_buat='$id_buat'")->result();
            foreach($hobi as $a):
            ?>
              <div class="col-md-4 jinterest">
                <i class="<?= $a->hobi ?> fa-2x"></i>
              </div>
            <?php endforeach ?>
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
              <h4><b>Data Diri</b></h4>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>
          <h4>
          <?= $data['data_diri'] ?>
          </h4>
          <!-- End Konten -->
          <!-- konten -->
          <div class="row kontak">
            <div class="col-md-4">
             <h4> <b>Jenjang Pendidikan</b></h4>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>
          <?php
            $c = $this->db->query("SELECT * FROM detail_pendidikan WHERE id_buat = '$id_buat'")->row_array();
          ?>
            <div class="row">
              <div class="col-md-6">
                <h5><?= $c['sd'] ?></h5>
              </div>
              <div class="col-md-2">
                <h5><?= $c['dari_sd'] ?></h5>
              </div>
              <div class="col-md-1">-</div>
              <div class="col-md-2">
                <h5><?= $c['sampai_sd'] ?></h5>
              </div>
              <!-- smp -->
              <div class="col-md-6">
                <h5><?= $c['smp'] ?></h5>
              </div>
              <div class="col-md-2">
                <h5><?= $c['dari_smp'] ?></h5>
              </div>
              <div class="col-md-1">-</div>
              <div class="col-md-2">
                <h5><?= $c['sampai_smp'] ?></h5>
              </div>
              <!-- sma -->
              <div class="col-md-6">
                <h5><?= $c['sma'] ?></h5>
              </div>
              <div class="col-md-2">
                <h5><?= $c['dari_sma'] ?></h5>
              </div>
              <div class="col-md-1">-</div>
              <div class="col-md-2">
               <h5> <?= $c['sampai_sma'] ?></h5>
              </div>
              <!-- d3 -->
              <?php if($c['d3'] != NULL){ ?>
                <div class="col-md-6">
                  <h5><?= $c['d3'] ?></h5>
                </div>
                <div class="col-md-2">
                  <h5><?= $c['dari_d3'] ?></h5>
                </div>
                <div class="col-md-1">-</div>
                <div class="col-md-2">
                  <h5><?= $c['sampai_d3'] ?></h5>
                </div>
              <?php }elseif($c['s1'] != NULL){ ?>
                <div class="col-md-6">
                  <h5><?= $c['s1'] ?></h5>
                </div>
                <div class="col-md-2">
                  <h5><?= $c['dari_s1'] ?></h5>
                </div>
                <div class="col-md-1">-</div>
                <div class="col-md-2">
                  <h5><?= $c['sampai_s1'] ?></h5>
                </div>
              <?php }elseif($c['s2'] != NULL){ ?>
                <div class="col-md-6">
                  <h5><?= $c['s2'] ?></h5>
                </div>
                <div class="col-md-2">
                  <h5><?= $c['dari_s2'] ?></h5>
                </div>
                <div class="col-md-1">-</div>
                <div class="col-md-2">
                  <h5><?= $c['sampai_s2'] ?></h5>
                </div>
              <?php } ?>
            </div>
          <!-- End Konten -->
            
          <div class="row kontak">
            <div class="col-md-4">
             <h4> <b>Pengalaman Kerja</b></h4>
            </div>
            <div class="col-md-8">
              <div class="garis-kanan"></div>
            </div>
          </div>
          <?php 
            $pengalaman = $this->db->query("SELECT * FROM pengalaman WHERE id_buat='$id_buat'")->result();
            foreach($pengalaman as $a):
            ?>
          <div class="row">
                <div class="col-md-6">
                    <h5><?= $a->pengalaman ?></h5>
                </div>
                <div class="col-md-6">
                  <h5><?= $a->tahun ?></h5>
                </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <!-- End Sisi Kanan -->
    </div>
  </div>

<!-- Vendor JS Files -->
  <script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/') ?>js/html2canvas.js"></script>
  <script type="text/javascript">
      
      html2canvas(document.body).then(function(canvas) {
          document.body.innerHTML= '';
          document.body.appendChild(canvas);
      });

      window.print()
  </script>

</body>

</html>
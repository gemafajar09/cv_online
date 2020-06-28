<section id="client" class="client">
  <div class="container anyClass" style="height:300px; overflow-y: scroll;">
<?php
$data = $this->db->query("SELECT * FROM komentar ORDER BY id_komentar DESC")->result();
foreach($data as $a):
?>  
    <div class="media border p-3">
      <img src="<?= base_url('assets/img/user.png') ?>" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
      <div class="media-body">
        <h4><?= $a->nama ?><small><i>&nbsp;&nbsp; Posted on <?= $a->tanggal_komentar ?></i></small></h4>
        <p><?= $a->email ?></p>
        <p><?= $a->komentar ?></p>
        <!-- balas komentar -->
        <?php 
        $id = $a->id_komentar;
          $balas = $this->db->query("SELECT * FROM balas_komentar WHERE id_komentar='$id'")->result();
          foreach($balas as $b):
        ?>
        <div class="media p-3">
          <img src="<?= base_url('assets/img/user.png') ?>" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
          <div class="media-body">
            <h4><?= $b->nama ?><small><i>&nbsp;Posted on <?= $b->tanggal_balasan ?></i></small></h4>
            <p><?= $b->email ?></p>
            <p><?= $b->komentar ?></p>
          </div>
        </div> 
      <?php endforeach ?>
        <!-- balas -->
        <form action="<?= base_url('komentarBalas') ?>" method="POST">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <input type="hidden" name="id_komentar" value="<?= $a->id_komentar ?>">
                  <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col-md-6">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-12">
                  <textarea name="komentar" class="form-control"></textarea>
                </div>
              </div><br>
              <div align="right">
                <button type="submit" name="kirim" class="btn btn-primary">Balas</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
<?php endforeach ?>
  </div>
</section>
</main>
 <!-- ======= Footer ======= -->
  <footer id="footer">
    <br>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Komentar</h4>
            <p>Silahkan Isikan Komentar Anda.</p>
          </div>
          <div class="col-lg-6">
            <form action="<?= base_url('komentar') ?>" method="post">
              <div class="card">
                <div class="cord-body">
                  <div class="row">
                    <div class="col-md-6">
                      <input type="email" required name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                      <input type="text" required name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="col-md-12">
                      <textarea name="komentar" id="" class="ckeditor" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-md-12">
                      <button class="btn btn-success btn-block" type="submit">Komentari</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('halaman') ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('halaman#portofolio') ?>">Portofolio</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
              <div class="inner">
                <h3><span id="jam"></span>:<span id="menit"></span>:<span id="detik"></span></h3>
              </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Jalan Raya Lubuk Minturun <br>
              Padang, 25175<br>
               <br><br>
              <strong>Phone:</strong> +62 82122855458<br>
              <strong>Email:</strong> gemafajar09@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Statistik</h3>
            <div id="visitor"></div>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Amik Daparnas, Gema fajar ramadhan</span></strong>.
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery-sticky/jquery.sticky.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
  <script src="<?= base_url('assets/assets/vendors/highlight.js') ?>"></script>
  <script src="<?= base_url('assets/assets/js/app.js') ?>"></script>
  <script src="<?= base_url('assets/assets/owlcarousel/owl.carousel.js') ?>"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script>
  setInterval(kunjungan, 5000);
  function kunjungan() {
     $.ajax({
        url: '<?= site_url('statistik') ?>',
        success: function(data){
         $('#visitor').html(data)
        },
        // error : function(){
        //   alert('Kesalahan Dalam Menambil data')
        // }
     }) 
  }

  </script>
  <!-- register -->
  <script>
    function register()
    {
      var nama = $('#nama').val()
      var email = $('#email').val()
      var password = $('#password').val()
      var password2 = $('#password2').val()
      var username = $('#username').val()
      $.ajax({
        url:'<?= base_url('register') ?>',
        type: 'POST',
        data: {'nama': nama, 'password':password, 'username':username, 'password2':password2, 'email':email},
        dataType: 'JSON',
        success: function(data)
        {
          alert(data)
        }
      })
    }

    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        // loop: true,
        margin: 10,
        navRewind: false,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      })
    })
</script>
<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>

  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <?php
      if($this->session->flashdata('pesan') == TRUE)
      {
  ?>
  <script>
  Swal.fire(
  'Success!',
  '<?= $this->session->flashdata('pesan') ?>',
  'success'
  )
  </script>
  <?php
      }
  ?>
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

</body>

</html>
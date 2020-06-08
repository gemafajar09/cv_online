<section id="client" class="client">
  <div class="container anyClass" style="height:300px; overflow-y: scroll;">
    <div class="media border p-3">
      <img src="<?= base_url('assets/img/user.png') ?>" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
      <div class="media-body">
        <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
        <p>Lorem ipsum...</p>
        <div class="media p-3">
          <img src="<?= base_url('assets/img/user.png') ?>" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
          <div class="media-body">
            <h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
            <p>Lorem ipsum...</p>
          </div>
        </div> 
      </div>
    </div>
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
            <form action="" method="post">
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
                      <textarea name="kometar" id="" class="ckeditor" cols="30" rows="10"></textarea>
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Statistik</h3>
            <div class="card">
              <div class="card-body">
                <div class="row" style="text-align: center">
                  <div class="col-md-4">
                      <i class="fa fa-globe" style="color:grey; font-size:9px">&nbsp;kemarin</i>
                      <br><b style="color:black">72</b>
                  </div>
                  <div class="col-md-4">
                    <i class="fa fa-globe" style="color:blue; font-size:9px">&nbsp;Sekarang</i>
                    <br><b style="color:black">72</b>
                  </div>
                  <div class="col-md-4">
                    <i class="fa fa-globe" style="color:green; font-size:9px">&nbsp;Online</i>
                    <br><b style="color:black">72</b>
                  </div>
                </div>
              </div>
            </div>
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
<!-- ======= Featured Section ======= -->
<section id="featured" class="featured">
	<div class="container">

		<div class="row">
			<div class="col-lg-4">
				<div class="icon-box">
					<i class="icofont-computer"></i>
					<h3><a href="">Bikin Cv Melalui Desktop</a></h3>
					<p>Kemudahan yang diberikan untuk membangun sebuah Cv dengan gampang</p>
				</div>
			</div>
			<div class="col-lg-4 mt-4 mt-lg-0">
				<div class="icon-box">
					<i class="icofont-image"></i>
					<h3><a href="">Curiculu Vitae</a></h3>
					<p>Cv yang telah dibuat dapat anda download secara gratis..!!</p>
				</div>
			</div>
			<div class="col-lg-4 mt-4 mt-lg-0">
				<div class="icon-box">
					<i class="icofont-tasks-alt"></i>
					<h3><a href="">Terupdate</a></h3>
					<p>Template Cv yang akan update setiap harinya.</p>
				</div>
			</div>
		</div>

	</div>
</section><!-- End Featured Section -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
	<div class="container">

		<?php foreach ($berita as $i => $a) { ?>
			<div class="row">
				<div class="col-lg-6 img-responsive">
					<img src="<?= base_url('upload/berita/' . $a->gambar) ?>" width="350px" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content">
					<h3><?= $a->judul_berita ?></h3>
					<h5><?= $a->tanggal_update ?></h5>
					<p class="font-italic">
						<td><?= substr($a->deskripsi, 0, 700)  ?>...</td>
					</p>
					<div class="business_btn">
						<a href="<?= site_url('berita/detailBerita/' . $a->id_berita); ?>" class="btn btn-primary m-top-20">Baca Selengkapnya</a>
					</div>
				</div>
			</div>
		<?php } ?>

	</div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="portofolio" class="services">
	<div class="container">

		<div class="section-title" data-aos="fade-up">
			<h2>Portofolio</h2>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<!-- <div class="icon-box">
					<div class="icon"><i class="bx bxl-dribbble"></i></div>
					<h4><a href="">Lorem Ipsum</a></h4>
					<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
				</div> -->
				<img src="<?= base_url('upload/template/5ebbfbce285c6.jpg') ?>">
			</div>

			<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
				<img src="<?= base_url('upload/template/5ebbfbdb20f79.jpg') ?>">
			</div>

			<!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
				<div class="icon-box">
					<div class="icon"><i class="bx bx-tachometer"></i></div>
					<h4><a href="">Magni Dolores</a></h4>
					<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
				</div>
			</div> -->

		</div>

	</div>
</section><!-- End Services Section -->

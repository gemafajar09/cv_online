<!-- ======= Featured Section ======= -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
	<center>
		<h1 style="font-family: fantasy;">Berita Terbaru</h1>
	</center>
	<br><br><br>
	<div class="container">
		<?php foreach ($berita as $i => $a) { ?>
			<div class="row">
				<div class="col-lg-6">
					<img src="<?= base_url('upload/berita/' . $a->gambar) ?>" width="350px" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content">
					<h3><?= $a->judul_berita ?></h3>
					<h5><?= $a->tanggal_update ?></h5>
					<p class="font-italic">
						<td><?= $a->deskripsi ?></td>
					</p>
				</div>
			</div>
		<?php } ?>
	</div>
</section><!-- End About Section -->

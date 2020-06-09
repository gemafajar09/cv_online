<section id="about" class="about">
	<div class="container">
		<div class="card">
			<div class="card-header card-info">
				<h5>Soal : <b><?= $nama_ujian ?></b></h5>
			</div>
			<div class="card-body">
			<form action="<?= base_url('jawabSimpan') ?>" method="POST">
				<input type="hidden" name="id_soal" value="<?= $this->uri->segment(2) ?>">
				<div class="row">
				<?php 
				$aa = 1;
				$b = 1;
				$c = 1;
				$d = 1;
				$ids = 1;
				foreach($soal as $i => $a): ?>
					<div class="col-md-12">
						<br>
						<input type="hidden" name="id<?= $ids++ ?>" value="<?= $a->id_detail ?>">
						<p><?= $i+1 ?>. <?= $a->soal ?></p>
						<input type="radio" id="a<?= $aa ?>" name="cek<?= $aa++ ?>" value="a">&nbsp;&nbsp;<label><?= $a->a ?></label><br>
						<input type="radio" id="b<?= $b ?>" name="cek<?= $b++ ?>" value="b">&nbsp;&nbsp;<label><?= $a->b ?></label><br>
						<input type="radio" id="c<?= $c ?>" name="cek<?= $c++ ?>" value="c">&nbsp;&nbsp;<label><?= $a->c ?></label><br>
						<input type="radio" id="d<?= $d ?>" name="cek<?= $d++ ?>" value="d">&nbsp;&nbsp;<label><?= $a->d ?></label>
						<br>
					</div>
				<?php endforeach ?>
				</div>
				<br>
				<div>
					<button type="submit" name="selesai" class="btn btn-success btn-block">Selesai</button>
				</div>

			</form>
			</div>
		</div>
	</div>
</section>
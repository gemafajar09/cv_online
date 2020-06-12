<section id="about" class="about">
	<div class="container">
    <input type="hidden" name="" value="<?= $buat ?>">
    	<div class="card">
    		<div class="card-header">
    			<h4>Pilih Tingkat Skill</h4>
    		</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-md-4">
    					<?php foreach($skill as $a): ?>
		    				<input type="radio" onclick="lanjutSoal('<?= $a->id_soal ?>')" value="<?= $a->id_soal ?>">&nbsp;&nbsp;&nbsp; <?= $a->soal ?> <br>
		    			<?php endforeach ?>
    				</div>
    				<div class="col-md-8">
    					<div class="alert alert-info">
    						<p><b>Wajib Dibaca.!!</b></p>
    						<p>
    							Silahkan pilih skill atau kemempuan yang anda miliki. <br>
    							Selanjutnta anda akan disuruh untuk menjawab pertanyaan yang telah disediakan. <br>
    							Jika semua skill atau kemampuan yang anda miliki sudah benar makan tekan tombol <i><b>Selanjutnya</b></i>  yang ada di bawah.
    						</p>
                            <br>
                            <a href="<?= base_url('selanjutnya') ?>" class="btn btn-primary">Selanjutnya</a>
    					</div>
    				</div>
    			</div>
    			
    		</div>
    	</div>
	</div>
</section>

<script>
	function lanjutSoal(id)
	{
		window.location='<?= base_url('jawabSoal') ?>/'+ id
	}
</script>
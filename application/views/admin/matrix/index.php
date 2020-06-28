<section class="content py-3">
    <div class="callout callout-info">
    	<div class="card">
    		<div class="card-header">
    			<h3>Cek Nilai Matrik</h3>
    		</div>
	    	<div class="card-body">
	    		<div class="row">
	    			<?php foreach($tampil as $a): ?>
	    			<div class="col-md-4">
	    				<div class="card">
	    					<div class="card-header">
	    						<h5><i style="color:aqua"><?= $a->nama_user ?></i></h5>
	    					</div>
	    					<div class="card-body">
	    						<center>Review Template</center>
	    						<center>
	    							<img src="<?= base_url('upload/template/'.$a->file) ?>" width="150px">
	    						</center>
	    						<br>
	    						<a href="<?= base_url('view/'.$a->id_buat) ?>" class="btn btn-success btn-block" style="color:white">Cek Nilai Matrik</a>
	    					</div>
	    				</div>
	    			</div>
	    		<?php endforeach ?>
	    		</div>
	    	</div>
    	</div>
    </div>
</section>
<section class="content py-3">
	<div class="callout callout-info">
		<div class="card">
			<div class="card-header">
				<center>
					<h3>Slider</h3>
				</center>
				<button class="btn btn-primary" type="button" data-target="#tambahData" data-toggle="modal"><i class="fa fa-plus-circle"></i>Entry Data</button>

			</div>
			<div class="card-body">
				<table id="example2" class="table table-striped">
					<thead>
						<tr>
							<td>No</td>
							<td>Gambar</td>
							<td>Deskripsi</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($slider as $i => $a) : ?>
							<tr>
								<td><?= $i + 1 ?></td>
								<td><img src="<?= base_url('upload/slider/' . $a->gambar) ?>" width="120px" alt=""></td>
								<td><?= $a->deskripsi ?></td>
								<td>
									<button onclick="hapusData('<?= $a->id_slider ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<div class="modal" id="tambahData">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Data Slider</h4>
			</div>
			<div class="modal-body">
				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('sliderSimpan') ?>" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Upload Gambar</label>
								<input type="file" class="form-control" name="gambar" id="gambar">
							</div>
							<div class="form-group">
								<label>Deskripsi</label>
								<textarea name="deskripsi" id="deskripsi" class="ckeditor"></textarea>
							</div>
							<div align="right">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="button" style="width:80px" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-close"></i> Batal</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- modal Hapus -->
<div class="modal" id="hapusData">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<div class="col-md-8">
						<h4>Yakin Ingin Menghapus Data..?</h4>
					</div>
					<div class="col-md-4">
						<form action="<?= base_url('sliderHapus') ?>" method="POST">
							<input type="hidden" id="id_slider" name="id_slider">
							<button type="submit" class="btn btn-primary btn-sm">Hapus</button>
							<button type="reset" data-dismiss="modal" class="btn btn-danger btn-sm">Batal</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function editKelas(id) {
		axios.get('<?= base_url('ApiDataKelas') ?>/' + id).then(function(res) {
			var data = res.data
			$('#id').val(data[0].id_kelas)
			$('#id_pemateri').val(data[0].id_pemateri)
			$('#id_materi').val(data[0].id_materi)
			$('#type_kelas').val(data[0].tipe_kelas)
			$('#harga').val(data[0].harga)
			$('#id_kategori').val(data[0].id_kategori)
			$('#link_deskripsi').val(data[0].link_deskripsi)
			CKEDITOR.instances.keterangan.setData(data[0].keterangan);
			$('#tambahData').modal()
		}).catch(function(err) {
			alert(err)
		})
	}

	function hapusData(id) {
		$('#id_slider').val(id)
		$('#hapusData').modal()
	}
</script>

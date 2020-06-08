<section class="content py-3">
    <div class="callout callout-info">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Soal</h3>
                </center>
                <button class="btn btn-primary" type="button" data-target="#tambahData" data-toggle="modal"><i class="fa fa-plus-circle"></i>Entry Data</button>

            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Soal</td>
                            <td>Jumlah Soal</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($soal as $i => $a): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $a->soal ?></td>
                            <td><?= $a->jumlah_soal ?></td>
                            <td>
                                <a href="<?= base_url('inputSoal/'.$a->id_soal) ?>" class="btn btn-success"><i>Input Soal</i></a>
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
                <h4>Data Soal</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form action="<?= base_url('simpanSoal') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Soal</label>
                                <input type="text" class="form-control" name="soal" id="soal">
                            </div>
                            <div class="form-group">
                                <label>Jumlah Soal</label>
                                <input type="number" name="jumlahSoal" id="deskripsi" class="form-control">
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
                            <input type="hidden" id="id_soal" name="id_soal">
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
    function edit_soal(id)
    {
        axios.get('<?= base_url('ApiDataKelas') ?>/'+ id).then(function(res){
            var data = res.data
            $('#id').val(data[0].id_kelas)
            $('#id_pemateri').val(data[0].id_pemateri)
            $('#tambahData').modal()
		}).catch(function(err){
			alert(err)
		})
    }

    function hapusData(id)
    {
        $('#id_soal').val(id)
        $('#hapusData').modal()
    }
</script>

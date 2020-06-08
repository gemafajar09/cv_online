<section class="content py-3">
    <div class="callout callout-info">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Member</h3>
                </center>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Username</td>
                            <td>Tanggal Bergabung</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($member as $i => $a): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $a->nama_user ?></td>
                            <td><?= $a->email ?></td>
                            <td><?= $a->username ?></td>
                            <td><?= $a->tanggal_daftar ?></td>
                            <td>
                                <button onclick="hapusData('<?= $a->id_user ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </section>

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
                        <form action="<?= base_url('hapusMember') ?>" method="POST">
                            <input type="hidden" id="id_slider" name="id_user">
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
    function hapusData(id)
    {
        $('#id_user').val(id)
        $('#hapusData').modal()
    }
</script>

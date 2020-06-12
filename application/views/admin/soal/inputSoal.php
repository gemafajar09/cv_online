<?php
$id = $this->uri->segment(2);
$data = $this->db->query("SELECT `soal` FROM `tb_soal` WHERE id_soal='$id'")->result();
?>
<section class="content py-3">
    <div class="callout callout-info">
        <div class="card">
            <div class="card-header">
                <h5>Soal: <i style="color:aqua"><?= $data[0]->soal ?></i> </h5>
                <br>
                <button class="btn btn-primary" data-target="#modalSoal" data-toggle="modal" type="button">Input Soal</button>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th>A</th>
                            <th>B</th>
                            <th>C</th>
                            <th>D</th>
                            <th>Benar</th>
                            <th>Poin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($soal as $i => $a): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $a->soal ?></td>
                            <td><?= $a->a ?></td>
                            <td><?= $a->b ?></td>
                            <td><?= $a->c ?></td>
                            <td><?= $a->d ?></td>
                            <td><?= $a->jawaban ?></td>
                            <td><?= $a->point ?></td>
                            <td>
                                <button class="btn btn-warning" onclick="editData('<?= $a->id_detail ?>')"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div id="modalSoal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <form action="<?= base_url('simpandetail') ?>" method="POST">
            <div class="form-group">
                <label>Soal</label>
                <textarea name="soal" id="soal" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>A</label>
                <textarea name="a" id="a" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>B</label>
                <textarea name="b" id="b" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>C</label>
                <textarea name="c" id="c" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>D</label>
                <textarea name="d" id="d" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Jawaban</label>
                <input type="text" name="jawaban" id="jawaban" class="form-control">
            </div>
            <div class="form-group">
                <label>Poin</label>
                <input type="number" name="point" id="point" class="form-control">
                <input type="hidden" name="id" value="<?= $this->uri->segment(2) ?>"> 
                <input type="hidden" name="id_detail" id="id_detail">
            </div>
            <div align="right">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>

  </div>
</div>

<script>
    function editData(id)
    {
        $.ajax({
            url: '<?= base_url('edit_soal') ?>',
            type: 'POST',
            data: {'id_detail': id},
            dataType: 'JSON',
            success: function(data)
            {
                $('#soal').val(data.soal)
                $('#a').val(data.a)
                $('#b').val(data.b)
                $('#c').val(data.c)
                $('#d').val(data.d)
                $('#jawaban').val(data.jawaban)
                $('#point').val(data.point)
                $('#id_detail').val(data.id_detail)
                $('#modalSoal').modal()
            }
        })
    }
</script>
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
                <input type="number" name="bobot_a" placeholder="Nilai Bobot" id="bobot_a" class="form-control">
                <input type="hidden" value="a" name="jawaban_a" id="jawaban_a" class="form-control">
                <textarea name="a" id="a" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>B</label>
                <input type="number" name="bobot_b" placeholder="Nilai Bobot" id="bobot_b" class="form-control">
                <input type="hidden" value="b" name="jawaban_b" id="jawaban_b" class="form-control">
                <textarea name="b" id="b" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>C</label>
                <input type="number" name="bobot_c" placeholder="Nilai Bobot" id="bobot_c" class="form-control">
                <input type="hidden" value="c" name="jawaban_c" id="jawaban_c" class="form-control">
                <textarea name="c" id="c" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>D</label>
                <input type="number" name="bobot_d" placeholder="Nilai Bobot" id="bobot_d" class="form-control">
                <input type="hidden" value="d" name="jawaban_d" id="jawaban_d" class="form-control">
                <textarea name="d" id="d" class="form-control"></textarea>
            </div>
                <input type="hidden" name="id" value="<?= $this->uri->segment(2) ?>"> 
                <input type="hidden" name="id_detail" id="id_detail">
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
                $('#bobot_a').val(data.point_a)
                $('#bobot_b').val(data.point_b)
                $('#bobot_c').val(data.point_c)
                $('#bobot_d').val(data.point_d)
                $('#id_detail').val(data.id_detail)
                $('#modalSoal').modal()
            }
        })
    }
</script>
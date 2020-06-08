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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
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
        <form action="" method="POST">
            <div class="form-group">
                <label>Soal</label>
                <textarea name="soal" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>A</label>
                <textarea name="a" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>B</label>
                <textarea name="b" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>C</label>
                <textarea name="c" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>D</label>
                <textarea name="d" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Jawaban</label>
                <input type="text" name="jawaban" class="form-control">
            </div>
            <div class="form-group">
                <label>Poin</label>
                <input type="number" name="poin" class="form-control">
                <input type="hidden" name="id" value="<?= $this->uri->segment(2) ?>"> 
            </div>
            <div align="right">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
    </div>

  </div>
</div>
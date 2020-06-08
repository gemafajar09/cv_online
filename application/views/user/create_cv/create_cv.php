<section id="about" class="about">
    <div class="container">
        <form action="<?= base_url('buat1') ?>" method="POST">
            <div class="row">
            <?php foreach($template_cv as $a): ?>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <img src="<?= base_url('upload/template/'.$a->gambar) ?>" width="300px" alt="">
                        </div>
                        <div class="card-body">
                            <div align="center">
                                <input type="checkbox" name="pilih[]" value="1">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-block">Selanjutnya <i class="fa fa-toggle-right" style="color:red"></i></button>
        </form>
    </div>
</section>
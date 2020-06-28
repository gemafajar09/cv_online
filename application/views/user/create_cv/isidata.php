<section id="about" class="about">
    <div class="container">
    <center><h3>Input Data Diri</h3></center>
    <hr>
        <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#home">Data Diri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#home2">Biodata</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu1">Kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu3">Pengalaman Kerja</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#menu2">Pendidikan</a>
            </li>
        </ul>
    <form action="<?= base_url('buat3') ?>" method="POST" enctype="multipart/form-data">
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto" required>
                </div>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="hidden" value="<?= $buat ?>" name="iniapaya">
                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap.." required>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat" placeholder="Tempat Lahir.." required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="">
                        <option value="">-PILIH JENIS KELAMIN-</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
            </div>

            <div id="home2" class="container tab-pane fade"><br>
                 <div class="form-group">
                    <label for="">Biodata</label>
                    <textarea class="form-control" name="data_diri" required></textarea>
                </div>
            </div>

            <div id="menu3" class="container tab-pane fade"><br>
                <center><button type="button" onclick="addRow()" class="btn btn-primary"><i class="fa fa-plus"></i></button></center>
                <br>
                <div class="row">
                    <div id="formInput" class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                 <div class="form-group">
                                     <label>Pengalaman</label>
                                     <input type="text" class="form-control" placeholder="Pengalaman" name="pengalaman[]">
                                 </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pada Tahun</label>
                                    <input type="number" name="tahun[]" class="form-control" placeholder="Input Tahun..">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="clone" class="col-md-12"></div>
                </div>
            </div>

            <div id="menu1" class="container tab-pane fade"><br>
                <div class="form-group">
                    <label for="">No. Telpon</label>
                    <input type="number" class="form-control" placeholder="No Telpon.." name="no_telpon" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" placeholder="Email.." name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" class="form-control" placeholder="Instagram.." name="instagram" required>
                </div>
                <div class="form-group">
                    <label for="">WhatsApp</label>
                    <input type="number" class="form-control" placeholder="WhatsApp.." name="whatsapp" required>
                </div>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                        <label>Form Inputan Yang Bertanda <span style="color:red">*</span> Wajib Diisi..</label>
                        <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>SD <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="sd" placeholder="SD" required>
                        </div>
                        <div class="form-group">
                            <label>SMP <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="smp" placeholder="SMP" required>
                        </div>
                        <div class="form-group">
                            <label>SMA <span style="color:red">*</span></label>
                            <input type="text" class="form-control" name="sma" placeholder="SMA" required>
                        </div>
                        <div class="form-group">
                            <label>D3</label>
                            <input type="text" class="form-control" name="d3" placeholder="D3">
                        </div>
                        <div class="form-group">
                            <label>S1</label>
                            <input type="text" class="form-control" name="s1" placeholder="s1">
                        </div>
                        <div class="form-group">
                            <label>S2</label>
                            <input type="text" class="form-control" name="s2" placeholder="s2">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="sddari" required>
                        </div>
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="smpdari" required>
                        </div>
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="smadari" required>
                        </div>
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="d3dari">
                        </div>
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="s1dari" >
                        </div>
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="s2dari">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="sdsampai" required>
                        </div>
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="smpsampai" required>
                        </div>
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="smasampai" required>
                        </div>
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="d3sampai">
                        </div>
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="s1sampai" >
                        </div>
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="number" class="form-control" placeholder="Input Tahun" name="s2sampai">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Selanjutnya <i class="fa fa-toggle-right" style="color:red"></i></button>
            </div>
        </div>
    </form>
    </div>
</section>

<script>
    function addRow()
    {
        $('#formInput').clone().appendTo("#clone");
    }
</script>
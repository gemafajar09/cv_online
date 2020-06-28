<section class="content py-3">
    <div class="callout callout-info">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Laporan Kunjungan</h3>
                </center>
            </div>
            <div class="card-body">
                <table id="" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ip</th>
                            <th>Klik</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($pengunjung as $i => $a): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $a->ip ?></td>
                            <td><?= $a->klik ?></td>
                        </tr>
                    <?php endforeach ?> 
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Laporan Buat CV</h3>
                </center>
            </div>
            <div class="card-body">
                <table id="" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah Buat</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($buat as $i => $b): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $b->nama ?></td>
                            <td><?= $b->jumlah ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </section>

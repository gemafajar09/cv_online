<section class="content py-3">
    <div class="callout callout-info">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Matrix</h3>
                </center>
            </div>
            <div class="card-body">
                <h3>Matrik Awal</h3>
                <table id="" class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Skill</td>
                            <td>k1</td>
                            <td>k2</td>
                            <td>k3</td>
                            <td>k4</td>
                            <td>k5</td>
                            <td>k6</td>
                            <td>k7</td>
                            <td>k8</td>
                            <td>k9</td>
                            <td>k10</td>
                            <td>Point</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($matrikAwal as $i => $a): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $a->skill ?></td>
                            <td><?= $a->k1 ?></td>
                            <td><?= $a->k2 ?></td>
                            <td><?= $a->k3 ?></td>
                            <td><?= $a->k4 ?></td>
                            <td><?= $a->k5 ?></td>
                            <td><?= $a->k6 ?></td>
                            <td><?= $a->k7 ?></td>
                            <td><?= $a->k8 ?></td>
                            <td><?= $a->k9 ?></td>
                            <td><?= $a->k10 ?></td>
                            <td>
                                <?= $a->k1 + $a->k2 + $a->k3 + $a->k4 + $a->k5 + $a->k6 + $a->k7 + $a->k8 + $a->k9 + $a->k10 ?>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <br>
                <h3>Matrik Normalisasi</h3>
                <table id="" class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Skill</td>
                            <td>k1</td>
                            <td>k2</td>
                            <td>k3</td>
                            <td>k4</td>
                            <td>k5</td>
                            <td>k6</td>
                            <td>k7</td>
                            <td>k8</td>
                            <td>k9</td>
                            <td>k10</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($matrikAwal2 as $i => $b): ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $b->soal ?></td>
                            <td><?= $b->k1 ?></td>
                            <td><?= $b->k2 ?></td>
                            <td><?= $b->k3 ?></td>
                            <td><?= $b->k4 ?></td>
                            <td><?= $b->k5 ?></td>
                            <td><?= $b->k6 ?></td>
                            <td><?= $b->k7 ?></td>
                            <td><?= $b->k8 ?></td>
                            <td><?= $b->k9 ?></td>
                            <td><?= $b->k10 ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <br>
                <h3>Hasil Terbaik</h3>
                <table id="" class="table table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Skill</td>
                            <td>SAW</td>
                            <td>Keterangan</td>
                        </tr>
                    </thead>
                    <?php
                     $bobot = array(0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10,0.10);
                    ?>
                    <tbody>
                        <?php foreach($matrikAwal3 as $i => $c): 

                        ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $c->skill ?></td>
                            <td><?= $c->hasil ?></td>
                            <td>
                                <?php if($c->hasil >= 65)
                                {
                                    echo "Bagus";
                                }else{
                                    echo "Cukup";
                                }
                                ?>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </section>
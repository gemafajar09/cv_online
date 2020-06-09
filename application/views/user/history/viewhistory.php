<section id="about" class="about">
    <div class="container">
    <h4>History</h4>
        <div class="card">
            <div class="card-body">
                <table class="table table-wraper">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Template</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($history as $i => $a){ ?>
                        <tr>
                            <td><?= $i+1 ?></td>
                            <td><?= $a->id_template ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
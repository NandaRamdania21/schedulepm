<div class="container-fluid">

    <!-- Data Machine -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Machine</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Equipment</th>
                            <th>Register No.</th>
                            <th>Model</th>
                            <th>Cust</th>
                            <th>Remark</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($machines as $m) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $m['equipment'] ?></td>
                                <td><?= $m['register_no'] ?></td>
                                <td><?= $m['model'] ?></td>
                                <td><?= $m['cust'] ?></td>
                                <td><?= $m['remark'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

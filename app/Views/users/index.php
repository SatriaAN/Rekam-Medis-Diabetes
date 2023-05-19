<?= $this->extend('layout/template');  ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasien</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($users as $user) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['active'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>
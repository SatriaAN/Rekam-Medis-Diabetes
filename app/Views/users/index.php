<?= $this->extend('layout/template');  ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>ID Telegram</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($role as $user) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['group_name'] ?></td>
                            <td><?= $user['user_id'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="<?= base_url('users/edit_user/' . $user['id']);?>">Ubah</a>
                                <a class="btn btn-sm btn-danger tombolDelete"
                                    href="<?= base_url('users/delete_user/' . $user['id']);?>">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>
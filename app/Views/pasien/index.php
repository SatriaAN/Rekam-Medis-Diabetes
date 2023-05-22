<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasien</h1>
    </div>
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <a href="<?= base_url('pasien/tambah-pasien'); ?>" class="btn btn-primary mb-3">
                        <span>Tambah Pasien</span>
                    </a>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>E-mail</th>
                            <th>Nomor Hp</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no =1; ?>
                        <?php foreach($pasien as $p) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['email'] ?></td>
                            <td><?= $p['no_hp'] ?></td>
                            <td><?= $p['umur'] ?></td>
                            <td><?= $p['jenis_kelamin'] ?></td>
                            <td><?= $p['alamat'] ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning"
                                    href="<?= base_url('pasien/edit_pasien/' . $p['idpasien']);?>">Edit</a>
                                &nbsp;
                                <a class="btn btn-sm btn-danger tombolDelete"
                                    href="<?= base_url('pasien/delete_pasien/' . $p['idpasien']);?>">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<?php $this->endSection(''); ?>
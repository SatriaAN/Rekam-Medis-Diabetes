<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pasien</h1>
    </div>
    <?php 
    if(session()->getFlashdata('pesan')):  ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong><?= session()->getFlashdata('pesan'); ?></strong>
    </div>
    <?php endif;  ?>

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
                                <!-- <a class="btn btn-sm btn-danger" id="tombolDelete"
                                    href="<?= base_url('pasien/delete_pasien/' . $p['idpasien']);?>">Hapus</a> -->
                                <a class="btn btn-sm btn-danger" data-toggle="modal"
                                    onclick="$('#tombolDelete #formDelete').attr('action', '<?= base_url('pasien/delete_pasien/' . $p['idpasien']);?>');"
                                    href="#tombolDelete">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tombolDelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Anda yakin menghapus data ini?</h4>
            </div>
            <div class="modal-footer">
                <form id="formDelete" action="" method="POST">
                    <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('pasien/delete_pasien/' . $p['idpasien']);?>" class="btn btn-danger"
                        type="submit">Hapus</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(''); ?>
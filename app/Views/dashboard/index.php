<?= $this->extend('layout/template'); ?>


<!-- Page Wrapper -->
<?php $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan') ?>"></div>


    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl col-lg">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Chart Penderita Penyakit Diabetes</h6>
                </div>


                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <!-- Begin Page Content -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Table Data Diabetes</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <a href="<?= base_url('dashboard/tambah'); ?>" class="btn btn-primary mb-3">
                                <span>Tambah Data</span>
                            </a>
                        </div>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pasien</th>
                                    <th>Gula Darah Puasa</th>
                                    <th>Gula Darah Sewaktu</th>
                                    <th>Tanggal</th>
                                    <?php if(in_groups('Admin')) :?>
                                    <th>Action</th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach($dashboard as $d) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['gula_darah_puasa']; ?></td>
                                    <td><?= $d['gula_darah_sewaktu']; ?></td>
                                    <td><?= $d['tanggal']; ?></td>
                                    <?php if(in_groups('Admin')) :?>
                                    <td>
                                        <a class="btn btn-sm btn-warning"
                                            href="<?= base_url('dashboard/edit/' . $d['idreport']);?>">Edit</a>
                                        &nbsp;
                                        <a class="btn btn-sm btn-danger tombolDelete"
                                            href="<?= base_url('dashboard/delete/' . $d['idreport']);?>">Hapus</a>
                                    </td>
                                    <?php endif; ?>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->
        </div>
    </div>
</div>
<script>
$.ajax({
    url: "<?= base_url() ?>"
})
</script>
<?php $this->endSection(); ?>
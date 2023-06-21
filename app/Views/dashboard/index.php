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
        <div class="row">
            <div class="col-xl-6">
                <h6 class="m-0 font-weight-bold text-center mb-3">Data Terbaru Tekanan Darah Sistolik</h6>
                <div id="chartGaugeSistolik"></div>
            </div>
            <div class="col-xl-6">
                <h6 class="m-0 font-weight-bold text-center mb-3">Data Terbaru Tekanan Darah Diastolik</h6>
                <div id="chartGaugeDiastolik"></div>
            </div>
            <!-- Area Chart -->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-info">Chart Tekanan Darah (sistolik)</h6>
                            <input class="form-control" onchange="getSistolik();" type="number" value="<?= date('Y') ?>"
                                id="tahun_chartSistolik">
                        </div>


                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chartSistolik"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-warning">Chart Tekanan Darah (diastolik)</h6>
                            <input class="form-control" onchange="getDiastolik();" type="number"
                                value="<?= date('Y') ?>" id="tahun_chartDiastolik">
                        </div>


                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="chartDiastolik"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl col-lg">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Chart Gula Darah Puasa</h6>
                                <input class="form-control" onchange="getReport();" type="number"
                                    value="<?= date('Y') ?>" id="tahun_gulaDarahPuasa">
                            </div>


                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="chartReport2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-success">Chart Gula Darah Sewaktu</h6>
                                <input class="form-control" onchange="getReport2();" type="number"
                                    value="<?= date('Y') ?>" id="tahun_gulaDarahSewaktu">
                            </div>


                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="chartReport"></canvas>
                                </div>
                            </div>
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
                                        <th>Tekanan Darah (sistolik)</th>
                                        <th>Tekanan Darah (diastolik)</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
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
                                        <td><?= $d['sistolik']; ?></td>
                                        <td><?= $d['diastolik']; ?></td>
                                        <td><?= $d['tanggal']; ?></td>
                                        <td>
                                            <a class="btn btn-sm btn-warning"
                                                href="<?= base_url('dashboard/edit/' . $d['idreport']);?>">Ubah</a>
                                            &nbsp;
                                            <a class="btn btn-sm btn-danger tombolDelete"
                                                href="<?= base_url('dashboard/delete/' . $d['idreport']);?>">Hapus</a>
                                        </td>
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
</div>
<?php $this->endSection(); ?>
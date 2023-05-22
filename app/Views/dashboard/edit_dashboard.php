<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container px-5 my-5">
    <h2 class="text-center">Form Tambah Data Diabetes</h2>
    <br>
    <?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4>Periksa Error Form</h4>
        </hr />
        <?php echo session()->getFlashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <form action="<?= base_url('dashboard/store'); ?>" data-sb-form-api-token="API_TOKEN">
        <div class="form-label mb-3">
            <label for="namaPasien">Nama Pasien</label>
            <select class="form-select" name="nama" aria-label="Nama Pasien">
                <?php foreach ($pasien as $key => $value) { ?>
                <option value="<?= $value['idpasien']; ?>"><?= $value['nama']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="gulaDarahPuasa">Gula Darah Puasa</label>
            <input class="form-control" name="gulaDarahPuasa" type="number" placeholder="Gula Darah Puasa"
                value="<?= $dashboard['gula_darah_puasa']; ?>" />
        </div>
        <div class=" mb-3">
            <label class="form-label" for="gulaDarahSewaktu">Gula Darah Sewaktu</label>
            <input class="form-control" name="gulaDarahSewaktu" type="number" placeholder="Gula Darah Sewaktu"
                value="<?= $dashboard['gula_darah_sewaktu']; ?>" />
        </div>
        <div class=" mb-3">
            <label class="form-label" for="tanggal">Tanggal</label>
            <input class="form-control" name="tanggal" type="date" value="<?= $dashboard['tanggal'] ?>" />

        </div>
        <div class="d-grid">
            <button class="btn btn-success btn-lg" type="submit">Simpan Data</button>
            <a class="btn btn-primary btn-lg mt-3" href="<?= base_url('/dashboard'); ?>">Kembali</a>
        </div>
    </form>
</div>

<?php $this->endSection(); ?>
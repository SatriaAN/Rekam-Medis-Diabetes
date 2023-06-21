<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container px-5 my-5">
    <h2 class="text-center">Form Tambah Pasien</h2>
    <br>
    <?php if(session('failed')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= session('failed'); ?>
    </div>
    <?php endif; ?>

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

    <form action="<?= base_url('pasien/simpandata');?>" method="POST" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" id="nama" type="name" value="<?= old('nama'); ?>"
                placeholder="Nama" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" name="email" id="emailAddress" type="text" placeholder="Email Address"
                value="<?= old('email'); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="umur">Umur</label>
            <input class="form-control" name="umur" id="umur" type="number" placeholder="Umur"
                value="<?= old('umur'); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="berat_badan">Berat Badan</label>
            <input class="form-control" name="beratBadan" id="berat_badan" type="number" placeholder="Berat Badan"
                value="<?= old('beratBadan'); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="tinggi_badan">Tinggi Badan</label>
            <input class="form-control" name="tinggiBadan" id="tinggiBadan" type="number" placeholder="Tinggi Badan"
                value="<?= old('tinggiBadan'); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomorHandphone">Nomor Handphone</label>
            <input class="form-control" name="nomorHp" id="nomorHandphone" type="number" placeholder="Nomor Handphone"
                value="<?= old('nomorHp'); ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="jenisKelamin">Jenis Kelamin</label>
            <select class="form-select" name="jenisKelamin" id="jenisKelamin" aria-label="Jenis Kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" type="text" placeholder="Alamat"
                style="height: 10rem;"><?= old('alamat'); ?></textarea>
        </div>
        <div class="d-grid">
            <button class="btn btn-success btn-lg" type="submit">Simpan Data</button>
            <a class="btn btn-primary btn-lg mt-3" href="<?= base_url('/pasien'); ?>">Kembali</a>

        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<?php $this->endSection(''); ?>
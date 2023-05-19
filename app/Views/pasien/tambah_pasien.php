<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container px-5 my-5">
    <h2 class="text-center">Form Tambah Pasien</h2>
    <br>
    <form action="<?= base_url('pasien/simpandata');?>" method="POST" data-sb-form-api-token="API_TOKEN">
        <div class="mb-3">
            <label class="form-label" for="nama">Nama</label>
            <input class="form-control" name="nama" id="nama" type="name" placeholder="Nama"
                data-sb-validations="required,email" />
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>

        </div>
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" name="email" id="emailAddress" type="text" placeholder="Email Address"
                data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="umur">Umur</label>
            <input class="form-control" name="umur" id="umur" type="text" placeholder="Umur"
                data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="umur:required">Umur is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nomorHandphone">Nomor Handphone</label>
            <input class="form-control" name="nomorHp" id="nomorHandphone" type="text" placeholder="Nomor Handphone"
                data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nomorHandphone:required">Nomor Handphone is required.</div>
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
                style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="alamat:required">Alamat is required.</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Simpan Data</button>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<?php $this->endSection(''); ?>
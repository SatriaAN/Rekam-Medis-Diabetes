<?= $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container px-5 my-5">
    <h2 class="text-center">Form Edit User</h2>
    <br>
    <form action="<?= base_url('users/update');?>" method="POST" data-sb-form-api-token="API_TOKEN">
        <input type="hidden" name="kode" value="<?= $user['id']; ?>">
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" name="username" id="username" type="name" value="<?= $user['username']; ?>"
                data-sb-validations="required" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email Address</label>
            <input class="form-control" name="email" id="emailAddress" type="text" value="<?= $user['email']; ?>"
                data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="user_id">User ID Telegram</label>
            <input class="form-control" name="user_id" type="number" value="<?= $user['user_id']; ?>" />
        </div>
        <div class="d-grid">
            <button class="btn btn-success btn-lg" type="submit">Simpan Data</button>
            <a class="btn btn-primary btn-lg mt-3" href="<?= base_url('/users'); ?>">Kembali</a>
        </div>
    </form>
</div>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<?php $this->endSection(''); ?>
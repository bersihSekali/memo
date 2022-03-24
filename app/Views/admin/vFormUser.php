<?= $this->extend('templates/vIndex'); ?>

<?= $this->section('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?= view('Myth\Auth\Views\_message_block'); ?>
            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group mb-3">
                    <label for="username" class="form-label ">Nama Pengguna</label>
                    <input type="text" class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" autocomplete="off" required>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="password" class="form-label ">Kata Sandi</label>
                        <input type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" autocomplete="off" required>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label for="pass_confirm" class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="pass_confirm" name="pass_confirm" autocomplete="off" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>
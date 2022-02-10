<?= $this->extend('templates/vIndex'); ?>

<?= $this->section('content'); ?>
    <?php date_default_timezone_set("Asia/Jakarta"); ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?= view('Myth\Auth\Views\_message_block'); ?>
            <form action="" method="post">
                <?= csrf_field() ?>

                <div class="form-group mb-3">
                    <label for="tanggal_regist" class="form-label ">Tanggal Registrasi</label>
                    <input type="text" class="form-control" id="tanggal_regist" name="tanggal_regist" value="<?= date("Y-m-d"); ?>" readonly>
                </div>
                
                <div class="form-group mb-3">
                    <label for="pic" class="form-label ">PIC</label>
                    <input type="text" class="form-control" id="pic" name="pic" autocomplete="off" required>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="dept_asal" class="form-label ">Department Asal</label>
                        <input type="text" class="form-control" id="dept_asal" name="dept_asal" autocomplete="off" required>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label for="dept_tujuan" class="form-label">Department Tujuan</label>
                        <input type="text" class="form-control" id="dept_tujuan" name="dept_tujuan" autocomplete="off" required>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label for="pic" class="form-label ">Perihal</label>
                    <textarea class="form-control" aria-label="With textarea" name="perihal" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>
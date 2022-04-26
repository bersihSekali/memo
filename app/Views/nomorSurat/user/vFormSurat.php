<?= $this->extend('nomorSurat/templates/vIndex'); ?>

<?= $this->section('content'); ?>
    <?php date_default_timezone_set("Asia/Jakarta"); ?>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?= view('Myth\Auth\Views\_message_block'); ?>
            <form action="/user/registSurat" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>

                <div class="form-group mb-3">
                    <label for="tanggal_regist" class="form-label ">Tanggal Registrasi</label>
                    <input type="text" class="form-control" id="tgl_regist" name="tgl_regist" value="<?= date("Y-m-d"); ?>" readonly>
                </div>
                
                <div class="form-group mb-3">
                    <label for="pic" class="form-label ">PIC</label>
                    <input type="text" class="form-control" id="pic" name="pic" autocomplete="off" value="<?= user()->username; ?>" readonly>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="dept_tujuan" class="form-label">Satuan Kerja Asal</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dept_tujuan" id="dept_tujuan">
                            <option selected> ---- </option>
                            <option value="OPR">OPR</option>
                            <option value="PPO">PPO</option>
                            <option value="STL">STL</option>
                            <option value="PTI">PTI</option>
                            <option value="STI">STI</option>
                        </select>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label for="dept_tujuan" class="form-label">Satuan Kerja Tujuan</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dept_tujuan" id="dept_tujuan">
                            <option selected> ---- </option>
                            <option value="OPR">OPR</option>
                            <option value="PPO">PPO</option>
                            <option value="STL">STL</option>
                            <option value="PTI">PTI</option>
                            <option value="STI">STI</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                        <label for="dept_tujuan" class="form-label">Department Asal</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dept_tujuan" id="dept_tujuan">
                            <option selected> ---- </option>
                            <option value="OPR">OPR</option>
                            <option value="PPO">PPO</option>
                            <option value="STL">STL</option>
                            <option value="PTI">PTI</option>
                            <option value="STI">STI</option>
                        </select>
                    </div>

                    <div class="col-sm-6 mb-3">
                        <label for="dept_tujuan" class="form-label">Department Tujuan</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dept_tujuan" id="dept_tujuan">
                            <option selected> ---- </option>
                            <option value="OPR">OPR</option>
                            <option value="PPO">PPO</option>
                            <option value="STL">STL</option>
                            <option value="PTI">PTI</option>
                            <option value="STI">STI</option>
                        </select>
                    </div>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Author Kepala Satuan Kerja?</label>
                </div>

                <div class="form-group mb-3">
                    <label for="pic" class="form-label ">Perihal</label>
                    <textarea class="form-control" aria-label="With textarea" name="perihal" required></textarea>
                </div>

                <div class="mb-3">
                    <input class="form-control <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" type="file" id="file" name="file">
                    <div class="invalid-feedback">
                        <?= $validation->getError(); ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
<?= $this->endSection(); ?>
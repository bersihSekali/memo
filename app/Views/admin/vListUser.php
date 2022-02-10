<?= $this->extend('templates/vIndex'); ?>

<?= $this->section('content'); ?>
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Nama Pengguna</th>
                    <th scope="col">Role</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user) : ?>
                        <tr>
                          <td><?= $user->username; ?></td>
                          <td><?= $user->name; ?></td>
                          <td>
                            <span class="badge bg-primary" style="cursor: pointer">
                                <span class="badge bg-primary" data-bs-toggle="modal" data-bs-target="#user-<?= $user->userid; ?>">
                                    <i class="fas fa-user-edit fa-2xl"></i>
                                </span>
                            </span>
                          </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
    </div>

    <?php foreach($users as $user) : ?>
        <!-- Modal -->
        <div class="modal fade" id="user-<?= $user->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Aksi User <?= $user->username; ?></h5>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/editUser/<?= $user->userid; ?>" method="post" class="user">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username"
                                    placeholder="<?= $user->username; ?>" value="<?= old('username') ?>" readonly>

                                <label for="">Role</label>
                                <input type="text" class="form-control form-control-user <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" id="name" name="name"
                                    placeholder="<?= $user->name; ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label for="option">Ubah Role</label>
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="role" id="role">
                                    <option selected> ---- </option>
                                    <option value="2">OPR</option>
                                    <option value="3">PPO</option>
                                    <option value="4">STL</option>
                                    <option value="5">PTI</option>
                                    <option value="6">STI</option>
                                </select>
                            </div>
                            
                            <div class="modal-footer">
                                <div class="row justify-content-center">
                                    <div class="col-sm">
                                        <a href="/admin/hapusUser/<?= $user->userid; ?>" style="text-decoration: none; color: white;"><button type="button" class="btn btn-danger btn-user btn-block">Hapus</button></a>
                                    </div>

                                    <div class="col-sm">
                                        <button type="button" class="btn btn-secondary btn-user btn-block" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">Batal</span>
                                        </button>
                                    </div>

                                    <div class="col-sm">
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach($users as $user) : ?>
        <!-- Modal -->
        <div class="modal fade" id="hapus-<?= $user->userid; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus <?= $user->username; ?></h5>
                    </div>
                    <div class="modal-body">
                        Apakah anda yakin akan menghapus pengguna <?= $user->username; ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-hidden="true">Batal</button>
                        <a href="/admin/hapusUser/<?= $user->userid; ?>" style="text-decoration: none; color: white;">
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?= $this->endSection(); ?>
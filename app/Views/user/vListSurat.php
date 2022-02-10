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
                    <th scope="col">Tanggal Registrasi</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">PIC</th>
                    <th scope="col">Dept. Asal</th>
                    <th scope="col">Dept. Tujuan</th>
                    <th scope="col">Perihal</th>
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
<?= $this->endSection(); ?>
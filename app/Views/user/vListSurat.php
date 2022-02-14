<?= $this->extend('templates/vIndex'); ?>

<?= $this->section('content'); ?>
  <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <!-- Table with stripped rows -->
            <?= view('Myth\Auth\Views\_message_block'); ?>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Tanggal Registrasi</th>
                  <th scope="col">PIC</th>
                  <th scope="col">Dept. Asal</th>
                  <th scope="col">Dept. Tujuan</th>
                  <th scope="col">Perihal</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                  <?php foreach($mails as $mail) : ?>
                      <tr id="data" data-bs-toggle="modal" data-bs-target="#mail-<?= $mail->id_surat; ?>" style="cursor: pointer;">
                        <td><?= $mail->tgl_regist; ?></td>
                        <td><?= $mail->pic; ?></td>
                        <td><?= $mail->dept_asal; ?></td>
                        <td><?= $mail->dept_tujuan; ?></td>
                        <td><?= $mail->perihal; ?></td>
                        <td>
                          <?php if(($mail->status) == 1) : ?>
                            <span class="badge rounded-pill text-dark" style="background-color: #ffa200;"><i class="fa-solid fa-circle-check"></i> IN Kadept</span>
                          <?php elseif(($mail->status) == 2) : ?>
                            <span class="badge rounded-pill text-dark" style="background-color: #ffd000;"><i class="fa-solid fa-circle-check"></i> OUT Kadept</span>
                          <?php elseif(($mail->status) == 3) : ?>
                            <span class="badge rounded-pill text-dark" style="background-color: #119822;"><i class="fa-solid fa-circle-check"></i> IN Kadiv</span>
                          <?php elseif(($mail->status) == 4) : ?>
                            <span class="badge rounded-pill bg-success"><i class="fa-solid fa-circle-check"></i> Selesai</span>
                          <?php else : ?>
                            <span class="badge rounded-pill bg-dark"><i class="fa-solid fa-circle-xmark"></i> No Action</span>
                          <?php endif; ?>
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

  <?php foreach($mails as $mail) : ?>
    <div class="modal fade" id="mail-<?= $mail->id_surat; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Surat</h5>
                </div>

                <div class="modal-body">
                    <pre>Tanggal Registrasi   :<?= $mail->tgl_regist; ?></pre>
                    <pre>Tanggal Edit         :<?= $mail->tgl_edit; ?></pre>
                    <pre>Nomor Surat          :<?= $mail->no_surat; ?></pre>
                    <pre>PIC                  :<?= $mail->pic; ?></pre>
                    <pre>Department Asal      :<?= $mail->dept_asal; ?></pre>
                    <pre>Department Tujuan    :<?= $mail->dept_tujuan; ?></pre>
                    <pre>Perihal              :<?= $mail->perihal; ?></pre>
                    <p>Keterangan           :</p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Status Kadept</th>
                          <th scope="col">Status Kadiv</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <?php if(($mail->status) == 1) : ?>
                          <tr>
                            <th scope="row">IN</th>
                            <td>
                              <span><i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_masuk_kadept; ?></span> <!-- IN Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"></i> <!-- IN Kadiv -->
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">OUT</th>
                            <td>
                              <i class="fa-solid fa-circle-xmark"></i> <!-- OUT Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"></i> <!-- OUT Kadiv -->
                            </td>
                          </tr>

                        <?php elseif(($mail->status) == 2) : ?>
                          <tr>
                            <th scope="row">IN</th>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_masuk_kadept; ?> <!-- IN Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"></i> <!-- IN Kadiv -->
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">OUT</th>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_keluar_kadept; ?><!-- OUT Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"></i> <!-- OUT Kadiv -->
                            </td>
                          </tr>

                        <?php elseif(($mail->status) == 3) : ?>
                          <tr>
                            <th scope="row">IN</th>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_masuk_kadept; ?> <!-- IN Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_masuk_kadiv; ?> <!-- IN Kadiv -->
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">OUT</th>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_keluar_kadept; ?> <!-- OUT Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"></i> <!-- OUT Kadiv -->
                            </td>
                          </tr>

                        <?php elseif(($mail->status) == 4) : ?>
                          <tr>
                            <th scope="row">IN</th>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_masuk_kadept; ?> <!-- IN Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_masuk_kadiv; ?> <!-- IN Kadiv -->
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">OUT</th>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_keluar_kadept; ?> <!-- OUT Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-check"></i> <?= $mail->tgl_keluar_kadiv; ?> <!-- OUT Kadiv -->
                            </td>
                          </tr>

                        <?php else : ?>
                          <tr>
                            <th scope="row">IN</th>
                            <td>
                              <i class="fa-solid fa-circle-xmark"> <!-- IN Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"> <!-- IN Kadiv -->
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">OUT</th>
                            <td>
                              <i class="fa-solid fa-circle-xmark"> <!-- OUT Kadept -->
                            </td>
                            <td>
                              <i class="fa-solid fa-circle-xmark"> <!-- OUT Kadiv -->
                            </td>
                          </tr>
                        <?php endif; ?>
                      </tbody>
                    </table>
                </div>

                <?php if(in_groups('OPR') || in_groups('STL') || in_groups('STI') || in_groups('PTI') || in_groups('PPO')) : ?>
                  <div class="modal-footer">
                    <?php if((($mail->status) < 4) && (in_groups('OPR') || in_groups('STL') || in_groups('PTI') || in_groups('STI') || in_groups('PPO'))) : ?>
                      <a href="/user/formEditSurat/<?= $mail->id_surat; ?>"><button type="button" class="btn" style="background-color: #03045e; color: white">Edit Surat</button></a>
                    <?php endif; ?>
  
                    <?php if(($mail->status) == 0) : ?>
                      <a href="/user/inKadept/<?= $mail->id_surat; ?>"><button type="button" class="btn btn-primary">Konfirmasi IN Kadept</button></a>
                    <?php elseif(($mail->status) == 1) : ?>
                      <a href="/user/outKadept/<?= $mail->id_surat; ?>"><button type="button" class="btn btn-primary">Konfirmasi OUT Kadept</button></a>
                    <?php elseif(($mail->status) == 2) : ?>
                      <a href="/user/inKadiv/<?= $mail->id_surat; ?>"><button type="button" class="btn btn-primary">Konfirmasi IN Kadiv</button></a>
                    <?php elseif(($mail->status) == 3) : ?>
                      <a href="/user/outKadiv/<?= $mail->id_surat; ?>"><button type="button" class="btn btn-primary">Konfirmasi OUT Kadiv</button></a>
                    <?php else : ?>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
<?= $this->endSection(); ?>
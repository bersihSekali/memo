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
                  <th scope="col">PIC</th>
                  <th scope="col">Dept. Asal</th>
                  <th scope="col">Dept. Tujuan</th>
                  <th scope="col">Perihal</th>
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
                    <pre>Nomor Surat          :<?= $mail->no_surat; ?></pre>
                    <pre>PIC                  :<?= $mail->pic; ?></pre>
                    <pre>Department Asal      :<?= $mail->dept_asal; ?></pre>
                    <pre>Department Tujuan    :<?= $mail->dept_tujuan; ?></pre>
                    <pre>Keterangan           :</pre>
                  
                  <!-- <label for="">Tanggal Registrasi</label>
                  <input type="text" class="form-control form-control-user" id="tgl_regist" name="tgl_regist" value="<?= $mail->tgl_regist; ?>" readonly>
                  
                  <label for="">Nomor</label>
                  <input type="text" class="form-control form-control-user" id="no_surat" name="no_surat" value="<?= $mail->no_surat; ?>" readonly>
                    
                  <label for="">PIC</label>
                  <input type="text" class="form-control form-control-user" id="pic" name="pic" value="<?= $mail->pic; ?>" readonly>

                  <label for="">Department Asal</label>
                  <input type="text" class="form-control form-control-user" id="dept_asal" name="dept_asal" value="<?= $mail->dept_asal; ?>" readonly>
                  
                  <label for="">Department Tujuan</label>
                  <input type="text" class="form-control form-control-user" id="dept_tujuan" name="dept_tujuan" value="<?= $mail->dept_tujuan; ?>" readonly>
                  
                  <label for="perihal">Perihal</label>
                  <textarea class="form-control" id="perihal" name="perihal" rows="3"><?= $mail->perihal; ?></textarea> -->
                </div>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
<?= $this->endSection(); ?>
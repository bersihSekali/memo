<?= $this->extend('templates/vIndex'); ?>

<?= $this->section('content'); ?>

    <?php 
        date_default_timezone_set("Asia/Jakarta");
        $jam = date('H:i');
        
        if ($jam > '05:30' && $jam < '10:00') {
            $salam = 'Pagi';
        } elseif ($jam >= '10:00' && $jam < '15:00') {
            $salam = 'Siang';
        } elseif ($jam < '18:00') {
            $salam = 'Sore';
        } else {
            $salam = 'Malam';
        }
    ?>

    <h1>Selamat <?= $salam; ?> <?= user()->username; ?></h1>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary">
                    </div>
                        
                    <div class="card-body">
                        <h5>Total Surat</h5>
                        <div class="row justify-content-between">
                            <div class="col">
                                <h5><?= $total[0]->id_surat; ?> </h5>    
                            </div>
                            <div class="col text-end">
                                <i class="fas fa-copy fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    

            <div class="col">
                <div class="card">
                    <div class="card-header bg-success">
                    </div>
                        
                    <div class="card-body">
                        <h5>Selesai</h5>
                        <div class="row justify-content-between">
                            <div class="col">
                                <h5> <?= $done[0]->done; ?> </h5>    
                            </div>
                            <div class="col text-end">
                                <i class="fas fa-clipboard-check fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-header bg-warning">
                    </div>
                        
                    <div class="card-body">
                        <h5>Progres</h5>
                        <div class="row justify-content-between">
                            <div class="col">
                                <h5> <?= $progres[0]->progres; ?> </h5>
                            </div>
                            <div class="col text-end">
                                <i class="fas fa-spinner fa-spin fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                    </div>
                        
                    <div class="card-body">
                        <h5>No Action</h5>
                        <div class="row justify-content-between">
                            <div class="col">
                                <h5> <?= $noAction[0]->noAction; ?> </h5>
                            </div>
                            <div class="col text-end">
                                <i class="fa-solid fa-circle-xmark fa-beat fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
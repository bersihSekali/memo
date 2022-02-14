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

    <h1>Selamat <?= $salam; ?></h1>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary">
                    </div>
                        
                    <div class="card-body">
                        <h5>Total Surat</h5>
                        <i class="fas fa-copy fa-2xl"></i>
                        <span><?= $total[0]->id_surat; ?> </span>
                    </div>
                </div>
            </div>    

            <div class="col">
                <div class="card">
                    <div class="card-header bg-success">
                    </div>
                        
                    <div class="card-body">
                        <h5>Selesai</h5>
                        <i class="fas fa-clipboard-check fa-2xl"></i>
                        <span> <?= $done[0]->done; ?> </span>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card">
                    <div class="card-header bg-warning">
                    </div>
                        
                    <div class="card-body">
                        <h5>Progres</h5>
                        <i class="fas fa-spinner fa-spin fa-2xl"></i>
                        <span> <?= $progres[0]->progres; ?> </span>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark">
                    </div>
                        
                    <div class="card-body">
                        <h5>No Action</h5>
                        <i class="fa-solid fa-circle-xmark fa-beat fa-2xl"></i>
                        <span> <?= $noAction[0]->noAction; ?> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
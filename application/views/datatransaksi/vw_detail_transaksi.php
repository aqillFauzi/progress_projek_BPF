<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Transaksi
                </div>
                <div class="card-body">

                    <h2 class="card-title">
                        <?= $datatransaksi['nomor_plat']; ?>
                    </h2>
                    <div class="row">
                        <div class="col-md-4">Tanggal</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                        <?= $datatransaksi['tanggal']; ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">Type Motor</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $datatransaksi['type_motor']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tarif</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $datatransaksi['tarif']; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Karyawan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $datatransaksi['karyawan']; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Data_transaksi') ?>" class="badge bg-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>

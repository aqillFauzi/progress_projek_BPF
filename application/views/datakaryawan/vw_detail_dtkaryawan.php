<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Karyawan
                </div>
                <div class="card-body">

                    <h2 class="card-title">
                        <?= $datakaryawan['Nama_karyawan']; ?>
                    </h2>
                    <div class="row">
                        <div class="col-md-4">No Telepon</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                        <?= $datakaryawan['No_hp']; ?>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6">
                            <?= $datakaryawan['Alamat']; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Data_karyawan') ?>" class="badge bg-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>

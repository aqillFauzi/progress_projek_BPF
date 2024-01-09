<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Type Motor
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Data_type_motor/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="kategori_motor">Kategori motor</label>
                            <input type="text" name="kategori_motor" class="form-control" id="kategori_motor" placeholder="kategori motor">
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" name="tarif" class="form-control" id="tarif" placeholder="tarif">
                        </div>
                        <a href="<?= base_url('Data_type_motor') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Type Motor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
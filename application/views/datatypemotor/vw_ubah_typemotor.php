<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Edit Data Type Motor
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Data_type_motor/update'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $datatypemotor['id']; ?>">
                        <div class="form-group">
                            <label for="kategori_motor">Kategori motor</label>
                            <input type="text" name="kategori_motor" value="<?= $datatypemotor['kategori_motor']; ?>" class="form-control" id="kategori_motor" placeholder="kategori motor">
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <input type="text" name="tarif" value="<?= $datatypemotor['tarif']; ?>" class="form-control" id="tarif" placeholder="tarif">
                        </div>
                        <a href="<?= base_url('Data_karyawan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah
                            Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
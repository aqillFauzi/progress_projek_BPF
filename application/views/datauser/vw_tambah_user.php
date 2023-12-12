<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Karyawan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Data_karyawan/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="Nama_karyawan">Nama</label>
                            <input type="text" name="Nama_karyawan" class="form-control" id="Nama_karyawan" placeholder="Nama">
                            
                        </div>
                        <div class="form-group">
                            <label for="No_hp">No. HP</label>
                            <input type="text" name="No_hp" class="form-control" id="No_hp" placeholder="No HP">
                            
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <input type="text" name="Alamat" class="form-control" id="Alamat" placeholder="Alamat">
                        </div>
                        <a href="<?= base_url('Data_karyawan') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Karyawan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Transaksi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Data_transaksi/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal">
                        </div>
                        <div class="form-group">
                            <label for="nomor_plat">Nomor Plat</label>
                            <input type="text" name="nomor_plat" class="form-control" id="nomor_plat" placeholder="Nomor plat">
                        </div>
                        <div class="form-group">
                            <label for="type_motor">Kategori Motor</label>
                            <select name="type_motor" id="type_motor" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <?php foreach ($datatypemotor as $dttm) : ?>
                                    <option value="<?= $dttm['id']; ?>"><?= $dttm['kategori_motor']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tarif">Tarif</label>
                            <select name="tarif" id="tarif" class="form-control">
                                <option value="">Pilih Tarif</option>
                                <option value="18000">Rp. 18.000</option>
                                <option value="21000">Rp. 21.000</option>
                                <option value="25000">Rp. 25.000</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="karyawan">Anggota</label>
                            <select name="karyawan" id="karyawan" class="form-control">
                                <option value="">Pilih anggota</option>
                                <?php foreach ($datakaryawan as $dtk) : ?>
                                    <option value="<?= $dtk['id']; ?>"><?= $dtk['Nama_karyawan']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <a href="<?= base_url('Data_transaksi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
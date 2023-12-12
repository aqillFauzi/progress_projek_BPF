<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Data_karyawan/tambah" class="btn btn-info mb-2">Tambah karyawan</a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama</td>
                            <td>No. HP</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($datakaryawan as $dtk) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $dtk['Nama_karyawan']; ?></td>
                            <td><?= $dtk['No_hp']; ?></td>
                            <td><?= $dtk['Alamat']; ?></td>
                            <td>
                                <a href="<?= base_url('Data_karyawan/hapus/') . $dtk['id'];?>" class="badge bg-danger">Hapus</a>
                                <a href="<?= base_url('Data_karyawan/edit/') . $dtk['id'];?>" class="badge bg-warning">Edit</a>
                                <a href="<?= base_url('Data_karyawan/detail/') . $dtk['id'];?>" class="badge bg-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
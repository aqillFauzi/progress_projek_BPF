<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Data_type_motor/tambah" class="btn btn-info mb-2">Tambah type motor</a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Kategori Motor</td>
                            <td>Tarif</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($datatypemotor as $dttm) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $dttm['kategori_motor']; ?></td>
                            <td>Rp. <?= $dttm['tarif']; ?></td>
                            <td>
                                <a href="<?= base_url('Data_type_motor/hapus/') . $dttm['id'];?>" class="badge bg-danger">Hapus</a>
                                <a href="<?= base_url('Data_type_motor/edit/') . $dttm['id'];?>" class="badge bg-warning">Edit</a>
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

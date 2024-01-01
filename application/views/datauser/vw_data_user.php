<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url() ?>Data_user/tambah" class="btn btn-info mb-2">Tambah User</a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama</td>
                            <td>Username</td>
                            <td>Alamat</td>
                            <td>No. HP</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($datauser as $du) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $du['nama']; ?></td>
                            <td><?= $du['username']; ?></td>
                            <td><?= $du['alamat']; ?></td>
                            <td><?= $du['hp']; ?></td>
                            <td>
                                <a href="<?= base_url('Data_user/hapus/') . $du['id'];?>" class="badge bg-danger">Hapus</a>
                                <a href="<?= base_url('Data_user/edit/') . $du['id'];?>" class="badge bg-warning">Edit</a>
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

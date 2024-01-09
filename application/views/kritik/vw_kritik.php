

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Nama</td>
                            <td>Pesan</td>
                            <td>Kebersihan</td>
                            <td>Keramahan</td>
                            <td>Ketelitian</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    <?php foreach ($kritik as $kritik) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $kritik['nama']; ?></td>
                            <td><?= $kritik['pesan']; ?></td>
                            <td><?= $kritik['kebersihan']; ?></td>
                            <td><?= $kritik['keramahan']; ?></td>
                            <td><?= $kritik['ketelitian']; ?></td>
                            <td>
                            <a href="<?= base_url('Kritik/hapus/') . $kritik['id']; ?>" class="badge bg-danger">Hapus</a>
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


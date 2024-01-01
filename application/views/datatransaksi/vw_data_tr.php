<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?= $judul; ?>
    </h1>

    <!-- Form Filter Tanggal -->
    <form action="<?= base_url('Data_transaksi/filterByTanggal'); ?>" method="post">
        <div class="row mb-3">
            <div class="col-md-3">
                <label for="tanggalFilter" class="form-label">Filter berdasarkan tanggal:</label>
                <input type="date" class="form-control" id="tanggalFilter" name="tanggal" required>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary mt-4">Filter</button>
            </div>

            <!-- Tampilkan Total Tarif -->
            <?php if (isset($totalTarif)) : ?>
                <div class="col-md-7">
                    <p class="h4 mb-4 font-weight-bold">Total: Rp. <?= number_format($totalTarif, 2); ?></p>
                </div>
            <?php endif; ?>

            <!-- Tampilkan Penghasilan Bersih -->
            <?php if (isset($totalTarif, $countMotorByKaryawan, $countGajiByKaryawan)) : ?>
                <?php
                $gajiTotal = 0;
                foreach ($countMotorByKaryawan as $result) {
                    $gajiTotal += $result['jumlah_motor'] * 8000;
                }
                $penghasilanBersih = $totalTarif - $gajiTotal;
                ?>
                <div class="col-md-7">
                    <p class="h3 mt-4 font-weight-bold">Penghasilan Bersih: Rp. <?= number_format($penghasilanBersih, 2); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </form>

    <div class="row">
        <div class="col-md-6">
            <a href="<?= base_url('Data_transaksi/tambah'); ?>" class="btn btn-info mb-2">Input Transaksi</a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal</td>
                            <td>No. Plat</td>
                            <td>Kategori</td>
                            <td>Tarif</td>
                            <td>Nama Pencuci</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($datatransaksi as $dtt) : ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $dtt['tanggal']; ?></td>
                                <td><?= $dtt['nomor_plat']; ?></td>
                                <td><?= $dtt['kategori_motor']; ?></td>
                                <td><?= $dtt['tarif']; ?></td>
                                <td><?= $dtt['karyawan']; ?></td>
                                
                                <td>
                                    <a href="<?= base_url('Data_transaksi/hapus/') . $dtt['id']; ?>" class="badge bg-danger">Hapus</a>
                                    <a href="<?= base_url('Data_transaksi/edit/') . $dtt['id']; ?>" class="badge bg-warning">Edit</a>
                                    <a href="<?= base_url('Data_transaksi/detail/') . $dtt['id']; ?>" class="badge bg-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">

            <?php if (isset($countMotorByKaryawan) && is_array($countMotorByKaryawan)) : ?>
                <div class="col-md-12">
                    <?php foreach ($countMotorByKaryawan as $result) : ?>
                        <?php
                        // Ambil nama karyawan berdasarkan ID
                        $karyawanId = $result['karyawan'];
                        $karyawan = $this->Data_karyawan_model->getById($karyawanId);
                        ?>
                        <p>Karyawan <?= $karyawan ? $karyawan['Nama_karyawan'] : 'Nama tidak ditemukan'; ?>: <?= $result['jumlah_motor']; ?> motor</p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Tampilkan Total Gaji -->
            <?php if (isset($countGajiByKaryawan)) : ?>
                <p class="h4 mb-4 font-weight-bold">Total Gaji:</p>
                <?php foreach ($countGajiByKaryawan as $result) : ?>
                    <?php
                    // Ambil nama karyawan berdasarkan ID
                    $karyawanId = $result['karyawan'];
                    $karyawan = $this->Data_karyawan_model->getById($karyawanId);
                    ?>
                    <p>Karyawan <?= $karyawan['Nama_karyawan']; ?>: Rp. <?= number_format($result['total_gaji'], 2); ?></p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

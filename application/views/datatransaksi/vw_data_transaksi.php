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
                                <td><?= $dtt['Nama_karyawan']; ?></td>

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
            <!-- Tabel Total Gaji -->
            <?php if (isset($countGajiByKaryawan)) : ?>
                <div class="table-responsive mb-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Karyawan</th>
                                <th>Jumlah Motor Dicuci</th>
                                <th>Total Gaji</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($countGajiByKaryawan as $result) : ?>
                                <?php
                                // Ambil nama karyawan berdasarkan ID
                                $karyawanId = $result['karyawan'];
                                $karyawan = $this->Data_karyawan_model->getById($karyawanId);
                                ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $karyawan['Nama_karyawan']; ?></td>
                                    <td><?= isset($result['jumlah_motor']) ? $result['jumlah_motor'] : '0'; ?></td>
                                    <td>Rp. <?= number_format($result['total_gaji'], 2); ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-right font-weight-bold">Total Gaji Semua Karyawan</td>
                                <td>Rp. <?= isset($totalGajiSemuaKaryawan) ? number_format($totalGajiSemuaKaryawan, 2) : '0.00'; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right font-weight-bold">Total Tarif</td>
                                <td>Rp. <?= isset($totalTarif) ? number_format($totalTarif, 2) : '0.00'; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-right font-weight-bold">Total Penghasilan Bersih</td>
                                <td>Rp. <?= isset($totalPenghasilanBersih) ? number_format($totalPenghasilanBersih, 2) : '0.00'; ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Admin
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Data_user/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required="">                            
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required="">                            
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="">                            
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required="">                            
                        </div>
                        <div class="form-group">
                            <label for="hp">No. HP</label>
                            <input type="text" name="hp" class="form-control" id="hp" placeholder="No HP" required="">                            
                        </div>
                        <a href="<?= base_url('Data_user') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

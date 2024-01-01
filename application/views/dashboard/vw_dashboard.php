<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fc; /* Ganti warna background sesuai kebutuhan Anda */
        }

        .card {
            width: 300px;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        header {
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="card">
        <header>
            <h1 class="h5 mb-4 text-gray-800">Selamat Datang, <?= $user['nama']; ?></h1>
        </header>
    </div>

    <!-- Konten dashboard lainnya -->

    <script src="<?= base_url('assets/js/main.js'); ?>"></script>
</body>
</html>

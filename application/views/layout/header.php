<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Link Font Awesome Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css" integrity="sha512-tx5+1LWHez1QiaXlAyDwzdBTfDjX07GMapQoFTS74wkcPMsI3So0KYmFe6EHZjI8+eSG0ljBlAQc3PQ5BTaZtQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container-fluid {
            flex: 1;
        }

        .footer {
            margin-top: auto;
        }
    </style>

</head>

<body class="bg-light">
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="<?= site_url('Dashboard/') ?>" class="navbar-brand mx-4 mb-3">
                    <!-- Ganti src sesuai path gambar logo yang baru -->
                    <img src="<?= base_url('assets2/images/logo_Hamra-rem.png'); ?>" alt="Logo" class="img-fluid">
                </a>
                <div class="navbar-nav w-100">
                    <a href="<?= site_url('Dashboard/') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Dashboard') ? 'active' : ''; ?>"><i class="fa-solid fa-house"></i>Dashboard</a>
                    <a href="<?= site_url('Data_karyawan/') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Data_karyawan') ? 'active' : ''; ?>"><i class="fa-solid fa-users-gear"></i>Karyawan</a>
                    <a href="<?= site_url('Data_transaksi/') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Data_transaksi') ? 'active' : ''; ?>"><i class="fa-solid fa-business-time"></i>Transaksi</a>
                    <a href="<?= site_url('Data_type_motor/') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Data_type_motor') ? 'active' : ''; ?>"><i class="fa-solid fa-motorcycle"></i>Type Motor</a>
                    <a href="<?= site_url('Data_user/') ?>" class="nav-item nav-link <?= ($this->uri->segment(1) == 'Data_user') ? 'active' : ''; ?>"><i class="fa-solid fa-users"></i>Data Admin</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class=""></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">


                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa-solid fa-users-line me-lg-2" style="font-size: 1.5rem;"></i>
                            
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>

                </div>
            </nav>
            <!-- Navbar End -->
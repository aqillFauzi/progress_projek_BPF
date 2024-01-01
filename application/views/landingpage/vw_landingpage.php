<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Hamra - MotorCycle Wash</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets2/css/bootstrap.min.css'); ?>">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets2/css/style.css'); ?>">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url('assets2/css/responsive.css'); ?>">
    <!-- fevicon -->
    <link rel="icon" href="assets2/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets2/css/jquery.mCustomScrollbar.min.css'); ?>">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?= base_url('assets2/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets2/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <style>
        .menu_main {
            display: flex;
            align-items: center;
        }

        .menu_main div {
            margin-right: 20px;
            /* Adjust the spacing between menu items */
        }

        .header_buttons {
            display: flex;
            align-items: center;
            margin-right: 20px;
        }

        

        .btn {
            background-color: #008000;
            /* Warna hijau */
            color: #ffffff;
            /* Warna teks putih */
            padding: 10px 15px;
            /* Padding untuk penataan tombol */
            border: none;
            /* Menghilangkan garis batas tombol */
            cursor: pointer;
        }

        .btn:hover {
            background-color: #008000;
            /* Warna hijau yang berbeda saat tombol dihover */
        }

        /* Menyesuaikan gaya teks */
        .banner_taital_1 {
            font-size: large;
            /* Ukuran huruf lebih kecil */
            color: black;
            /* Warna teks hitam */
        }

        .banner_text {
            color: black;
            /* Warna teks hitam */
        }

        /* Menambahkan spasi di antara ikon dan teks pada tombol kontak */
        .contact_padding img {
            margin-right: 10px;
            /* Atur spasi di kanan ikon */
        }
    </style>
</head>

<body>
    <!--header section start -->
    <div id="halaman-index">
        <div class="header_section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-2">
                        <div class="logo"><a href="#halaman-index"><img src="assets2/images/logo_Hamra-rem.png"></a></div>
                    </div>
                    <div class="col-md-9">
                        <div class="menu_text">
                            <ul class="main_menu">
                                <div class="togle_3">
                                    <div class="menu_main">
                                        <div class="padding_left0"><a href="#halaman-index">Home</a></div>
                                        <div class="padding_left0"><a href="#halaman-tentang">Tentang Kami</a></div>
                                    </div>
                                </div>
                            </ul>
                           
                            <div class="header_buttons">
                                
                                <button class="btn" onclick="location.href='<?= base_url('auth'); ?>'">Login</button>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h1 class="banner_taital">Hamra MotorCycle Wash</h1>
                        <h1 class="banner_taital_1">Cuci Motor Tanpa Khawatir</h1>
                        <p class="banner_text">Nikmati kenyamanan mencuci motor tanpa ribet. Hamra hadir untuk memastikan motor Anda selalu dalam kondisi terbaik.</p>
                        <div class="contact_bt"><a href="#informasi-kontak">CONTACT US<span class="contact_padding"><img src="assets2/images/contact-icon.png"></span></a></div>
                    </div>

                    <div class="col-sm-5">
                        <div><img src="assets2/images/logo_1-removebg-preview.png" class="image_1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    </div>
    <!-- header section end -->

    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div><img src="assets2/images/gmbrlogo_02.png" class="image_2"></div>
                </div>

                <div class="col-md-6">
                    <div id="halaman-tentang">
                        <h1 class="services_taital"><span style="color: #1f1f1f">Tentang Kami</span></h1>
                        <p class="ipsum_text">Hamra Motorcycle wash merupakan salah satu bidang usaha yang menawarkan jasa
                            perawatan motor berupa pencucian dan permbersihan motor.
                        </p>
                        <p> - Dijamin Bersih</p>
                        <p> - Dijamin Kilat</p>
                        <p> - Dijamin Wangi</p>
                        <p> - Dijamin Puas</p>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- about section end -->


    <!-- newsletter section start -->
    <div class="newsletter_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="newsletter_text">Informasi Lanjut</h1>
                    <p class="tempor_text">Untuk mengetahui informasi lebih lanjut, silahkan hubungi kontak berikut.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- newsletter section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_main">
                <div id="informasi-kontak">
                    <div class="footer_left">
                        <h1 class="contact_taital"><span>Contact </span><span>Us</span></h1>
                    </div>
                    <div class="footer_left">
                        <div class="location_text">
                            <a href="#">
                                <img src="assets2/images/call-icon.png">
                                <span class="padding_left_15">+628197600016</span>

                            </a>
                        </div>
                    </div>
                    <div class="footer_left">
                        <div class="location_text">
                            <a href="#">


                                <span class="operational_hours">Waktu Operasional Senin - Minggu 07:30 - 17:00</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="map_main">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1005.3014476340032!2d101.48652887238934!3d0.5161435183404889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5add63db153b5%3A0xdd5d9b19575d8329!2sHamra%20MJ%20d&#39;car%20wash!5e0!3m2!1sen!2sid!4v1703919543001!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2024 All Right Reserved </p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="<?= base_url('assets2/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets2/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets2/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets2/js/jquery-3.0.0.min.js'); ?>"></script>
    <script src="<?= base_url('assets2/js/plugin.js'); ?>"></script>
    <!-- sidebar -->
    <script src="<?= base_url('assets2/js/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <script src="<?= base_url('assets2/js/custom.js'); ?>"></script>
    <!-- javascript -->
    <script src="<?= base_url('assets2/js/owl.carousel.js'); ?>"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</body>

</html>
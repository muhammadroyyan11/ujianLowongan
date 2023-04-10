<!DOCTYPE html>
<html lang="en">

<head>
    <title>KOPI KOOPEN - <?= strtoupper($title) ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="content-language" content="id-id">
    <meta name="description" content="Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen Kedai Kopi Koopen ">

    <meta name="keyword" content="toko kopi koopen, kopi koopen, Kedai kopi koopen, koopen malang">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/frontend/client/images/icons/koopen.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/assets/frontend/css/share.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/css/social-button.css">
    <!-- <link href="assets/frontend/css/font-awesome.min.css" rel="stylesheet"> -->
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">
                <div class="topbar-social">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div>

                <span class="topbar-child1">
                    KOPI DARI MALANG
                </span>

                <div class="topbar-child2">
                    <span class="topbar-email">
                        info@kopikoopen.com
                    </span>
                </div>
            </div>

            <div class="wrap_header">
                <!-- Logo -->
                <a href="<?= site_url('home') ?>" class="logo">
                    <img src="<?= base_url() ?>assets/img/logo_nav.png" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="wrap_menu">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="<?= site_url('home') ?>">Home</a>
                            </li>

                            <li>
                                <a href="<?= site_url('shop') ?>">Shop</a>
                            </li>

                            <li>
                                <a href="<?= site_url('event') ?>">New Event</a>
                            </li>

                            <li>
                                <a href="<?= site_url('outlet') ?>">Outlet</a>
                            </li>

                            <li>
                                <a href="<?= site_url('blog') ?>">Blog</a>
                            </li>

                            <li>
                                <a href="<?= site_url('about') ?>">About</a>
                            </li>

                            <li>
                                <a href="<?= site_url('contact') ?>">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="<?= site_url('home') ?>" class="logo-mobile">
                <img src="<?= base_url() ?>assets/img/logo_nav.png" alt="IMG-LOGO">
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu">
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <span class="topbar-child1">
                            Free shipping for standard order over $100
                        </span>
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
                            <span class="topbar-email">
                                fashe@example.com
                            </span>


                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('home') ?>">Home</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('shop') ?>">Shop</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('outlet') ?>">Outlet</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('blog') ?>">Blog</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('about') ?>">About</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('contact') ?>">contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <?= $contents ?>


    <!-- Footer -->
    <!-- <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    Alamat
                </h4>

                <div>
                    <p class="s-text7 w-size27" align="justify">
                        Koopen Klojen :Toko A1, Jl. Trunojoyo, Klojen Sebelah utara stasiun malang kota baru Pojok perampatan, Kota Malang, Jawa Timur 65111<br><br>
                        Koopen Ijen : Jl. Ijen No.90-92, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65116
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="https://www.facebook.com/profile.php?id=100054488229059" class="fs-18 color1 p-r-20 fa fa-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/koopen_klojen/" class="fs-18 color1 p-r-20 fa fa-instagram" target="_blank"></a>
                    </div>
                </div>
            </div>

            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    TENTANG KAMI
                </h4>

                <div>
                    <p class="s-text7 w-size27" align="justify">
                        Nama toko ini diambil dari bahasa Belanda “Koopen” yang artinya membeli. Alasan pemilik toko memberi nama dengan bahasa Belanda, karena Malang memiliki kaitan sejarah yang erat dengan Belanda pada masanya. Bahkan sampai saat ini banyak pengunjung dari negeri Belanda yang tertarik untuk merasakan kenikmatan kopi lokal sambil menikmati keindahan Kota Malang.
                    </p>
                </div>
            </div>

            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    HUBUNGI KAMI
                </h4>

                <div>

                    <p class="s-text7 w-size27">
                        <i class="fs-18 color1 p-r-20 fa fa-clock-o"></i>Senin - Minggu (07.00 - 23.00), Jumat (13.00 - 23.00)<br>
                        <i class="fs-18 color1 p-r-20 fa fa-phone"> </i> 0838-3437-6927 (Klojen) - 0822-2942-7153 (Ijen) <br>
                        <i class="fs-18 color1 p-r-20 fa fa-envelope"></i> tokokopi@kopikoopen.com

                    </p>
                </div>
            </div>

        </div> -->

    <div class="t-center p-l-15 p-r-15">
        <div class="t-center s-text8 p-t-20">
            Copyright © 2022 All rights reserved.
        </div>
    </div>
    </footer>



    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>



    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(".selection-1").select2({
            minimumResultsForSearch: 20,
            dropdownParent: $('#dropDownSelect1')
        });
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/js/slick-custom.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="<?= base_url() ?>assets/frontend/client/vendor/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
        // $('.block2-btn-addcart').each(function() {
        //     var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        //     $(this).on('click', function() {
        //         swal(nameProduct, "is added to cart !", "success");
        //     });
        // });

        $('.block2-btn-addwishlist').each(function() {
            var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
            $(this).on('click', function() {
                swal(nameProduct, "is added to wishlist !", "success");
            });
        });
    </script>

    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/frontend/client/js/main.js"></script>


</body>

</html>
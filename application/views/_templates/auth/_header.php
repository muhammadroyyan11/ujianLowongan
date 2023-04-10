<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.png" type="image/x-icon" />
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/mystyle.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">


    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/client/css/main3.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?= base_url() ?>assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
</head>

<body class="hold-transition login-page">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">

            </div>

            <div class="wrap_header">
                <!-- Logo -->
                <a href="<?= site_url('home') ?>" class="logo">
                    <img src="<?= base_url() ?>assets/img/logo_nav.png" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="wrap_menu pull-left">
                    <nav class="menu">
                        <ul class="main_menu">
                            <li>
                                <a href="<?= site_url('home') ?>"><b>Register</b></a>
                            </li>

                            <li>
                                <a href="<?= site_url('shop') ?>"><b>Login</b></a>
                            </li>
                            <!-- 
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
                            </li> -->
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

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('home') ?>"><b>Register</b></a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="<?= site_url('home') ?>"><b>Login</b></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
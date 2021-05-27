<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> We-Care</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?= base_url('Assets/modular-admin/dist/')?>css/vendor.css">
        <link rel="stylesheet" href="<?= base_url('Assets/modular-admin/dist/')?>css/app.css">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/fh-3.1.8/sl-1.3.3/datatables.min.css"/>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </head>
    <body>
        <div class="main-wrapper">
            <div class="app" id="app">
                <header class="header">
                    <div class="header-block header-block-collapse d-lg-none d-xl-none">
                        <button class="collapse-btn" id="sidebar-collapse-btn">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <div class="header-block header-block-nav">
                        <ul class="nav-profile">
                            <li class="profile dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="name"><?= $user['name-user'];?></span>
                                </a>
                                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="#">
                                        <i class="fa fa-user icon"></i> Profile </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('Auth_c/Logout')?>">
                                        <i class="fa fa-power-off icon"></i> Logout </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </header>

                <aside class="sidebar">
                    <div class="sidebar-container">
                        <div class="sidebar-header">
                            <div class="brand">
                                We-Care
                            </div>
                        </div>
                        <nav class="menu">
                            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                                <li <?php if($title == 'Dashboard'):?> class="active"<?php endif;?>>
                                    <a href="<?= base_url('Pages/Dashboard_c')?>">
                                        <i class="fa fa-home"></i> Dashboard </a>
                                </li>
                                <li <?php if($title == 'Profile'):?> class="active"<?php endif;?>>
                                    <a href="<?= base_url('Pages/Profile_c')?>">
                                        <i class="fa fa-user"></i> Profile </a>
                                </li>

                                <li <?php if($title == 'Data Users'):?> class="active"<?php endif;?>>
                                    <a href="<?= base_url('Pages/Data_users_c')?>">
                                        <i class="fa fa-users"></i> Data Users </a>
                                </li>

                                <li <?php if($title == 'Data Pengaduan'):?> class="active"<?php endif;?>>
                                    <a href="<?= base_url('Pages/Data_pengaduan_c')?>">
                                        <i class="fa fa-book"></i> Data Pengaduan</a>
                                </li>

                                <li>
                                    <a href="">
                                        <i class="fa fa-th-large"></i> Items Manager <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="items-list.html"> Items List </a>
                                        </li>
                                        <li>
                                            <a href="item-editor.html"> Item Editor </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
       
                </aside>
                <div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>

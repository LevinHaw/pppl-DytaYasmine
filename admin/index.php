﻿<?php
error_reporting(0);
session_start();


include "page/koneksi.php";
include "function.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> DYTA Rujak Serut </title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"> DYTA Yasmin </a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                <?php echo date('d F Y'); ?> &nbsp;
                <a href="logout.php" class="btn btn-danger square-btn-adjust"> Logout </a>
            </div>
        </nav>
        <!-- NAV SIDE ADMIN -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/Logo.png" class="user-image img-responsive" />
                    </li>
                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-home fa-2x"></i> Dashboard </a>
                    </li>
                    <li>
                        <a href="?page=pengguna&aksi="><i class="fa fa-user fa-2x"></i> Data Admin </a>
                    </li>
                    <li>
                        <a href="?page=artikel&aksi="><i class="fa fa-user fa-2x"></i> Data Artikel </a>
                    </li>
                    <li>
                        <a href="?page=galeri&aksi="><i class="fa fa-user fa-2x"></i> Data Galeri </a>
                    </li>
                    <li>
                        <a href="?page=produk&aksi="><i class="fa fa-user fa-2x"></i> Data Produk </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /NAV SIDE ADMIN/ -->

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        // $kursus = $_GET['kursus'];
                        
                        $page = '';
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = '';
                        }

                        $aksi = '';
                        if (isset($_GET['aksi'])) {
                            $aksi = $_GET['aksi'];
                        } else {
                            $aksi = '';
                        }

                        if ($page == "pengguna") {
                            if ($aksi == "" || $aksi == "cancel") {
                                include "page/pengguna/pengguna.php";
                            } elseif ($aksi == "tambah") {
                                include "page/pengguna/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "page/pengguna/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "page/pengguna/hapus.php";
                            }
                        } elseif ($page == "artikel") {
                            if ($aksi == "" || $aksi == "cancel") {
                                include "page/artikel/artikel.php";
                            } elseif ($aksi == "tambah") {
                                include "page/artikel/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "page/artikel/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "page/artikel/hapus.php";
                            }
                        } elseif ($page == "galeri") {
                            if ($aksi == "" || $aksi == "cancel") {
                                include "page/galeri/galeri.php";
                            } elseif ($aksi == "tambah") {
                                include "page/galeri/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "page/galeri/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "page/galeri/hapus.php";
                            }
                        } elseif ($page == "produk") {
                            if ($aksi == "" || $aksi == "cancel") {
                                include "page/produk/produk.php";
                            } elseif ($aksi == "tambah") {
                                include "page/produk/tambah.php";
                            } elseif ($aksi == "ubah") {
                                include "page/produk/ubah.php";
                            } elseif ($aksi == "hapus") {
                                include "page/produk/hapus.php";
                            }
                        } elseif ($page == "") {
                            include "home.php";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>

</html>

<?php
// } else {
// header("location:login.php");
// }
?>
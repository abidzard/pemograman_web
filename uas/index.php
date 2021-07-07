<?php

    session_start();
    if (isset($_SESSION['level']) == "") {
         header("Location: login.php");
    }

    include "get_databarang.php";
    include "get_datacart.php";

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home | GagdetTech!</title>

    <!-- Bootstrap -->
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/styles.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    
</head>
<body>
<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="index.php">GagdetTech!</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user">
                                </i> Halo, <?= $_SESSION['username']?> <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="#">Profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="index.php">Utama</a>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3" id="sidebar">
                <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                    <li class="active">
                        <a href="index.php"><i class="icon-chevron-right"></i> Utama</a>
                    </li>
                    <li>
                        <a href="daftar_barang.php"><i class="icon-chevron-right"></i> Daftar Barang</a>
                    </li>
                    <li>
                        <a href="cart.php"><span class="icon-chevron-right"></span> Keranjang</a>
                    </li>
                    
                </ul>
            </div>
            
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Produk Baru</div>
                            <div class="pull-right"><span class="badge badge-info">4</span></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="row-fluid padd-bottom">
                                <div class="span3">
                                    <a href="#" class="thumbnail">
                                    <img alt="260x180" style="width: 260px; height: 180px;" src="img/1.png">
                                    </a>
                                </div>
                                <div class="span3">
                                    <a href="#" class="thumbnail">
                                    <img alt="260x180" style="width: 260px; height: 180px;" src="img/2.png">
                                    </a>
                                </div>
                                <div class="span3">
                                    <a href="#" class="thumbnail">
                                    <img alt="260x180" style="width: 260px; height: 180px;" src="img/3.png">
                                    </a>
                                </div>
                                <div class="span3">
                                    <a href="#" class="thumbnail">
                                    <img alt="260x180" style="width: 260px; height: 180px;" src="img/4.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -->
                <div class="row-fluid">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Daftar Barang</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Produk</th>
                                        <th>Harga Produk</th>
                                        <th>Stok</th>
                                    </tr>
                                    </thead>
                                    <?php while($data = mysqli_fetch_assoc($proses_barang)){ ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td>Rp <?php echo $data['harga']; ?></td>
                                        <td><?php echo $data['stok']; ?></td>
                                    </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -->
                <div class="row-fluid">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Keranjang</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="daftar_barang.php"><button class="btn btn-success"><i class="icon-plus icon-white"></i> Tambah Produk </button></a>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button data-toggle="dropdown" class="btn dropdown-toggle">Cetak <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        <li><a href="#">Cetak ke PDF</a></li>
                                        <li><a href="#">Ekspor ke Excel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                    <thead>
                                        <tr>
                                            <th>ID Produk</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <?php while($datacart = mysqli_fetch_assoc($proses_cart)){ ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $datacart['id_cart']; ?></td>
                                            <td><?php echo $datacart['nama_produk']; ?></td>
                                            <td>Rp <?php echo $datacart['harga_produk']; ?></td>
                                            <td><?php echo $datacart['qty']; ?></td>
                                            <td>
                                                <a href="del_datacart.php?id_cart=<?php echo $datacart['id_cart']; ?>">
                                                    <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Hapus</button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                    <thead>
                                        <tr>
                                            <th>Total Bayar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Rp. <?php echo $datacart['total_harga']; ?> ,-</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.fluid-container-->
    <script src="/pemograman_web/lib/vendors/jquery-1.9.1.min.js"></script>
        <script src="/pemograman_web/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="/pemograman_web/lib/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="/pemograman_web/lib/assets/scripts.js"></script>
        <script src="/pemograman_web/lib/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>      
</body>
</html>
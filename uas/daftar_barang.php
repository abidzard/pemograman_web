<?php

    session_start();
    if (isset($_SESSION['level']) == "") {
         header("Location: login.php");
    }

    include "get_databarang.php";

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Barang | GagdetTech!</title>

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
                                </i>  Halo, <?= $_SESSION['username']?> <i class="caret"></i>
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
                        <li>
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
                    <li>
                        <a href="index.php"><i class="icon-chevron-right"></i> Utama</a>
                    </li>
                    <li class="active">
                        <a href="daftar_barang.php"><i class="icon-chevron-right"></i> Daftar Barang</a>
                    </li>
                    <li>
                        <a href="cart.php"><span class="icon-chevron-right"></span> Keranjang</a>
                    </li>
                    
                </ul>
            </div>
            
            <div class="span9" id="content">
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
                                        <th>Tindakan</th>
                                    </tr>
                                    </thead>
                                    <?php while($data = mysqli_fetch_assoc($proses_barang)){ ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td>Rp <?php echo $data['harga']; ?></td>
                                        <td><?php echo $data['stok']; ?></td>
                                        <td>
                                            <!-- Trigger the modal with a button -->
                                                <a href="daftar_barang.php?id=<?php echo $data['id']; ?>">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="icon-plus icon-white"></i> Keranjang</button>
                                                </a>
                                            <!-- Modal -->
                                            <div id="myModal" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Masukan Keranjang</h4>
                                                        </div>
                                                        <form class="form-horizontal" action="input_cart.php" method="POST">
                                                            <fieldset>
                                                            <div class="modal-body">
                                                            <?php //while($) ?>
                                                                <div class="control-group">
                                                                    <label class="control-label" for="pid">ID Produk</label>
                                                                    <div class="controls">
                                                                        <input class="input-xlarge focused" type="text" name="pid" value="<?php if($data != null) echo $data['id']; ?>"\ readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="control-group">
                                                                    <label class="control-label" for="nama">Nama Produk</label>
                                                                    <div class="controls">
                                                                        <input class="input-xlarge focused" type="text" name="nama" value="<?php if($data != null) echo $data['nama']; ?>"\ readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label class="control-label" for="harga">Harga (Rp)</label>
                                                                    <div class="controls">
                                                                        <input class="input-xlarge focused" type="text" name="harga" value="<?php if($data != null) echo $data['harga']; ?>"\ readonly>
                                                                    </div>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label class="control-label" for="qty">Jumlah Beli</label>
                                                                    <div class="controls">
                                                                        <input class="input-xlarge focused" type="number" name="qty" min="1" max="<?=$data['stok']?>" value="1"\ required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button name="submit" class="btn btn-primary">Tambahkan</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
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
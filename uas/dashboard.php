<?php

    session_start();
    if (isset($_SESSION['level']) == "") {
        header("Location: login.php");
    }

    include "get_databarang.php";
    include "get_datauser.php";

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dasboard | GagdetTech!</title>

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
                            <a href="dashboard.php">Dashboard</a>
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
                        <a href="dasboard.php"><i class="icon-chevron-right"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="data_barang.php"><i class="icon-chevron-right"></i> Data Barang</a>
                    </li>
                    <li>
                        <a href="data_user.php"><span class="icon-chevron-right"></span> Pengguna  </a>
                    </li>
                </ul>
            </div>
            
            <div class="span9" id="content">
                <!-- block -->
                <div class="row-fluid">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Data Barang</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="icon-plus icon-white"></i> Tambah Produk</button>
                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Tambahkan Barang</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="input_barang.php" method="POST">
                                                        <fieldset>
                                                        <div class="modal-body">
                                                            <div class="control-group">
                                                                <label class="control-label" for="nama">Nama Produk</label>
                                                                <div class="controls">
                                                                    <input class="input-xlarge focused" type="text" name="nama" value=""\>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label" for="harga">Harga</label>
                                                                <div class="controls">
                                                                    <input class="input-xlarge focused" type="text" name="harga" value=""\>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label" for="stok">Jumlah Stok</label>
                                                                <div class="controls">
                                                                    <input class="input-xlarge focused" type="text" name="stok" value=""\>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="submit" class="btn btn-primary">Masukan</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                                            <th>Stok</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php while($data_barang = mysqli_fetch_assoc($proses_barang)){ ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data_barang['id']; ?></td>
                                            <td><?php echo $data_barang['nama']; ?></td>
                                            <td>Rp <?php echo $data_barang['harga']; ?></td>
                                            <td><?php echo $data_barang['stok']; ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Data Pengguna</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <!-- Trigger the modal with a button -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1"><i class="icon-plus icon-white"></i> Tambah Pengguna</button>
                                        <!-- Modal -->
                                        <div id="myModal1" class="modal fade" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Tambahkan Pengguna</h4>
                                                    </div>
                                                    <form class="form-horizontal" action="input_user.php" method="POST">
                                                        <fieldset>
                                                        <div class="modal-body">
                                                            <<div class="control-group">
                                                                <label class="control-label" for="nama">Nama Lengkap</label>
                                                                <div class="controls">
                                                                    <input class="input-xlarge focused" type="text" name="nama" value=""\>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                                <label class="control-label" for="username">Nama Pengguna</label>
                                                                <div class="controls">
                                                                    <input class="input-xlarge focused" type="text" name="username" value=""\>
                                                                </div>
                                                            </div>

                                                            <div class="control-group">
                                                            <label class="control-label" for="level">Tingkatan</label>
                                                                    <div class="controls">
                                                                        <select class="form-select input-xlarge focused" aria-label="Default select example" name="level" value=""\>
                                                                            <option>Pilih Level</option>
                                                                            <option value="Admin">Admin</option>
                                                                            <option value="User">User</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button name="submit" class="btn btn-primary">Masukan</button>
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Level</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        while($data_user = mysqli_fetch_assoc($proses_user)){
                                    ?>

                                    <tr>
                                        <td><?php echo $data_user['id']; ?></td>
                                        <td><?php echo $data_user['nama']; ?></td>
                                        <td><?php echo $data_user['username']; ?></td>
                                        <td><?php echo $data_user['level']; ?></td>
                                    </tr>
                                    
                                    <?php
                                        }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
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
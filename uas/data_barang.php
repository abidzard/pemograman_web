<?php

    session_start();
    if (isset($_SESSION['level']) == "") {
        header("Location: login.php");
    }

    include "get_databarang.php";
    include "edit_databarang.php";

    $data_editbarang = mysqli_fetch_assoc($get_process_barang);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Barang | GagdetTech!</title>

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
                                    <a tabindex="-1" href="login.html">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li>
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
            <!-- Sidebar -->
            <div class="span3" id="sidebar">
                <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                    <li>
                        <a href="dashboard.php"><i class="icon-chevron-right"></i> Dashboard</a>
                    </li>
                    <li class="active">
                        <a href="data_barang.php"><i class="icon-chevron-right"></i> Data Barang</a>
                    </li>
                    <li>
                        <a href="data_user.php"><span class="icon-chevron-right"></span> Pengguna</a>
                    </li>
                </ul>
            </div>

            <!-- Konten -->
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- Block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Masukan Data Barang</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                            <?php if (isset($_GET['id'])) { ?>
                                <form class="form-horizontal" action="edit_databarang.php?id=<?php echo $data_editbarang['id']; ?>&update=1" method="POST">
                            <?php } else { ?>
                                <form class="form-horizontal" action="input_barang.php" method="POST">
                            <?php } ?>
                                    <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="nama">Nama Produk</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="nama" value="<?php if($data_editbarang != null) echo $data_editbarang['nama']; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="harga">Harga</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="harga" value="<?php if($data_editbarang != null) echo $data_editbarang['harga']; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="stok">Jumlah Stok</label>
                                        <div class="controls">
                                            <input class="input-xlarge focused" type="text" name="stok" value="<?php if($data_editbarang != null) echo $data_editbarang['stok']; ?>">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for=""></label>
                                        <div class="controls">
                                            <button name="submit" class="btn btn-primary">Masukan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- block -->
                <div class="row-fluid">
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Data Barang</div>
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
                                    <tbody>
                                    <?php while($data_barang = mysqli_fetch_assoc($proses_barang)){ ?>
                                        <tr>
                                            <td><?php echo $data_barang['id']; ?></td>
                                            <td><?php echo $data_barang['nama']; ?></td>
                                            <td>Rp <?php echo $data_barang['harga']; ?></td>
                                            <td><?php echo $data_barang['stok']; ?></td>
                                            <td>
                                                <a href="data_barang.php?id=<?php echo $data_barang['id']; ?>">
                                                    <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Ubah</button>
                                                </a>
                                                <a href="del_databarang.php?id=<?php echo $data_barang['id']; ?>">
                                                    <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Hapus</button>
                                                </a>
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
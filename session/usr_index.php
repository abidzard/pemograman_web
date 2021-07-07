<?php

    session_start();
    if (isset($_SESSION['level']) == "") {
        header("Location: login.php");
    }

    include "get_data.php";
    include "edit_data.php";

    $data_edit = mysqli_fetch_array($get_process);
    $dataskill = explode(',', $data_edit['skill']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/styles.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
    <script src="/pemograman_web/lib/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="usr_index.php">Admin Panel</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="logout.php" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Halo, <?= $_SESSION['username']?> <i class="caret"></i>

                            </a>
                            <ul class="dropdown-menu">
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="login.html">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="active">
                            <a href="usr_index.php">Dashboard</a>
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
                        <a href="usr_index.php"><i class="icon-chevron-right"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="usr_index.php"><i class="icon-chevron-right"></i> Data Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="span9" id="content">
                <!-- morris stacked chart -->
                <div class="row-fluid">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Halo!</h4>
                        Selamat datang, <?= $_SESSION['username']?><br>
                        Anda berada di halaman <?= $_SESSION['level']?>
                    </div>
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Data Mahasiswa</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>NPM</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Program Studi</th>
                                        <th>Gender</th>
                                        <th>Kemampuan</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        while($data = mysqli_fetch_assoc($proses)){
                                    ?>

                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['nama_mhs']; ?></td>
                                        <td><?php echo $data['prodi']; ?></td>
                                        <td><?php echo $data['jk']; ?></td>
                                        <td><?php echo $data['skill']; ?></td>
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
    </div>                      
</body>
</html>
<?php

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
                <a class="brand" href="#">Admin Panel</a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

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
                            <a href="index.php">Dashboard</a>
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
                        <a href="index.php"><i class="icon-chevron-right"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="list_data.php"><i class="icon-chevron-right"></i> Data Mahasiswa</a>
                    </li>
                    <li>
                        <a href="input_data.php"><span class="icon-chevron-right"></span> Input Data</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-info pull-right">11</span> Reports</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-important pull-right">83</span> Errors</a>
                    </li>
                    <li>
                        <a href="#"><span class="badge badge-warning pull-right">4,231</span> Logs</a>
                    </li>
                </ul>
            </div>
            <div class="span9" id="content">
                <!-- morris stacked chart -->
                <div class="row-fluid">
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
                                        <th>Tindakan</th>
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
                                        <td>
                                            <a href="form_bootstrap.php?id=<?php echo $data['id']; ?>">
                                                <button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Ubah</button>
                                            </a>
                                            <a href="del_data.php?id=<?php echo $data['id']; ?>">
                                                <button class="btn btn-danger"><i class="icon-remove icon-white"></i> Hapus</button>
                                            </a>
                                        </td>
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
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
    <title>Latihan Form Bootstrap</title>
    
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/styles.css" rel="stylesheet" media="screen">
    <script src="/pemograman_web/lib/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>CRUD Bootstrap/PHP</h1>
        <p>Latihan form php dengan menggunakan Bootstrap Template</p>
    </div>
    <br>
    <br>
    <br>

    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Data Mahasiswa</div>
                </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <?php 
                                if(isset($_GET['id'])) {
                            ?>
                                <form class="form-horizontal" action="edit_data.php?id=<?php echo $data_edit['id'] ?>&update=1" method="POST">
                            <?php 
                                }else {
                            ?>
                                <form class="form-horizontal" action="proses_input.php" method="POST">
                            <?php 
                                }
                            ?>
                            
                                <fieldset>
                                <legend>Data Mahasiswa</legend>
                                <div class="control-group">
                                    <label class="control-label" for="id">NPM</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" type="text" name="id" value="<?php if($data_edit != null) echo $data_edit['id']; ?>"\>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="nama">Nama</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" type="text" name="nama" value="<?php if($data_edit != null) echo $data_edit['nama_mhs']; ?>">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="prodi">Program Studi</label>
                                    <div class="controls">
                                        <select class="form-select input-xlarge focused" aria-label="Default select example" name="prodi" value="<?php if($data_edit != null) echo $data_edit['prodi']; ?>" >
                                            <option <?php if($data_edit['id'] !="" && $data_edit['prodi']=="") echo "selected"; ?>>Pilih Prodi</option>
                                            <option value="S1 - Teknik Informatika" <?php if ($data_edit['id'] != "" && $data_edit['prodi'] == "S1 - Teknik Informatika") echo "selected"; ?>>S1 - Teknik Informatika</option>
                                            <option value="S1 - Sistem Informasi" <?php if ($data_edit['id'] != "" && $data_edit['prodi'] == "S1 - Sistem Informasi") echo "selected"; ?>>S1 - Sistem Informasi</option>
                                            <option value="D4 - Teknik Komputer" <?php if ($data_edit['id'] != "" && $data_edit['prodi'] == "D4 - Teknik Komputer") echo "selected"; ?>>D4 - Teknik Komputer</option>
                                            <option value="D4 - Sistem Informasi Manajemen" <?php if($data_edit['id'] !="" && $data_edit['prodi']=="D4 - Sistem Informasi Manajemen") echo "selected"; ?>>D4 - Sistem Informasi Manajemen</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="jk">Gender</label>
                                    <div class="controls">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki" <?php if ($data_edit != null) if ($data_edit['jk'] == "Laki-laki" ) echo "checked"; ?>>
                                            <label class="label" for="flexRadioDefault1">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" <?php if ($data_edit != null) if ($data_edit['jk'] == "Perempuan" ) echo "checked"; ?>>
                                            <label class="label" for="flexRadioDefault2">
                                                Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="skill">Kemampuan</label>
                                    <div class="controls">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="Programming" <?php if ($data_edit != null) if (in_array("Programming", $dataskill)) echo "checked"; ?>>
                                            <label class="label" for="flexCheckChecked">
                                                Programming
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="Networking" <?php if ($data_edit != null) if (in_array("Networking", $dataskill)) echo "checked"; ?>>
                                            <label class="label" for="flexCheckChecked">
                                                Networking
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="skill[]" value="Multimedia" <?php if ($data_edit != null) if (in_array("Multimedia", $dataskill)) echo "checked"; ?>>
                                            <label class="label" for="flexCheckChecked">
                                                Multimedia
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="control-group">
                                    <label class="control-label" for=""></label>
                                    <div class="controls">
                                        <button name="submit" class="btn btn-primary">Input</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>

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
</body>
</html>
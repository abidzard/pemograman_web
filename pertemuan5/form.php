<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    
    <!-- <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="lib/assets/styles.css" rel="stylesheet" media="screen">
    <script src="lib/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Latihan Form PHP - Bootstrap</h1>
        <p>Latihan form php dengan menggunakan Bootstrap Template</p>
    </div>
    <br>
    <br>
    <br>
    <div>
        <form action="proses_form.php" method="POST">
            <table align="center">
                <tr>
                    <td>NPM</td>
                    <td><input type="text" name="npm" value=""\></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value=""\></td>
                </tr>
                <tr>
                    <td>Nilai</td>
                    <td><input type="text" name="nilai" value=""\></td>
                </tr>
                <tr>
                    <td>Ulangi</td>
                    <td><input type="text" name="loop" value=""\></td>
                </tr>
                <tr>
                    <td> </td>
                    <td><button type="submit" name="submit">INPUT</button></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="span9" id="content">
        <!-- morris stacked chart -->
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Input Nilai Mahasiswa</div>
                </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form class="form-horizontal" action="proses_form.php" method="POST">
                                <fieldset>
                                <legend>Nilai Mahasiswa</legend>

                                <div class="control-group">
                                    <label class="control-label" for="npm">NPM</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="npm" type="text" name="npm" value=""\>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="nama">Nama</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="nama" type="text" name="nama" value=""\>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="nilai">Nilai</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="nilai" type="text" name="nilai" value=""\>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="loop">Ulangi</label>
                                    <div class="controls">
                                        <input class="input-xlarge focused" id="loop" type="text" name="loop" value=""\>
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
    </div>                           
</body>
</html>
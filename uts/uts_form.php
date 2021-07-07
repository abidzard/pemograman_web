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
    <div>
        <form action="uts_form.php" method="POST">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value=""\></td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td><input type="text" name="npm" value=""\></td>
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
</body>
</html>

<?php
    error_reporting(0);
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$loop = $_POST['loop'];

if($nama){
    echo '<br>Nama : ' ,$nama;
    echo '<br>NPM : ' .$npm;
    echo '<br>';
    for($i = 0; $i <= $loop; $i++){
        for($j = 0; $j < $i; $j++){
            echo '<img src="jett.gif" alt="">   ';
        }
        echo '<br>';
    }

}

?>
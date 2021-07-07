<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas PHP</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Latihan PHP Syntax</h1>
        <p>Latihan syntax PHP dengan percabangan</p>
    </div>
    <div style=" text-align:center"> 
        <?php
            $nama = "Otsuka Sae";
            $nama1 = "Abidzard";
            $pekerjaan = "Gitaris";
            $pekerjaan1 = "Mahasiswa";
            $pic = TRUE;

            echo "Halo ".$nama."!<br> Saya ".$nama1.", selamat datang di website kami 😆. <br><br>";

            if ($nama == "Otsuka Sae") {
                if ($pekerjaan == "Gitaris") {
                    $jk = "Perempuan";
                    $gaji = 12000000; 
                    if ($pic == TRUE) {
                        echo '<img src="img/otae1.gif" alt="">';
                    }
                } else {
                    $jk = "Perempuan";
                    $gaji = "4000000";
                    if ($pic == TRUE) {
                        echo '<img src="img/otae2.jpg" alt="">';
                    }
                }
            } elseif ($nama == $nama1) {
                $jk = "Laki-laki";
                $pekerjaan = $pekerjaan1;
                $gaji = "< 300000";
                if ($pic == TRUE) {
                    echo '<img src="img/abi.jpg" width="180px" alt="">';
                }
            } else {
                $jk = "??";
            }
            
            echo "<br><br>Nama kamu ".$nama.", kamu ".$jk.", kamu seorang ".$pekerjaan.", penghasilan kamu ".$gaji;
        ?>
    </div>
</body>
</html>
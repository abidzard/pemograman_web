<?php
    $nama = "Putri";
    $nama1 = "Abidzard";
    $pekerjaan = "Dosen";
    $pekerjaan1 = "Sys. Admin";

    echo "Hello ".$nama."<br> Saya ".$nama1.", selamat datang di website kami.";

    if ($nama == "Putri") {
        if ($pekerjaan == "Dosen") {
            $jk = "Perempuan";
            $gaji = 12000000;   
        } else {
            $jk = "Perempuan";
            $gaji = "4000000";
        }
    } elseif ($nama == $nama1) {
        $jk = "Laki-laki";
        $pekerjaan = $pekerjaan1;
        $gaji = 50000000;
    } else {
        $jk = "??";
    }
    
    echo "<br><br>Hallo ".$nama." kamu ".$jk.", pekerjaan kamu ".$pekerjaan.", penghasilan kamu ".$gaji;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    
</body>
</html>
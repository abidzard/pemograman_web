<?php

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $loop = $_POST['loop'];

    if ($nilai >= 85) {
        $mutu = 'A';
    } elseif ($nilai >= 75) {
        $mutu = 'B';
    } elseif ($nilai >= 65) {
        $mutu = 'C';
    } elseif ($nilai >= 50) {
        $mutu = 'D';
    } else {
        $mutu = 'E';
    }

    for ($i=0; $i < $loop ; $i++) { 
        //echo "<script>alert('".$npm. " | Nama  : " .$nama. " | Nilai : " .$mutu."') </script>";
        echo "NPM : " .$npm. " | Nama  : " .$nama. " | Nilai : " .$mutu. "<br>";
    }

    echo '<br><a href="/pemograman_web/pertemuan5/form.php">Kembali</a><br>';
    
?>
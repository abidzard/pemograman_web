<?php

    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $loop = $_POST['loop'];

    echo "Nama : " .$nama. "<br>";
    echo "NPM : " .$npm. "<br>";

    for ($i = 0; $i <= $loop ; $i++) {
        for ($j = 0; $j < $i; $j++){
            echo '<img src="jett.gif" alt="">';
        }

        echo "<br>";
    }

    echo '<br><a href="uts_form.php">Kembali</a><br>';
    
?>
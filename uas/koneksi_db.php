<?php

    $hostname       = "127.0.0.1";
    $user_database  = "root";
    $password       = "";
    $nama_database  = "g_tech";

    $koneksi = mysqli_connect($hostname, $user_database, $password, $nama_database) or die (mysqli_error(die));

?>
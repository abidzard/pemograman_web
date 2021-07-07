<?php

    include "koneksi_db.php";

    $proses_cart = mysqli_query($koneksi, "SELECT * FROM cart") or die (mysqli_error($koneksi));

?>
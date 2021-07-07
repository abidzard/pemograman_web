<?php

    include "koneksi_db.php";

    $proses_barang = mysqli_query($koneksi, "SELECT * FROM produk") or die (mysqli_error($koneksi));

?>
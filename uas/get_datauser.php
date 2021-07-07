<?php

    include "koneksi_db.php";

    $proses_user = mysqli_query($koneksi, "SELECT * FROM user") or die (mysqli_error($koneksi));

?>
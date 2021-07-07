<?php

    include "koneksi_db.php";

    $id = $_GET['id'];

    $proses_del_barang = mysqli_query($koneksi, "DELETE FROM produk WHERE id = $id")
                or die (mysqli_error($koneksi));

    if ($proses_del_barang) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='/pemograman_web/uas/data_barang.php'</script>";
    } else echo "<script>alert('Data gagal dihapus!'); window.location.href='/pemograman_web/uas/data_barang.php'</script>";

?>
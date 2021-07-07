<?php
    include "koneksi_db.php";

    $nama   = $_POST['nama'];
    $harga  = $_POST['harga'];
    $stok = $_POST['stok'];

    $proses = mysqli_query($koneksi, "INSERT INTO produk (nama, harga, stok) values ('$nama', '$harga', '$stok')") or die (mysqli_error($koneksi));

    if ($proses) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/uas/data_barang.php'</script>";
    } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/uas/data_barang.php'</script>";
?>
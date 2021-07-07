<?php

    include "koneksi_db.php";

    $id = isset($_GET['id'])?$_GET['id']:"NULL";

    $get_process_barang = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $id")
                    or die (mysqli_error($koneksi)); 

    if(isset($_GET['update'])) {
        $nama   = $_POST['nama'];
        $harga  = $_POST['harga'];
        $stok   = $_POST['stok'];

        $proses_update_databarang = mysqli_query($koneksi, "UPDATE produk SET nama=\"$nama\", harga=\"$harga\", stok=\"$stok\" WHERE id =$id")
                                or die(mysqli_error($koneksi));

        if ($proses_update_databarang) {
            echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/uas/data_barang.php'</script>";
        } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/uas/data_barang.php'</script>";
    }
?>
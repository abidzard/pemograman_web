<?php 

    include "koneksi_db.php";
    include "get_databarang.php";

    $nama       = $_POST['nama'];
    $harga      = $_POST['harga'];
    $qty        = $_POST['qty'];
    $idproduk   = $_POST['pid'];

    $total  = $harga * $qty;

    $proses = mysqli_query($koneksi, "INSERT INTO cart (nama_produk, harga_produk, qty, total_harga, id_produk) values ('$nama', '$harga', '$qty', '$total', '$idproduk')") or die (mysqli_error($koneksi));

    if ($proses) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/uas/daftar_barang.php'</script>";
    } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/uas/daftar_barang.php'</script>";

?>
<?php

    include "koneksi_db.php";

    $id = $_GET['id_cart'];

    $proses_del_cart = mysqli_query($koneksi, "DELETE FROM cart WHERE id_cart = $id")
                or die (mysqli_error($koneksi));

    if ($proses_del_cart) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='/pemograman_web/uas/cart.php'</script>";
    } else echo "<script>alert('Data gagal dihapus!'); window.location.href='/pemograman_web/uas/cart.php'</script>";

?>
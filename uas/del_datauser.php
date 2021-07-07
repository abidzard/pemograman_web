<?php

    include "koneksi_db.php";

    $id = $_GET['id'];

    $proses_del_user = mysqli_query($koneksi, "DELETE FROM user WHERE id = $id")
                or die (mysqli_error($koneksi));

    if ($proses_del_user) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='/pemograman_web/uas/data_user.php'</script>";
    } else echo "<script>alert('Data gagal dihapus!'); window.location.href='/pemograman_web/uas/data_user.php'</script>";

?>
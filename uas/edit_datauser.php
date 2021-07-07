<?php

    include "koneksi_db.php";

    $id = isset($_GET['id'])?$_GET['id']:"NULL";

    $get_process_user = mysqli_query($koneksi, "SELECT * FROM user WHERE id = $id")
                    or die (mysqli_error($koneksi)); 

    if(isset($_GET['update'])) {
        $nama       = $_POST['nama'];
        $username   = $_POST['username'];
        $level       = $_POST['level'];

        $proses_update_datauser = mysqli_query($koneksi, "UPDATE user SET nama=\"$nama\", username=\"$username\", level=\"$level\" WHERE id =$id")
                                or die(mysqli_error($koneksi));

        if ($proses_update_datauser) {
            echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/uas/data_user.php'</script>";
        } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/uas/data_user.php'</script>";
    }
?>
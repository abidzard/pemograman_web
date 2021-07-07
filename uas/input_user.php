<?php
    include "koneksi_db.php";

    $nama       = $_POST['nama'];
    $username   = $_POST['username'];
    $level       = $_POST['level'];

    $proses = mysqli_query($koneksi, "INSERT INTO user (nama, username, level) values ('$nama', '$username', '$level')") or die (mysqli_error($koneksi));

    if ($proses) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/uas/data_user.php'</script>";
    } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/uas/data_user.php'</script>";
?>
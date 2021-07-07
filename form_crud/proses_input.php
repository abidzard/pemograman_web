<?php

    include "koneksi.php";

    $npm    = $_POST['id'];
    $nama   = $_POST['nama'];
    $prodi  = $_POST['prodi'];
    $gender = $_POST['jk'];
    $skill  = implode(", ", $_POST['skill']);

    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (id, nama_mhs, prodi, jk, skill) values ('$npm', '$nama', '$prodi', '$gender', '$skill')") or die (mysqli_error($koneksi));

    if ($proses) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/form_crud/form_bootstrap.php'</script>";
    } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/form_crud/form_bootstrap.php'</script>";
    
?> 
<?php

    include "koneksi.php";

    $npm = isset($_GET['id'])?$_GET['id']:"NULL";

    $get_process = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $npm")
                    or die (mysqli_error($koneksi)); 

    if(isset($_GET['update'])) {
        $npmnew = $_POST['id'];
        $nama   = $_POST['nama'];
        $prodi  = $_POST['prodi'];
        $gender = $_POST['jk'];
        $skill  = implode(", ", $_POST['skill']);

        $proses_update_data = mysqli_query($koneksi, "UPDATE mahasiswa SET id=$npmnew, nama_mhs=\"$nama\", prodi=\"$prodi\", jk=\"$gender\", skill=\"$skill\" WHERE id =$npm")
                                or die(mysqli_error($koneksi));

        if ($proses_update_data) {
            echo "<script>alert('Data berhasil disimpan!'); window.location.href='/pemograman_web/form_crud/form_bootstrap.php'</script>";
        } else echo "<script>alert('Data gagal disimpan!'); window.location.href='/pemograman_web/form_crud/form_bootstrap.php'</script>";
    }
?>
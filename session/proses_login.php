<?php 

    include "koneksi.php";

    if (isset($_POST['login'])) {
        $username       = $_POST['username'];
        $password       = $_POST['password'];
        $pass_hash      = sha1($password);
        $pesan_error    = "";

        if (empty($username)) {
            $pesan_error = "Username/Password salah!";
        } else if (empty($password)) {
            $pesan_error = "Username/Password salah!";
        }

        if ($pesan_error == "") {
            $query  = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND pass='$pass_hash'");
            $data   = mysqli_fetch_assoc($query);

            if (mysqli_num_rows($query) == 1) {
                if ($data['level'] == "admin") {
                    session_start();
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['level'] = $data['level'];

                    header("Location: index.php");
                } elseif ($data['level'] == "user") {
                    session_start();
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['level'] = $data['level'];

                    header("Location: usr_index.php");
                }
            } else{
				$pesan_error = "Username/Password salah!";
  				header("Location: login.php?pesan_error=$pesan_error");
			}
        } else {
            header("Location: login.php?pesan_error={$pesan_error}");
        }
    } else {
        $pesan_error = "";
    }

?>
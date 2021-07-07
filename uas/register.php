<?php
  include "koneksi_db.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Mendaftar | GagdetTech!</title>

    <!-- Bootstrap -->
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/styles.css" rel="stylesheet" media="screen">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/pemograman_web/lib/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>-
  
  <body id="login">
    <div class="jumbotron text-center">
          <h1>GagdetTech!</h1>
          <p>Menyediakan kebutuhan kebutuhan gadget anda...</p>
          <br>
          <br>
    </div>

    <?php
      session_start();
      if(isset($_GET['pesan_error'])) {
          $pesan_error = $_GET['pesan_error'];
      } else if (isset($_GET['pesan'])) {
          $pesan = $_GET['pesan'];
      }
    ?>
    <div class="container">
      <form class="form-signin" action="proses_reg.php" method="POST">
        <h2 class="form-signin-heading">Mendaftar Akun!</h2>
        <?php
          if(isset($pesan_error)){
            echo "<div class=\"alert alert-danger\">$pesan_error</div>";
          } else if(isset($pesan)){
            echo "<div class=\"alert alert-success\">$pesan</div>";
          }
        ?>
        <input type="text" name="name" id="name" class="input-block-level" placeholder="Nama">
        <input type="text" name="username" id="username" class="input-block-level" placeholder="Nama Pengguna">
        <input type="password" name="password" id="password" class="input-block-level" placeholder="Kata Sandi">
        <input type="password" name="re-password" id="password" class="input-block-level" placeholder="Ulangi Katasandi">
        <button class="btn btn-large btn-primary" name="reg" type="submit">Daftar</button>
      </form>
    </div> <!-- /container -->
    <script src="/pemograman_web/lib/vendors/jquery-1.9.1.min.js"></script>
    <script src="/pemograman_web/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
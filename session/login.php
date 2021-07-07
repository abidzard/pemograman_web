<!DOCTYPE html>
<html>
  <head>
    <title>Session Login</title>

    <!-- Bootstrap -->
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="/pemograman_web/lib/assets/styles.css" rel="stylesheet" media="screen">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/pemograman_web/lib/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  
  <body id="login">
    <div class="jumbotron text-center">
          <h1>Sign In to Start Session</h1>
          <p>Login dengan menggunakan session dengan PHP dan role level</p>
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
      <form class="form-signin" action="proses_login.php" method="POST">
        <h2 class="form-signin-heading">Sign In</h2>
        <?php
          if(isset($pesan_error)){
            echo "<div class=\"alert alert-danger\">$pesan_error</div>";
          } else if(isset($pesan)){
            echo "<div class=\"alert alert-success\">$pesan</div>";
          }
        ?>
        <input type="text" name="username" id="username" class="input-block-level" placeholder="Username">
        <input type="password" name="password" id="password" class="input-block-level" placeholder="Password">
        <button class="btn btn-large btn-primary" name="login" type="submit">Sign In</button>
        <br>
        <br>
        <p>Belum punya akun? <a href="register.php" >Register</a></p>
      </form>
    </div> <!-- /container -->
    <script src="/pemograman_web/lib/vendors/jquery-1.9.1.min.js"></script>
    <script src="/pemograman_web/lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
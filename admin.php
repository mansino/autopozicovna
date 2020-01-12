<!doctype html>
<html>
  <?php
    include "connect.php";
    $conn = openCon();
    $img_start = '/auto/';
    include "templates/head.php";
  ?>
  <body class="admin_view">
    <?php
      session_start();
      if ( ! empty( $_POST ) ) {
        if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
          if ( $_POST['username'] == 'administrator' && $_POST['password'] == 'E6X8h7HT' ) {
            $_SESSION['user_id'] = time();
            header("Refresh:0");
          }else{
            include "templates/login.php";
            echo '<script type="text/javascript">alert("Zlé meno alebo heslo")</script>';
          }
        }
      }else{
        if( !isset( $_SESSION['user_id'] ) ){
          include "templates/login.php";
        }else{
          include "templates/upload_template.php";
        }
      }
    ?>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <?php
      if( isset( $_SESSION['user_id'] ) ) echo '<script src="js/admin.js"></script>';
      closeCon($conn);
    ?>
  </body>
</html>

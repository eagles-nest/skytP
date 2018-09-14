<?php
 session_start();
 require_once 'conn.php';
 $token=empty($_GET["token"])? '':$_GET["token"];
// $_SESSION['token']=$token;
// $_GLOBALS['token']=$token;
if(isset($_POST['submit'])){
  $token=empty($_POST["token"])? '':$_POST["token"];
  //echo $token;
  $pass = empty($_POST['pass']) ?'':$_POST['pass'];
  $confirm = empty($_POST['confirm']) ? '':$_POST['confirm'];
  if(empty($pass) || empty($confirm)){
  echo "the fields cannot be empty";
  }
  if($pass != $confirm){
    echo "the passwords do not match";
  }
  elseif($pass == $confirm){
      $pass=md5($pass);
      // select email address of user from the password_reset table
      $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
      $results = mysqli_query($conn, $sql);
      $email = mysqli_fetch_assoc($results)['email'];

      if ($email){
      $sql = "UPDATE users SET password='$pass' WHERE email='$email'";
      $results = mysqli_query($conn, $sql);
      echo "password changed successfully";
      }
  }
  else{
    header("Location: http://localhost/skytop/forgotpass.html");
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
      <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link href="css/styles.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>

          <div class="col-sm-6 login">
            <form action="resetPassword.php" method="POST">
              <label>New Password</label>
              <div class="form-group pass_show">
                <input type="password" value="" class="form-control" placeholder="New Password" name="pass">
              </div>
              <label>Confirm Password</label>
              <div class="form-group pass_show">
                <input type="password" value="" class="form-control" placeholder="Confirm Password" name="confirm">
                <input type="hidden" name="token" value="<?php echo $token; ?>">
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" name="submit">
              </div>
            </form>

          </div>

          <div class="col-sm-3"></div>
      </div>
    </div>

  </body>
</html>


<?php
session_start();
require_once 'conn.php';
$email = validateInput($conn,$_POST['email']);
$query="select email from users where email='$email'";
$result=mysqli_query($conn,$query) or die("problem with the query");
if(mysqli_num_rows($result)>0){
  //user exists...send email link
  $token=bin2hex(random_bytes(10));
  $_SESSION['token']=$token;
  $sql = "INSERT INTO password_reset(email,token) VALUES ('$email', '$token')";
  $results = mysqli_query($conn, $sql);

  // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password";
    $msg = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
            <p>Hi there, <a href=\"http://192.168.10.103/skytop/resetPassword.php?token=" . $token . "\">click this link</a> to reset your password on our site\"</p>


            </body>
            </html>";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail($to, $subject, $msg, $headers);
    echo "mail has been sent to ".$to;

}else{
  //user doesnt exist
  echo "user doesnt exist";
}
//}
?>

<?php
require_once 'conn.php';
$email =$_POST['email'];
$pass = $_POST['pass'];
$pass=md5($pass);
//function validateFormData($data) {
  if(empty($email) || empty($pass)){
    echo "the fields cannot be empty";
  }elseif(isset($email) && isset($pass)){
      //passwords match..update to db
      $query="select email,password from users where email='$email' && password='$pass'";
      $result=mysqli_query($conn,$query) or die("problem with the query");
      if(mysqli_num_rows($result)>0){
        //log user in
        echo "login successful";
      }
      else{
        echo "login failed";
      }
    }
//}
?>

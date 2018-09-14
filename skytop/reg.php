<?php
require_once 'conn.php';
$email =validateInput($conn,$_POST['email']);
$pass = validateInput($conn,$_POST['pass']);
$pass=md5($pass);
//function validateFormData($data) {
  if(empty($email) || empty($pass)){
    echo "the fields cannot be empty";
  }elseif(isset($email) && isset($pass)){
      //passwords match..update to db
      $query="insert into users(id,email,password) values(null,'$email','$pass')";
      $result = mysqli_query($conn,$query) or die("problem with the query");
      if(isset($result)){
        echo "registration successful";
      }
    }else{
      echo "registration failed";
    }
//}
?>

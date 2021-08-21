<?php

 require 'connection.php';
 if($_POST){
     $name = htmlspecialchars( $_POST['name']);
     $email = htmlspecialchars( $_POST['email']);
     $pass = htmlspecialchars( $_POST['pass']);
     $country = htmlspecialchars( $_POST['country']);
     //$sql = "INSERT INTO user(firstname, email,pass,country) values('$name','$email','$pass','$country')";
     $insert = mysqli_query($conn, "INSERT INTO user(firstname, email,pass,country) values('$name','$email','$pass','$country')");
     if ($insert) {
         $_SESSION['name'] = $name;
         header("Location: admin.php");
     } else {echo 'error';}
     
 }
?>

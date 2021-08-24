
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="uye.php" method="post">
        <input type="text" name='name'></br>
        <input type="email" name='email'></br>
        <input type="password" name='password'></br>
        <input type="text" name='country'></br>
        <input class="btn btn-info" type="submit" value='Submit'>
    </form>
<?php
require 'connection.php';
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $country = $_POST['country'];
    $sql = "INSERT INTO user(firstname, email,pass,country) values('$name','$email','$pass','$country')";
    $insert = mysqli_query($conn, "INSERT INTO user(firstname, email,pass,country) values('$name','$email','$pass','$country')");
    if ($insert) {
        session_start();
        $_SESSION['name'] = $name;
        header("location: admin.php");
    } else {echo 'error';}
    echo $sql;
}
?>
</body>
</html>
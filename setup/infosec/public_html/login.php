<?php
session_start();
$servername = "veritabani";
$username = "root";
$password = "rootpassword";
$dbname = "blog";

if ($_POST) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM user WHERE firstname=" . $name . " and pass=" . $pass;
    if ($result = $conn->query("SELECT * FROM user where firstname = '$name' and pass = '$pass'")) {
        if ($result->num_rows) {
            
            $row = $result->fetch_assoc();
            $_SESSION['name'] = htmlspecialchars( $row['firstname']);
            $_SESSION['oturum']= 1;
            header("location: admin.php");
        }
    } else {
        echo "No Result";
    }

    $conn->close();
}
?>

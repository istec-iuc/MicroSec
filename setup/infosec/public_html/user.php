<?php
require 'connection.php';
if ($_POST) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    if (!$name || !$pass) {
        echo "<span style='color:red;'>All fields are required</span>";
    } else {
        $v = $db->prepare("SELECT * FROM user WHERE name=? AND password=?");
        $v->execute(array($name, $pass));
        $c = $v->fetch(PDO::FETCH_ASSOC);
        $x = $v->rowCount();
        if ($x) {
            $_SESSION['name'] = $c['name'];

            echo 'correct';
            header("location: admin.php");
            // include "newpage.php";
        }
    }
}



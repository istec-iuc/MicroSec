<?php
session_start();
$servername = "veritabani";
$username = "root";
$password = "rootpassword";
$dbname = "blog";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else 

if($_POST)
{
 $name = $_POST['name'];
 $pass = $_POST['pass'];
if(!$name || !$pass)
{
    echo "<span style='color:red;'>All fields are required</span>";
} 
else{
    $v = $conn->prepare("SELECT * FROM user WHERE `firstname` = '$name' AND `pass` = '$pass'");        
    //$v->bind_param("s",$name);
    $v->execute();
    $c = $v->get_result();
    $v->store_result();
    if($c->num_rows){
        $_SESSION['name'] = htmlspecialchars($name);
       // include "newpage.php";
    }
}
}


/*try
{
$db = new PDO($dns, $user, $password);

} catch (PDOException $error) {echo "Failed" . $error->getMessage();

}
$stmt = $db->query("SELECT * FROM team where id= '3'");
while ($row = $stmt->fetch()) {
//echo $row['img'];
echo '<img src="data:image/jpeg;base64,'.base64_encode($row['img'] ).'" height="200" width="200" class="img-thumnail" />';
}*/
?>

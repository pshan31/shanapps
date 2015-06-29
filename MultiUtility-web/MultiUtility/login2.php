<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiutility";

$user = $_GET['user'];
$pass = $_GET['pass'];


$con = new mysqli($servername, $username, $password, $dbname);
$sql = "select * from user_data where username = '".$user."' and password = '".$pass."'";
$res=$con->query($sql);
if ($res->num_rows > 0) {
    echo "Login Successfully";
} else {
    echo "Login Unsuccessful";
}

$con->close();

?>
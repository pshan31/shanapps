<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiutility";

$user = $_GET['user'];
$email = $_GET['email'];
$mobile = $_GET['mobile'];
$pass = $_GET['pass'];


$con = new mysqli($servername, $username, $password, $dbname);
$sql = "insert into user_data values('".$user."','".$email."',".$mobile.",'".$pass."')";

if ($con->query($sql) == TRUE) {
    echo "Sign Up Successfully";
} else {
	if(strpos($con->error,'@')>1)
		echo "email";
    else
    	echo "username";
}

$con->close();

?>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiutility";

$time = $_GET['time'];
$user = $_GET['user'];


$con = new mysqli($servername, $username, $password, $dbname);
$sql = "insert into system_info values('".$user."','".$time."',null)";

if ($con->query($sql) == TRUE) {
    echo "Sign Up Successfully";
} else {
	if(strpos($con->error,'@')>1)
		echo "email";
    else
    	echo $con->error;
}

$con->close();

?>


<?php 

$bus=$_GET['bus'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiutility";

$con = new mysqli($servername, $username, $password, $dbname);
$sql = "select $bus from mybusallroutes";
$res=$con->query($sql);


// $i=1;

if ($res->num_rows > 0) {
    
    while($row = $res->fetch_assoc()) {
    	?>
    		<?php
    		if($row[$bus]!=" ")
    		 echo $row[$bus]; ?><br>
    	<?php
    }
}

$con->close();
?>

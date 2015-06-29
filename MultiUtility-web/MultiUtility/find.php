<?php 
$source=$_GET['source'];
$dest=$_GET['dest'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiutility";

$buses = array("TR_1", "TR_2", "TR_3", "SR_1", "SR_2", "SR_3", "SR_4", "SR_5", "SR_6", "SR_8", "TR_4_ac");

$bus = array("TR1", "TR2", "TR3", "SR1", "SR2", "SR3", "SR4", "SR5", "SR6", "SR8", "TR4(AC)");
$flag_s=0;
$flag_d=0;
$sour_i=-1;
$dest_i=-1;
$flag=0;

$sour_arr = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$s_i = -1;


$dest_arr = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
$d_i = -1;

$con = new mysqli($servername, $username, $password, $dbname);

for($i=0;$i<11;$i++)
{
	$flag_s=0;
$flag_d=0;
$sql = "select ".$buses[$i]." from mybusallroutes";
$res=$con->query($sql);

if ($res->num_rows > 0) {
     while($row = $res->fetch_assoc()) {

     	if(strcmp($row[$buses[$i]],$source)==0)
     	{
     		     		$flag_s=1;
     		     		$s_i++;
     		     		$sour_arr[$s_i]=$i;

     	}
 		if(strcmp($row[$buses[$i]],$dest)==0)
     		{
     			$flag_d=1;
     			$d_i++;
     		     		$dest_arr[$d_i]=$i;
     		}
     	    	
}
}


if($flag_s==1 && $flag_d==1)
{
	echo "<br>Go By " . $bus[$i];
	$flag=1;
} 
}

if($flag==0)
{
echo "No Direct Bus Available";


for($l_i=0;$l_i<=$s_i;$l_i++)
{
	for($l_j=0;$l_j<=$d_i;$l_j++)
	{
$sql1 = "SHOW COLUMNS FROM crosspoint";
$res1=$con->query($sql1);
$col_n="";
if ($res1->num_rows > 0) {
    $res1->fetch_assoc();
    while($row1 = $res1->fetch_assoc()) {
    	$col_n = $row1['Field'];

	$sql = "select count(*) FROM crosspoint where " . $col_n . "='" . $bus[$sour_arr[$l_i]] . "' or ". $col_n . "='" . $bus[$dest_arr[$l_j]] . "'";
	$res=$con->query($sql);
	$row = $res->fetch_assoc();
	
	
	if($row['count(*)']>1)
		echo "<br>" . $bus[$sour_arr[$l_i]] . " to  " . $col_n . " then " . $bus[$dest_arr[$l_j]];

    }
}
}
}
}

$con->close();

 ?>
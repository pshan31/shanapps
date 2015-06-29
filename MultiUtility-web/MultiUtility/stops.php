
<script>
function hello(str1,str2) {

  if (str1=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
       return false;
    }
  }
  xmlhttp.open("GET","find.php?source="+str1+"&dest="+str2,true);
  xmlhttp.send();

}

</script>



<form method="GET" onsubmit="hello(source.value,dest.value);return false;">

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multiutility";

$con = new mysqli($servername, $username, $password, $dbname);
$sql = "select stops from mybusallstops order by stops";
$res=$con->query($sql);


// $i=1;
?>
<select name="source">

<?php
if ($res->num_rows > 0) {
    
    while($row = $res->fetch_assoc()) {

?>

<option value="<?php echo $row['stops'] ;?>">  <?php echo $row['stops'] ; ?>  </option>
<?php

    		// $i++;
    	}
    }

?>
</select>
<br><br>
<?php

$con->close();


$con = new mysqli($servername, $username, $password, $dbname);
$sql = "select stops from mybusallstops order by stops";
$res=$con->query($sql);





// $i=1;
?>
<select name="dest">

<?php
if ($res->num_rows > 0) {
    
    while($row = $res->fetch_assoc()) {

?>

<option value="<?php echo $row['stops'] ;?>">  <?php echo $row['stops'] ; ?>  </option>
<?php

    		$i++;
    	}
    }

?>
</select>
<?php

$con->close();

?>

<input type="submit" value="find">

</form>


<div id="txtHint"><b>CD info will be listed here...</b></div>

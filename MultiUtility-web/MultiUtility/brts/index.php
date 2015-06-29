<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>MultiUtility | BRTS Bus List</title>
		<meta name="description" content="Page Loading Effects: Modern ways of revealing new content" />
		<meta name="keywords" content="page loading, svg animation, loading effect, fullscreen svg" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<script src="js/snap.svg-min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="pagewrap" class="pagewrap">
			<div class="container show" id="page-1">
				<!-- Top Navigation -->
				<div class="codrops-top clearfix">
					<a class="codrops-icon codrops-icon-prev" href="../features/index.html"><span>Back To Features</span></a>
					<span class="right"><a class="codrops-icon codrops-icon-drop" href="../login/index.html"><span>Login</span></a>

					<a class="codrops-icon codrops-icon-drop" href="../register/index.html"><span>Register</span></a></span>

				</div>
				<header class="codrops-header">
					<h1>MultiUtility<span>BRTS Bus Finder</span></h1>
				</header>
				<center>
				<img src="img/bus11.png">
				</center>
				<section class="columns clearfix">
					<div class="column">
						





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
    
       
    }
  }
  xmlhttp.open("GET","../find.php?source="+str1+"&dest="+str2,true);
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
Source Stop : 
<select class="form-control" id="source" name="source">

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
Destination Stop :
<select class="form-control" id="dest" name="dest">

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













					</div>
					<div class="column">

						<p>Select Source & Destination Stop and Find:</p>
<a class="pageload-link" href="">Find Bus</a>

</form>
					</div>
				</section>
				
			</div><!-- /container -->

			<!-- The new page dummy; this would be dynamically loaded content -->
			<div class="container" id="page-2">
				<!-- Top Navigation -->
				<div class="codrops-top clearfix">
					<a class="codrops-icon codrops-icon-prev" href="../features/index.html"><span>Back To Features</span></a>
					<span class="right"><a class="codrops-icon codrops-icon-drop" href="../login/index.php"><span>Login</span></a></span>
				</div>

				<section><center>
					<img src="img/bus11.png">
					</center>
					<h2 id="txtHint">This is an example for a new page.</h2>
					<p><a class="pageload-link" href="#page-1">Go back</a></p>
				</section>
			</div><!-- /container -->

			<div id="loader" class="pageload-overlay" data-opening="M 0,0 c 0,0 63.5,-16.5 80,0 16.5,16.5 0,60 0,60 L 0,60 Z">
				<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M 0,0 c 0,0 -16.5,43.5 0,60 16.5,16.5 80,0 80,0 L 0,60 Z"/>
				</svg>
			</div><!-- /pageload-overlay -->
			
		</div><!-- /pagewrap -->
		<script src="js/classie.js"></script>
		<script src="js/svgLoader.js"></script>
		<script>
			(function() {
				var pageWrap = document.getElementById( 'pagewrap' ),
					pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
					currentPage = 0,
					triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
					loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 400, easingIn : mina.easeinout } );

				function init() {
					
					triggerLoading.forEach( function( trigger ) {
						trigger.addEventListener( 'click', function( ev ) {
							ev.preventDefault();
							loader.show();
							// after some time hide loader
							setTimeout( function() {
								loader.hide();

								classie.removeClass( pages[ currentPage ], 'show' );
								// update..
								currentPage = currentPage ? 0 : 1;
								classie.addClass( pages[ currentPage ], 'show' );

var s = document.getElementById("source").value;
					var d = document.getElementById("dest").value;
					hello(s,d);

							}, 2000 );
						} );
					} );	


				}

				init();
				

			})();
		</script>
	</body>
</html>
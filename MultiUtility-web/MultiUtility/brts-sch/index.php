<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>MultiUtility | Bus Route</title>
		<meta name="description" content="Sidebar Transitions: Transition effects for off-canvas views" />
		<meta name="keywords" content="transition, off-canvas, navigation, effect, 3d, css3, smooth" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>


<script>

function hello(str) {
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("haha").innerHTML=xmlhttp.responseText;
      
    
       
    }
  }
  xmlhttp.open("GET","../route.php?bus="+str,true);
  xmlhttp.send();

}

</script>


	</head>
	<body>
		<div id="st-container" class="st-container">
			<!-- 	
				example menus 
				these menus will be on top of the push wrapper
			-->
			
			<!-- content push wrapper -->
			<div class="st-pusher">
				<!-- 	
					example menus 
					these menus will be under the push wrapper
				-->
				

				<div class="st-content"><!-- this is the wrapper for the content -->
					<div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->
						<!-- Top Navigation -->
						<div class="codrops-top clearfix">
							<a class="codrops-icon codrops-icon-prev" href="../features/index.html"><span>Back To Features</span></a>
							<span class="right"><a class="codrops-icon codrops-icon-drop" href="../login/index.html"><span>Login</span></a>

						<a class="codrops-icon codrops-icon-drop" href="../register/index.html"><span>Register</span></a>
					</span>
						</div>
						<header class="codrops-header">
							<h1>MultiUtility<span>Bus Route</span></h1>
							<center>
									<img src="bus11.png">
						</center>
						</header>
						
						<div class="main clearfix">
							<div id="st-trigger-effects" class="column">
								<br>
								Select Bus :
								<select class="form-control" onchange="hello(this.value);">
									<option value="TR_1">TR1</option>
									<option value="TR_2">TR2</option>
									<option value="TR_3">TR3</option>
									<option value="TR_4">TR4</option>
									<option value="SR_1">SR1</option>
									<option value="SR_2">SR2</option>
									<option value="SR_3">SR3</option>
									<option value="SR_4">SR4</option>
									<option value="SR_5">SR5</option>
									<option value="SR_6">SR6</option>
									<option value="SR_8">SR8</option>
									<option value="TR_4_AC">TR4 (AC)</option>
							</select>
							</div>
							<div id="haha" class="column">
								<p>Select the Bus and know its Route</p>
							</div>
							
						</div><!-- /main -->
					</div><!-- /st-content-inner -->
				</div><!-- /st-content -->
			</div><!-- /st-pusher -->
		</div><!-- /st-container -->
		<script src="js/classie.js"></script>
		<script src="js/sidebarEffects.js"></script>
	</body>
</html>
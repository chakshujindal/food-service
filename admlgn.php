<!DOCTYPE HTML>
<html> 

<?php 

	session_start();
	if(isset($_SESSION['adminusername']))
		header("Location: adminhome.php")

?>
<!-- Header-->
<title>ABC Catering Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="robotofont.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="home.css?ts=<?=time()?>&quot;"/>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
</style>
<body>

<div class="w3-top w3-large header" style="z-index:10; height:100px;">
<h1>FOOD SERVICE SYSTEM</h1>
</div>
<!-- Navbar -->
<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4; top:100px;">
  <li class="w3-right w3-large w3-theme w3-hide-small" style="">
		<a href="#" class="w3-theme-l1">Login</a>
  </li>
  <!--<li><a href="home.php" class="w3-hover-white">Home</a></li>
  <li><a href="order.php" class="w3-hover-white">Order</a></li>
<!--
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Clients</a></li>
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Partners</a></li>
  -->
</ul>
<!--Header End-->
<head> 
<title>Sign-In</title> 
<link rel="stylesheet" type="text/css" href="style-sign.css"> 
</head> 

<body id="body-color"> 

<center>
<div class="" style="margin-top:150px;"> <!--Put Everything in this container-->
	<div class="login"> 
		<!--<fieldset style="width:30%">-->
		<div class="loginHead w3-theme-l1">ADMIN LOGIN</div> 
		
		<form method="POST" action="adminconnectivity.php"> 
		User 
		<br>	
		<input type="text" name="user" size="40"><br> Password 
		<br>

		<input type="password" name="pass" size="40">
		<br> <div> <input id="button" type="submit" name="adminSubmit" value="Log-In"> 
		<!--<button type="button"onclick="location.href='registerpage.php'">Register</button>-->
		</div>
		</form>
		</div>
		
		<!--</fieldset> -->
	</div> 
</center>
</body>
</html> 
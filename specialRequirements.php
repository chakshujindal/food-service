<!DOCTYPE html>
<html>

<?php
	session_start();
	if(!isset($_POST['orderSubmit']))
		header("Location: order.php");
	
	
	$_SESSION['bld']=$_POST['bld'];
?>
<script>
/* For Splitting Display After clicking Order
function addframe()
{
	document.getElementById('sometext').style.display="none";
	document.getElementById('mainorder').className="w3-sidenav w3-hide-small w3-quarter w3-animate-left left order";
}
*/
</script>
<!-- Header-->
<title>ABC Catering Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="robotofont.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="home.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-sidenav a,.w3-sidenav h4{padding:12px;}
.w3-navbar a{padding-top:12px !important;padding-bottom:12px !important;}
</style>
<body>

<div class="w3-top w3-large header" style="z-index:10; height:100px;">
<h1>FOOD SERVICE SYSTEM</h1>
</div><!-- Navbar -->
<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4; top:100px;">
  <li class="w3-right w3-large w3-theme w3-hide-small" style="">
		<?php 
			if(!isset($_SESSION['username']))
				echo '<a href="loginpage.php" class="w3-hover-white">Login</a>';

			else
				echo '<a href="#"class="w3-hover-white"> Hello '.$_SESSION['name'].'!</a>';
		?>
  </li>
  <li><a href="home.php" class="w3-hover-white">Home</a></li>
  <li><a href="order.php" class="w3-theme-l1">Order</a></li>
<!--
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Clients</a></li>
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Partners</a></li>
-->
</ul>

<!--Header End-->
<center>
<div class="main" style="margin-top:150px; position:relative;">

	<div class="w3-row w3-padding-64">
		<div class=" w3-container order" style="position:relative !important" id="mainorder">
		<form name="spReq" method="POST" action="invoice.php">
			<h1 class="w3-text-teal">Special Requirements</h1>
			<small>Please specify any special requests (if any) regarding the ingredients </small>
			<br><br>
			<textarea rows="10" cols="35" style="margin-left:30px;"></textarea>
			<br><br>
			<div style="text-align:center; font-size:120%;">
			<button type="submit" name="spReqSubmit" style="padding:0px 50px">Proceed</button>
			</div>
			<br><br>
		</form>
		</div>
	</div>
</div>
</center>
</html>
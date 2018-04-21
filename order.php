<!DOCTYPE html>
<html>
<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("Location: loginpage.php");
		exit();
	}
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

<!--To display menu-->
<?php
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'foodservice'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	
	if (mysqli_connect_errno($con)) 
	{ 
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 
		
	$queryB = "select * from menu where type='Breakfast';"; 	
	$queryL = "select * from menu where type='Lunch';";
	$queryD = "select * from menu where type='Dinner';";
?>

<!--Side-->
	<div id="sometext" class="w3-sidenav w3-hide-small w3-quarter left w3-animate-left" style="padding-top:150px; position:relative;">
	<b>BREAKFAST</b>
	<ul>
		<?php
		$queryexecB=mysql_query($queryB) or die(mysql_error());;
		while($row=mysql_fetch_array($queryexecB))
		{
		?>
			<li><?php echo $row['items']?></li>
		<?php
		}
		?>
	</ul>
	<b>LUNCH</b>
	<ul>
		<?php
		$queryexecL=mysql_query($queryL) or die(mysql_error());;
		while($row=mysql_fetch_array($queryexecL))
		{
		?>
			<li><?php echo $row['items']?></li>
		<?php
		}
		?>
	</ul>
	<b>DINNER</b>
	<ul>
		<?php
		$queryexecD=mysql_query($queryD) or die(mysql_error());;
		while($row=mysql_fetch_array($queryexecD))
		{
		?>
			<li><?php echo $row['items']?></li>
		<?php
		}
		?>
	</ul>
	</div>

<!--Order Input-->
<div class="main" style="margin-left:40%; margin-top:150px; position:relative;">

	<div class="w3-row w3-padding-64">
		<div class=" w3-container order" style="position:relative !important" id="mainorder">
		<form name="orderForm" method="POST" action="invoice.php">
			<h1 class="w3-text-teal">Place Order</h1>
			<div class="orderOptions">
				<div class="tooltip">
					<input name="bld[]" type="checkbox" value="Breakfast" id="breakfast" class="check_box"><label for="breakfast" style="cursor:pointer"></label>Breakfast
					<span class="tooltiptext">
						<h3>Breakfast Menu</h3>
						<ul>
						<?php
						$queryB2=mysql_query($queryB) or die(mysql_error());;
						while($row=mysql_fetch_array($queryB2))
						{
						?>
							<li><?php echo $row['items']?></li>
						<?php
						}
						?>
						</ul>
					</span>
				</div>
				<br><br>
				<div class="tooltip">
					<input name="bld[]" type="checkbox" value="Lunch" id="lunch" class="check_box"><label for="lunch" style="cursor:pointer"></label>Lunch
					<span class="tooltiptext">
						<h3>Lunch Menu</h3>
						<ul>
						<?php
						$queryL2=mysql_query($queryL) or die(mysql_error());;
						while($row=mysql_fetch_array($queryL2))
						{
						?>
							<li><?php echo $row['items']?></li>
						<?php
						}
						?>
						</ul>					
					</span>
				</div>
				<br><br>
				<div class="tooltip">
					<input name="bld[]" type="checkbox" value="Dinner" id="dinner" class="check_box"><label for="dinner"style="cursor:pointer"></label>Dinner
					<span class="tooltiptext">
						<h3>Dinner Menu</h3>
						<ul>
						<?php
						$queryD2=mysql_query($queryD) or die(mysql_error());;
						while($row=mysql_fetch_array($queryD2))
						{
						?>
							<li><?php echo $row['items']?></li>
						<?php
						}
						?>
						</ul>					
					</span>
				</div>
				<br><br>
			</div>
			<div class="orderDate">
				<h1 class="w3-text-teal">When will you be hungry?</h1>
				<input name="date" align="center" type="date"  value="<?php echo date('Y-m-d'); ?>" required>
			</div>
			<div class="spclReq">
				<h1 class="w3-text-teal">Special Requirements</h1>
				<small>Please specify any special requests (if any) regarding the ingredients </small>
				<br><br>
				<textarea name="spclReq" class="spclReqText" rows="5" cols="48" style="margin-left:30px;" align="center"></textarea>
				<br><br>
				<div style="text-align:center; font-size:120%;">
				</div>
				<br><br>
				<div class="orderButton" align="center">
				<button type="submit" name="orderSubmit" style="padding:0px 50px;">Proceed</button>
				<br><br>
				</div>
			</div>
		</form>
		</div>
		</div>
</div>
</body>

</html>
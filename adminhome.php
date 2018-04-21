<!DOCTYPE HTML>
<html> 

<?php 

	session_start();
	if(!isset($_SESSION['adminusername']))
		header("Location: admlgn.php")

?>
<!-- Header-->
<title>ABC Catering Services</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="robotofont.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link rel="stylesheet" href="home.css?ts=<?=time()?>&quot;"/>
<link rel="stylesheet" href="admin.css?ts=<?=time()?>&quot;"/>

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
		<a href="adminlogout.php" class="w3-theme-l1">Logout</a>
  </li>
  <!--<li><a href="home.php" class="w3-hover-white">Home</a></li>
  <li><a href="order.php" class="w3-hover-white">Order</a></li>
<!--
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Clients</a></li>
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Partners</a></li>
  -->
</ul>
<!--Header End-->
<div class="orderView">
<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">  
	Choose date: <input class="" type="date" name="orderDate" value="<?php echo date('Y-m-d'); ?>">
	&nbsp
	<input type="submit" value="Show Orders">
</form>
</div>
<?php
	define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'foodservice'); 
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
	
	$query=mysql_query("select * from orders where date='$_POST[orderDate]';");

?>
<table class="orderTable" align="center" cellpadding="10px">
	<tr>
		<th>Order No</th>
		<th>Date</th>
		<th>Meal Type</th>
		<th>Customer</th>
		<th>Special Request</th>
	</tr>

	<?php
		while($row=mysql_fetch_array($query))
		{
	?>
	<tr>
		<td><?php echo $row['order_no']?></td>
		<td><?php echo $row['date']?></td>
		<td><?php echo $row['meal_type']?></td>
		<td><?php echo $row['customer_username'] ?></td>
		<td><?php echo $row['spr']?></td>
	</tr>
	<?php
		}
	?>
</table>
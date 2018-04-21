<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'foodservice'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
/*
$ID = $_POST['user'];
$Password = $_POST['pass']; 
*/

if (mysqli_connect_errno($con)) 
{ 
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

function Register() 
{ 
//session_start(); //starting the session for user profile page 

	$query = "insert into customer(username,password,name,address,phno,email) values('$_POST[username]','$_POST[pass]','$_POST[name]','$_POST[address]','$_POST[phnum]','$_POST[email]');";
	mysql_query($query) or die(mysql_error());
	
	echo "SUCCESSFULLY REGISTERED!","<br>";
 
} 
if(isset($_POST['formsubmit'])) 
{ 
	Register(); 
} 
?>

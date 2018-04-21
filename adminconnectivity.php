<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'foodservice'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 
function SignIn() 
{ 
session_start(); //starting the session for user profile page 
if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
{ 
	$query = mysql_query("SELECT * FROM admin where username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error()); 
	$row = mysql_fetch_array($query);
	if(!empty($row['username']) AND !empty($row['password'])) 
	{ 
		$_SESSION['adminusername'] = $row['username'];
		$_SESSION['name'] = $row['name'];
		header("Location: adminhome.php");
	} 
	else 
	{ 
		echo "\nSORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY..."; 
	} 
} 
} 
if(isset($_SESSION['username']))
{
	header("Location: adminhome.php");
}
if(isset($_POST['adminSubmit'])) 
{ 
	SignIn();
}
?>


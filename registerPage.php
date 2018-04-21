<!DOCTYPE html>
<html>
<?php 
	session_start();
	if(isset($_SESSION['username']))
		header("Location: home.php")
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
		<a href="loginpage.php" class="w3-hover-white">Login</a>
  </li>
  <li><a href="home.php" class="w3-hover-white">Home</a></li>
  <li><a href="order.php" class="w3-theme-l1">Order</a></li>
<!--
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Clients</a></li>
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Partners</a></li>
  -->
</ul>
<!--Header End-->

<head>

<title> Registration Form for New Users </title>
<script>
function fnamevalidation()
{
	var name=document.getElementById("n1").value;
	if(name== "")
	{
		
		document.getElementById("n1").style="border: 0.25px solid red";
		document.getElementById('p1').style='display:block;font-size:12px; color:red;';
		document.getElementById("p1").innerHTML="First Name cannot be empty.";
	}
	var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=0123456789";
	for(var i=0;i<specialChars.length;i++)
	{
		for(var j=0; j<name.length;j++)
		{
			if(specialChars[i]==name[j])
			{
				document.getElementById("n1").style="border: 0.25px solid red";
				document.getElementById('p1').style='display:block;font-size:12px; color:red;';
				document.getElementById("p1").innerHTML="Special Characters and alphabets are not allowed in name.";
			}
		}
	}
}
function lnamevalidation()
{
	var name=document.getElementById("n2").value;
	if(name== "")
	{
		
		document.getElementById("n2").style="border: 0.25px solid red";
		document.getElementById('p2').style='display:block;font-size:12px; color:red;';
		document.getElementById("p2").innerHTML=" Last name cannot be empty.";
	}
	var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=0123456789";
	for(var i=0;i<specialChars.length;i++)
	{
		for(var j=0; j<name.length;j++)
		{
			if(specialChars[i]==name[j])
			{
				document.getElementById("n2").style="border: 0.25px solid red";
				document.getElementById('p2').style='display:block;font-size:12px; color:red;';
				document.getElementById("p2").innerHTML="Special Characters and alphabets are not allowed in name.";
			}
		}
	}
}
function emailvalidate()
{
	var x=document.getElementById('email').value;
	var atpos = x.indexOf("@");
	var dotpos = x.lastIndexOf(".");
	if(x=="")
	{
		document.getElementById("email").style="border: 0.25px solid red";
		document.getElementById('p3').style='display:block;font-size:12px; color:red;';
		document.getElementById("p3").innerHTML="E-mail ID cannot be empty.";
	}
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		document.getElementById("email").style="border: 0.25px solid red";
		document.getElementById('p3').style='display:block;font-size:12px; color:red;';
		document.getElementById("p3").innerHTML="Not a valid e-mail address.";
	}
}
function emaildisplay()
{
	document.getElementById('p3').style='display:none';
	document.getElementById('email').style='none';
}
function fnamedisplay()
{
	document.getElementById('p1').style='display:none';
	document.getElementById('n1').style='none';
}
function lnamedisplay()
{
	document.getElementById('p2').style='display:none';
	document.getElementById('n2').style='none';
}
function usernamevalidate()
{
	var name=document.getElementById("user").value;
	if(name=="")
	{
		
		document.getElementById("user").style="border: 0.25px solid red";
		document.getElementById('p4').style='display:block;font-size:12px; color:red;';
		document.getElementById("p4").innerHTML="User Name cannot be empty.";
	}
}
function usernamedisplay()
{
	document.getElementById('p4').style='display:none';
	document.getElementById('user').style='none';
}
function passwordvalidation()
{
	var a=document.getElementById('pass').value;
	var b=document.getElementById('repass').value;
	if(a == "" || b== "")
	{
		document.getElementById('p5').innerHTML="The password cannot be empty.";
		if(a == "" && b == "")
		{
			document.getElementById("repass").style="border: 0.25px solid red";
			document.getElementById("pass").style="border: 0.25px solid red";
			document.getElementById('p5').style='display:block;font-size:12px; color:red;';
		}
		else if(a == "")
		{
				document.getElementById("pass").style="border: 0.25px solid red";
				document.getElementById('p5').style='display:block;font-size:12px; color:red;';
		}
		else if(b== "")
		{
			document.getElementById("repass").style="border: 0.25px solid red";
			document.getElementById('p5').style='display:block;font-size:12px; color:red;';
		}
	}
	else if(a!=b)
	{
		document.getElementById('p5').style='display:block;font-size:12px; color:red;';
		document.getElementById("p5").innerHTML="The password does not match.";
		document.getElementById("pass").style="border: 0.25px solid red";
		document.getElementById("repass").style="border: 0.25px solid red";
	}
	else
	{
		if(a.length<6)
		{
			document.getElementById('p5').style='display:block;font-size:12px; color:red;';
			document.getElementById("p5").innerHTML="The password is weak";
			
		}
		if(a.length>=6 && a.length<15)
		{
			document.getElementById('p5').style='display:block;font-size:12px; color:red;';
			document.getElementById("p5").innerHTML="The password is strong.";
		}
		if(a.length>15)
		{
			document.getElementById('p5').style='display:block;font-size:12px; color:red;';
			document.getElementById("p5").innerHTML="The password is very strong.";
		}
	}
}
function passworddisplay()
{
		document.getElementById('p5').style='display:none';
		document.getElementById('pass').style='none';
		document.getElementById('repass').style='none';

}
function phonevalidation()
{
	var ph=document.getElementById("phno").value;
	var temp = "abcdefghijklmnopqrstuvwxyz<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-=";
	if(ph =="")
	{
		document.getElementById("phno").style="border: 0.25px solid red";
		document.getElementById('p6').style='display:block;font-size:12px; color:red;';
		document.getElementById("p6").innerHTML="Phone Number cannot be empty.";
	}
	else if(ph.length!=10)
	{
		document.getElementById("phno").style="border: 0.25px solid red";
		document.getElementById('p6').style='display:block;font-size:12px; color:red;';
		document.getElementById("p6").innerHTML="Length should be 10.";
	}
	else if(!ph.match(temp))
	{
		for(var i=0; i<temp.length; i++)
		{
			for(var j=0; j<10; j++)
			{
				if(ph[j] == temp[i])
				{
					document.getElementById("phno").style="border: 0.25px solid red";
					document.getElementById('p6').style='display:block;font-size:12px; color:red;';
					document.getElementById("p6").innerHTML="It should not contain special characters or alphabets.";
				}
			}
		}
	}
	
}
function phonedisplay()
{
	document.getElementById('p6').style='display:none';
	document.getElementById('phno').style='none';
}
</script>
</head>
<div class="container"> <!--Put Everything in this container-->
<div class="main" style="margin-top:150px; position:relative;">

<div class="register">

	<div class="registerHead"><h3> Registration for new users</h3> </div>
	<form method="POST" action="register.php">
	<div>
	Name:<br>
	<input type="text" name="name" placeholder="Name"  id="n1" onblur="fnamevalidation()" onfocus="fnamedisplay()" autofocus required>
	<p id="p1"></p>
	<p id="p2"></p>
	E-mail Id:<br>
	<input type="text" name="email" id="email" onblur="emailvalidate()" onfocus="emaildisplay()" required><br>
	<p id="p3"> </p>
	User name:<br> 
	<input type="text" name="username" placeholder="Enter Username" id="user" onblur="usernamevalidate()" onfocus="usernamedisplay()" required><br>
	<p id="p4"> </p>
	Password:<br>
	<input type="password" name="pass" id="pass" onfocus="passworddisplay()" onblur="passwordvalidation()"required><br>
	Re-enter Password:<br>
	<input type="password" name="repass" id="repass" onblur="passwordvalidation()" onfocus="passworddisplay()"required ><br>
	<p id="p5"></p>
	Address:<br>
	<textarea rows="3" cols="30" name="address"></textarea>
	<br>Phone Number:<br> 
	<input type="text" name="phnum" placeholder="Enter Phone No." id="phno" onblur="phonevalidation()" onfocus="phonedisplay()" required><br>
	<p id="p6"></p>
	</div>
	<div>
	<button type="submit" name="formsubmit"> Register </button>
	<button type="reset" name="reset"> Reset </button>
	<button name="cancel" onclick="location.href='loginPage.php'">Cancel</button>
	</form>
	</div>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>
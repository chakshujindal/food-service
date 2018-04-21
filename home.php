<!DOCTYPE html>
<html>
<?php 		
	session_start(); 
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
<ul class="w3-navbar w3-theme w3-top w3-left-align w3-large" style="z-index:4; top:100px; overflow:visible;">

  <li class="w3-right w3-large w3-theme w3-hide-small" style="">
		<?php 
			if(!isset($_SESSION['username']))
				echo '<a href="loginpage.php" class="w3-hover-white">Login</a>';

			else
			{
		?>
				<div class="w3-dropdown-hover w3-right w3-large w3-theme"><a href='#'>Welcome <?php echo $_SESSION['name'].'!';?></a>
					<div class="w3-dropdown-content"style="width:100%;">
						<!--<a href="profilepage.php" >Profile</a>-->
						<a href="logout.php" >Logout</a>
					</div>
				</div>
		<?php	
			}
		?>

  </li>
	
  <li><a href="home.php" class="w3-theme-l1">Home</a></li>
  <li><a href="order.php" class="w3-hover-white">Order</a></li>
<!--
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Clients</a></li>
  <li class="w3-hide-medium w3-hide-small"><a href="#" class="w3-hover-white">Partners</a></li>
-->
</ul>
<!--Header End-->

<!-- Sidenav -->
<!--
<nav class="w3-sidenav w3-collapse w3-theme-l5 w3-animate-left" style="z-index:3;width:250px;margin-top:51px;" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="close menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4><b>Menu</b></h4>
  <a href="#" class="w3-hover-black">Link</a>
  <a href="#" class="w3-hover-black">Link</a>
  <a href="#" class="w3-hover-black">Link</a>
  <a href="#" class="w3-hover-black">Link</a>
</nav>
<!-- Overlay effect when opening sidenav on small screens -->

<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidenav is visible -->*/
<div class="w3-main" style="margin-left:250px;margin-top:150px;">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal" style="font-size:300%;">About Us</h1>
      <p style="font-size:140%;">We, ABC Catering Servces, established in 2016 are pioneer in catering services. You can place your order from anywhere, your office, your home or even while when you are on the go.
		ABC Catering Services provides you with different options. You can order Breakfast, Lunch, Dinner for you and your family. We have a wide Menu. We are the only one in the market who asks you 
		for your Special Requirements because we care for you.
		<br><br>
		We love our customers. We value them. We love our job in helping others and sustaining lives. That's why we here at ABC Catering Services say "Sustaining lives, always".
		ABC Catering Services is a proud cooperative firm of the women and promote "Women Empowerment". 
		</p>
    </div>
	<!-- AD
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
	-->
  </div>
<!--
  <div class="w3-row">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	<!-- AD
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
	
  </div>

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Heading</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum
        dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	<!-- AD
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>-->
  </div>
</body>
  <!-- Pagination -->
  <!--<div class="w3-center w3-padding-64">
    <ul class="w3-pagination">
      <li><a class="w3-black" href="#">1</a></li>
      <li><a class="w3-hover-black" href="#">2</a></li>
      <li><a class="w3-hover-black" href="#">3</a></li>
      <li><a class="w3-hover-black w3-hide-small" href="#">4</a></li>
      <li><a class="w3-hover-black w3-hide-small" href="#">5</a></li>
      <li><a class="w3-hover-black" href="#">>></a></li>
    </ul>
  </div>
<!-- Footer
  <footer id="myFooter">
    <div class="w3-container w3-theme-12 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>
*/
<!-- END MAIN -->

<script>
// Get the Sidenav
var mySidenav = document.getElementById("mySidenav");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidenav, and add overlay effect
function w3_open() {
    if (mySidenav.style.display == 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidenav with the close button
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>


<?php
include("dbcon.php");
date_default_timezone_set("Asia/Manila");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/privacy.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    h = checkTime(h);
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('showTime').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>
<body onload="startTime();">
<div id="wrapper">
	<div id="header-wrapper">
			<div class="header-top">
	   <div class="wrap"> 
			  
			  <div class="cssmenu">
					<ul>
					<?php
					if(@isset($_SESSION['customer_id']))
					{
					?>
					<li class="active"style="color: white">Welcome,</li>
					<li><a href="account.php"><?php echo strtoupper($_SESSION['cust_FName'])." ". strtoupper($_SESSION['cust_LName'])."!"; ?></a></li> |
					<li><a href="logout.php">Log Out</a></li>
                   
                        <?php
                          }
						  else
                           {
                        ?>
				
					<li><a href="login.php">Log In</a></li> |
					<li><a href="register.php">Sign Up</a></li>
					    <?php
                            }
                        ?>
				</ul>
			</div>
			<div class="dt" style="font-family: Verdana, sans-serif; margin-left: 20px; color: white; margin-top: -45px; font-size: 15px;">
				<?php

					$date = date('l, F j, Y');
					print($date);


				?>

				|

				<?php

					//$time = date("h:i:s: A");
					//print($time);

				?>
				<span id="showTime"></span>


			</div>
			<div class="clear"></div>
 		</div>
	</div>
				<div class ="headercart">
					<div id="logo">
				<h1><a href="index.php"><img src="images/logo-estings2.png"></a></h1>
			</div>
				 <?php
					@$custID = $_SESSION['customer_id'];
					$count=mysql_query("select count(*) from cart1_tbl where cart1_cust_id = '$custID'");
					$count1 = mysql_result($count,0);
				?>
				 <div><a href="cart.php"><img class="cartimg" src="images/cart.png"></a></div>
	             <div class="cart">Cart (<?php print $count1[0];?>)</div>
				</div>

				<div id="header" class="container">
				<div id="menu">
				<section>
				<ul class="sf-menu">
                <li><a href="index.php">Home</a></li>
                       <li><a href="products.php">Products</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
               </ul>
          </section>
          </div>
		</div>
		
		
	</div>
	<!-- end #header -->


	<div id="featured-content">
		<div id="column1">
		<div id="border">
			<h2>Privacy & Policy</h2>
				<p>
					<strong>Our Commitment To Privacy</strong><br>
					Your privacy is important to us. To better protect your privacy we provide this notice explaining our online information practices and the choices you can make about the way your information is collected and used. 
					To make this notice easy to find, we make it available on our homepage and at every point where personally identifiable information may be requested.
				</p>
				<p>
					<strong>The Information We Collect:</strong><br>
					This notice applies to all information collected or submitted on any of our websites. 
					On some pages, you can order products, make requests, and register to receive materials. 
					The types of personal information collected at these pages are:<br><br>

					Name<br>
					Address<br>
					Email address<br>
					Phone number<br><br>

					On some pages, you can submit information about other people. 
					For example, if you order a gift online and want it sent directly to the recipient, you will need to submit the recipient's address. 
					In this circumstance, the types of personal information collected are:<br><br>

					Name<br>
					Address<br>
					Phone Number<br>
					(etc.)
				</p>
				<p>
					<strong>The Way We Use Information:</strong><br>
					We use the information you provide about yourself when placing an order only to complete that order.<br>
					We do not share this information with outside parties except to the extent necessary to complete that order.<br>
					We use the information you provide about someone else when placing an order only to ship the product and to confirm delivery.<br>
					We do not share this information with outside parties except to the extent necessary to complete that order.<br>
					We use return email addresses to answer the email we receive. Such addresses are not used for any other purpose and are not shared with outside parties.<br>
					Finally, we never use or share the personally identifiable information provided to us online in ways unrelated to the ones described above 
					without also providing you an opportunity to opt-out or otherwise prohibit such unrelated uses.<br>
				</p>
				<p>
					<strong>Our Commitment To Data Security</strong><br>
					To prevent unauthorized access, maintain data accuracy, and ensure the correct use of information, we have put in place appropriate physical, electronic, 
					and managerial procedures to safeguard and secure the information we collect online.
				</p>
				
		</div> <!-- end of border -->	

		</div>
		
	</div>
</div>
<div id="footer-content-wrapper">
	<div id="footer-content">
		<div id="fbox4">
			<h2>Business Hours</h2>
			<ul class="style2">
				<li>Monday to Saturday</li>
				<li>7am to 6:30pm</li>
				<li>Sunday</li>
				<li>7am to 5pm</li>
			</ul>
		</div><div id="fbox1">
			<h2>Customer Support</h2>
			<ul class="style1">
				<li class="first"><a href="index.php">Home</a></li>
				<li class="first"><a href="vicinity.php">Vicinity Map</a></li>
				<li class="first"><a href="faq.php">FAQ</a></li>
			</ul>
		</div>

		<div id="fbox2">
			<h2>Information</h2>
			<ul class="style1">
				<li class="first"><a href="privacy.php">Privacy Policy</a></li>
				<li class="first"><a href="terms.php">Terms & Conditions</a></li>
			</ul>
		</div>
		<div id="fbox3">
			<h2>Like & Follow Esting's</h2>
			<ul class="style1">
				<li class="first"><a href="https://www.facebook.com/EstingsFlowersInternationalInc" target="blank"><img src="images/facebook.png" width="40" height="40"></a></li>
			</ul>
		</div>
	</div>
</div><div id="footer">
	<p>&copy; Esting's Flower Shop. All rights reserved 2015. Images & Design by IT4BG5.</p>
</div>
<!-- end #footer -->



</body>
</html>

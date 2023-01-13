<?php
include("dbcon.php");
date_default_timezone_set("Asia/Manila");
session_start();



	
	//$txt_FName=$_SESSION['txt_FName'];
	//$txt_LName=$_SESSION['txt_LName'] ;
	//$txt_CNum=$_SESSION['txt_CNum'];
	$_SESSION['txt_deliverydate'] = $_POST['txt_deliverydate'];
	$_SESSION['txt_deliveryaddress'] = $_POST['txt_deliveryaddress'];

	

// @$customer_id = $_SESSION['customer_id'];
// if(isset($_POST['agree']))
// {

//     mysql_query("delete from cart1_tbl where cart1_cust_id='$customer_id'");
		
// }



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/terms.css" rel="stylesheet" type="text/css" media="screen" />
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

			<h2>Terms & Conditions</h2>
				<p>
					<strong>1.</strong> Every peak season the price will be increase. <br>
					<strong>2.</strong> All prices are in Philippine Peso. <br>
					<strong>3.</strong> Delivery will be on Pampanga area only. <br>
					<strong>4.</strong> Strictly no cancellation of orders if items had been served. For any changes cotact us right away. <br>
					<strong>5.</strong> As much as possible, no refund and no return for product quality problem especially, when the product is delivered. <br>
					<strong>6.</strong> All of the products that are posted in product module only will catered by the company. <br>
					<strong>7.</strong> The system will accept orders anytime. <br>
					<strong>8.</strong> The delivery time every Monday to Saturday will start at 8am-6:30pm and every Sunday will start at 8am-5pm.<br>
					<strong>9.</strong> Orders will be confirmed only, once payment received.<br>
					<strong>10.</strong> Esting's will not liable for delays or non delivery due to  natural disasters, acts of God and other reasons beyond our control.
				</p>
		</div> <!-- end of border -->
		
		</div>
		<form method="post">
		<div id="termsbutton">
			<p style="color:white; font-family: Verdana, sans-serif; margin-left: -240px; font-size: 16px;">Click "I Agree" if you want to continue & proceed to payment.</p>
			<p style="color:white; font-family: Verdana, sans-serif; margin-left: -200px; font-size: 16px;">Click "Cancel" if you change your mind & want to order more.</p>
			
				
				<button type="submit" name="agree" id="termsag" formaction="paypal.php">I Agree</button>
				<button type="submit" name="cancel" id="termsca" formaction="cart.php">Cancel</button>
		</div>
	</form>
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

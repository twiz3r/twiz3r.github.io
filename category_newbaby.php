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
<link href="css/category.css" rel="stylesheet" type="text/css" media="screen" />
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
                       <li class="current_page_item"><a href="products.php">Products</a></li>
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
			<h3>Categories</h3>
			<div id="side_pannel">
				<ul>
					<li><a href="category_anniv.php">Anniversary</a></li>
					<li><a href="category_birthday.php">Birthday</a></li>
					<li><a href="category_congrats.php">Congratulations</a></li>
					<li><a href="category_getwell.php">Get Well</a></li>
					<li  class="current_page_item"><a href="category_newbaby.php">New Baby</a></li>
					<li><a href="category_love.php">Love & Romance</a></li>
					<li><a href="category_sympathy.php">Sympathy</a></li>
					<li><a href="category_thankyou.php">Thank You</a></li>
					<li><a href="category_wedding.php">Wedding</a></li>
				</ul>
			</div>
		</div> <!-- end of border -->	

<div id="border2">
			<h2>New Baby</h2>
				<?php
                               	                $query = mysql_query("select * from prodmain_tbl where prod_category = 'New Baby' and prod_isdel = '0'");
												while($fetch = mysql_fetch_array($query)) 
												{


                                                ?>

                                                <div class="img" style="width: 250px; height: 280px; float: left; position: relative;">
												<div class="desc2"><?php print $fetch[1];?></div>
  												<a href="details.php">
    											<img src= "backend/<?php print $fetch[5];?>" alt="" width="170" height="200">
    											</a>
 												
												<div class="desc3">Price: <?php print $fetch[3];?></div>
												<div class="desc4"><a href="details.php?id=<?php print $fetch[0];?>">Check Details</a></div>
												</div>


                                                
                                                
                                                <?php } ?>
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

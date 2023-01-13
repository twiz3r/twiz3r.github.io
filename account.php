<?php
include("dbcon.php");
date_default_timezone_set("Asia/Manila");
session_start();
@$custID = $_SESSION['customer_id'];

?>

<!-- Ninja Delete -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/account.css" rel="stylesheet" type="text/css" media="screen" />
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
					$custID = $_SESSION['customer_id'];
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
		<h2 style=" margin-bottom: 20px; font-size: 18px; background: rgb(18,95,41); width: 150px; text-align: center; padding: 10px; border-radius: 10px; border-color: white; color: white;">My Account</h2>
		<div id="column1">
		<form method="post">
		<table class="cart_table">

			<thead>
			

		          <tr class="cart_title">
		            <td>Code</td>
		            <td>Date</td>
					<td>Description</td>
		            <td>Amount</td>
		            <td>Status</td>
		          </tr>
         	</thead>
         	<tbody>
         			<?php 
								
					
					$getID = mysql_query("Select * from trans_tbl  where trans_cust_id = '$custID' GROUP BY trans_cart2_id");
					$fetchID = mysql_fetch_row($getID);

				$getPayment=mysql_query("SELECT * FROM cart2_tbl JOIN prodmain_tbl ON cart2_tbl.cart2_prod_id = prodmain_tbl.prod_id where cart2_cust_id = '$custID'");
				while ($fetchPayment=mysql_fetch_array($getPayment))	
				{
			?>
         		 <tr>
		            <td><?php print $fetchPayment[6];?></td>
		            <td><?php print date("F, j, Y",strtotime ($fetchID[4]));?></td>
					<td><?php print $fetchPayment[9];?></td>
		            <td>(₱)<?php print number_format($fetchPayment[4],2);?></td>
		            <td><?php print $fetchID[7];?></td>
		        </tr>
		        <?php } ?>
         	</tbody>
         	
        </table>
        </form>	
		
     
      
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
				<li class="first"><a href="sitemap.php">Site Map</a></li>
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
				<li class="first"><a href="#"><img src="images/fb.png" width="20" height="20"> www.facebook.com/estings</a></li>
				<li class="first"><a href="#"><img src="images/twit.png" width="20" height="20">www.twitter.com/estings (@estings_sfp)</a></li>
				
			</ul>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy; Esting's Flower Shop. All rights reserved 2015. Images & Design by IT4BG5.</p>
</div>
<!-- end #footer -->



</body>
</html>

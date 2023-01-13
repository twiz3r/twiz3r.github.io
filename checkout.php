<?php
include("dbcon.php");
date_default_timezone_set("Asia/Manila");
session_start();

$date = date("Y-m-d");
	$date = strtotime("+3 days", strtotime($date));
    $startingDate = date("Y-m-d", $date);

@$customer_id = $_SESSION['customer_id'];
if(isset($_POST['btn_order']))
{
	
    mysql_query("delete from cart1_tbl where cart1_cust_id='$customer_id'");
	
}



	
?>
<?php
				@$customer_id = $_SESSION['customer_id'];
				$getRecord = mysql_query("SELECT * FROM custmain_tbl WHERE cust_id= $customer_id");
				$fetchRecord = mysql_fetch_row($getRecord); 
				?>

<!-- Ninja Delete -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/checkout.css" rel="stylesheet" type="text/css" media="screen" />
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

<form method="post" formaction="termsorder.php">
<div id="featured-content">
	<div id="column1">
		<div id="border">
			<h2>Receiver Information</h2>
			<ul class="user_cartinfo">
				
							<li>
								<label>First Name:</label><br>
								<input name="txt_FName" type="text" class="input1" size="18" value="<?php print $fetchRecord[1];?>">
							</li>
						
							<li id="cartinfo1">
								<label>Last Name:</label><br>
								<input name="txt_LName" type="text" class="input2" size="18" value="<?php print $fetchRecord[2];?>">
							</li>
							<li>
								<label>Email Address:</label><br>
								<input name="txt_email" type="text" class="input1" size="18" value="<?php print $fetchRecord[4];?>">
							</li>
							<li id="cartinfo2">
								<label>Contact Number:</label><br>
								<input name="txt_CNum" type="text" class="input1" size="18" value="<?php print $fetchRecord[3];?>">
							</li>
							<li>
								<label>Delivery Address:</label><br>
								<textarea name="txt_deliveryaddress" cols="44" rows="1"><?php print $fetchRecord[6];?></textarea>
							</li>
							<li>
								<label>Delivery Date:</label><br>
								<input name="txt_deliverydate" type="date" id="deliveryDate" onchange="return validateDate(this.value);">
								<input type="hidden" name="startingDate" id="startingDate" value="<?php print $startingDate; ?>">
							</li>
						</ul>
		</div><!--- end of border -->
		<div id="border2">
			
				<ul class="user_cartinfo2">
							<li>
								<?php
								
								$getSum = mysql_query("SELECT SUM(cart1_price) FROM cart1_tbl WHERE cart1_cust_id='$customer_id'");
								$fetchSum = mysql_fetch_row($getSum);
								$valueAddedTax = floatval($fetchSum[0]) * 0.12;
								$subTotal = floatval($fetchSum[0]) - floatval($valueAddedTax);
								?>
								<label>Cart Sub Total:<span>(₱) <?php print number_format($subTotal, 2); ?></span></label><br>
							</li>

							<li>
								<?php
								$getSum = mysql_query("SELECT SUM(cart1_price) FROM cart1_tbl WHERE cart1_cust_id='$customer_id'");
								$fetchSum = mysql_fetch_row($getSum);
								$valueAddedTax = floatval($fetchSum[0]) * 0.12;
								?>
								<label>Tax (12%):<span><?php print number_format($valueAddedTax, 2); ?></span></label><br>
							</li>

							<li>
								<label>Delivery Fee:<span>(₱) 500</span></label><br>
							</li>

							<li>
								<?php
								
								$sql = mysql_query("SELECT SUM(cart1_price) FROM cart1_tbl WHERE cart1_cust_id='$customer_id'");
								while($row = mysql_fetch_array($sql))
								{
									$sum = $row['SUM(cart1_price)'];

								?>

								<label id="total">Total:<span>(₱) <?php print number_format($sum +500, 2);?></span></label><br>
									<?php $_SESSION['sum']=$sum + 500; ?>
									<?php } ?></p>
							</li>
								<p style="font-size: 13px;	margin-top:30px;">By clicking <strong>"Order"</strong> button you'll be redirected to our terms and conditions</p>
								<button type="submit" name="btn_order" id="checkout" formaction="termsorder.php" disabled>Order</button>
							
								
						</ul>
					
		</div><!--- end of border2 -->
	</div>	
</div>
</form>
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

<script type="text/javascript">
function validateDate(date) {
	var date1 = document.getElementById('startingDate').value;
	
	if(date<date1){
		alert('Invalid delivery date. It must be at least three days from now.');
		document.getElementById('deliveryDate').value = '';
		document.getElementById('checkout').disabled = true;
	}
	else
		document.getElementById('checkout').disabled = false;
}
</script>

</body>
</html>

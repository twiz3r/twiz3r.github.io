<?php
include("dbcon.php");
date_default_timezone_set("Asia/Manila");


session_start();
@$customer_id = $_SESSION['customer_id'];
if(isset($_POST['btn_cancel']))
{
    $id  = $_GET['id'];
    mysql_query("Delete from cart1_tbl where cart1_id ='$id'");
}


?>

<?php
if(isset($_POST['btn_edit']))
{
    $id  = $_GET['id'];
	$getProdID = mysql_query("SELECT * FROM cart1_tbl WHERE cart1_id='$id'");
	$fetchProdID = mysql_fetch_row($getProdID);
	$prodID = $fetchProdID[1];
	
	$getPrice = mysql_query("SELECT * FROM prodmain_tbl WHERE prod_id='$prodID'");
	$fetchPrice = mysql_fetch_row($getPrice);
	$prodPrice = $fetchPrice[3];
	
    $qty = $_POST['qty'];
	
	$price = floatval($qty) * floatval($prodPrice);
	
	mysql_query("update cart1_tbl set cart1_qty='$qty', cart1_price='$price' where cart1_id='$_GET[id]'");
}
?>


<?php

if(isset($_POST['btn_checkout']))
{		

	header("Location: checkout.php");
	
	
}
?>

<!-- Ninja Delete -->

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/cart.css" rel="stylesheet" type="text/css" media="screen" />
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
					<li class="active" style="color: white;">Welcome</li> |
					<li><a href="account.php"><?php echo $_SESSION['cust_FName']." ". $_SESSION['cust_LName']; ?></a></li> |
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
		<form method="post">
		<table class="cart_table">
			<thead>
		          <tr class="cart_title">
		            <td>Product Picture</td>
		            <td>Product Name</td>
		            <td>Price</td>
		            <td>Quantity</td>
		            <td>Cancel</td>
		            <td>Edit QTY</td>
		          </tr>
         	</thead>
         	<?php
					if(@isset($_SESSION['customer_id']))
					{
					?>
         	<tbody>
         		 <tr>

<!-- Display papunta na sa cart natin -->	

				<?php
				$prodIDArray = array();
				$x = 1;
				
				$getProd = mysql_query("SELECT * FROM cart1_tbl JOIN prodmain_tbl WHERE cart1_tbl.cart1_prod_id=prodmain_tbl.prod_id and cart1_tbl.cart1_cust_id='$customer_id'");
				while($fetchRecord = mysql_fetch_array($getProd))
				{
				$prodIDArray[$x] = $fetchRecord[1];
					$x++;
		?>
		            <td><img src="backend/<?php print $fetchRecord[11];?>" width="100" height="100" alt="" border="0" class="cart_thumb" /></td>
		            <td><?php print $fetchRecord[7];?></td>
		            <td>(₱) <?php print number_format($fetchRecord[3],2);?></td>
		            <td><input name="qty" style="width: 20px; text-align: center;" type="text" value="<?php print $fetchRecord[4];?>"></td>
		         
		            <td><button name="btn_cancel" type="submit" class="cancelbtn"  formaction='?id=<?php print $fetchRecord[0];?>'>x</button></td>
		            <td><button name="btn_edit" type="submit" class="cancelbtn"  formaction='?id=<?php print $fetchRecord[0];?>'>Update Price</button></td>
         		</tr>
         		<?php
					
					}
				?>
         	</tbody>
					<?php
                          }
						  else
                           {
                        ?>
                        <tr>
                     <td style="color: white; padding: 20px;">    Cart is Empty, Click <a href="login.php" style=" color: red;">here</a> to log-in</td>
                     </tr>
				  <?php
                            }
                        ?>
        </table>
        </form>	
     
      
	</div>
	<div id="column1">
		<div id="border2">
			<form method="post">
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
								$getSum = mysql_query("SELECT SUM(cart1_price * cart1_qty) FROM cart1_tbl WHERE cart1_cust_id='$customer_id'");
								$fetchSum = mysql_fetch_row($getSum);
								$valueAddedTax = floatval($fetchSum[0]) * 0.12;
								?>
								<label>Tax (12%):<span><?php print number_format($valueAddedTax, 2); ?></span></label><br>
							</li>
								<?php
								if(@isset($_SESSION['customer_id']))
								{
								?>
							<li>
<!-- pag nka log in ka-->	
								<label>Delivery Fee:<span>(₱) <?php print number_format("500", 2); ?></span></label><br>
							</li>
                       

							<li>
								<?php
								
								$sql = mysql_query("SELECT SUM(cart1_price) FROM cart1_tbl WHERE cart1_cust_id='$customer_id'");
								while($row = mysql_fetch_array($sql))
								{
									$sum = $row['SUM(cart1_price)'];

								?>

								<label id="total">Total:<span>(₱) <?php print number_format($sum + 500,2 );?></span></label><br>
									<?php $_SESSION['sum']=$sum; ?>
									<?php } ?></p>
							</li>
							   <?php
		                          }
								  else
		                          {
		                        ?>
                      		  <li>
<!-- pag nka logout ka -->
								<label>Delivery Fee:<span>(₱) </span></label><br>

							</li>
                       

							<li>
								<?php
								$sql = mysql_query("SELECT SUM(cart1_price) FROM cart1_tbl WHERE cart1_cust_id='$customer_id'");
								while($row = mysql_fetch_array($sql))
								{
									$sum = $row['SUM(cart1_price)'];

								?>

								<label id="total">Total:<span>(₱) <?php print number_format($sum,2);?></span></label><br>
									<?php $_SESSION['sum']=$sum; ?>
									<?php } ?></p>
							</li>
							  <?php
                               }
                              ?>
				            </ul>
   
								<?php
								if(@isset($_SESSION['customer_id']))
								{
								?>
								<button type="submit" name="btn_checkout" id="checkout" >Check Out</button>
								<button type="submit" id="continue" formaction="products.php" >Continue Shopping</button>
								 <?php
                         			 }
						  				else
                           			 {
                       			  ?>
                       			  <button type="submit" id="continue" formaction="products.php" >Continue Shopping</button>
                       			  <?php
                            }
                        ?>
						</ul>
					</form>
		</div><!--- end of border2 -->
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

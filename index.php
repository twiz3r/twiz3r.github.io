<?php
include("dbcon.php");
session_start();
date_default_timezone_set("Asia/Manila");
    if(isset($_SESSION['customer_id']))
        

    {
        $custID = $_SESSION['customer_id'];
        $getCust = mysql_query("select * from custmain_tbl where cust_id='$custID'");
        $fetchCust = mysql_fetch_row($getCust);
		
        $_SESSION['cust_FName'] = $fetchCust[1];
        $_SESSION['cust_LName'] = $fetchCust[2];
    }

	
?>

	<?php

					if(!isset($_COOKIE['visit']))
				    {
				    @setcookie('visit', '1');
				    $sql = mysql_query("select * from counter_tbl limit 1");
				    $row = mysql_fetch_array($sql);
				    $counter = $row['counter'] + 1;
				    $sql = "update counter_tbl set counter = '$counter'";
				    mysql_query($sql) or die(mysql_error());
				    }


				    $visitorcounter1 = mysql_query("select * from counter_tbl limit 1");
				    $visitorcounter2 = mysql_fetch_row($visitorcounter1);
			    ?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/index.css" rel="stylesheet"/>
<script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
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
					<li class="active" style="color: white">Welcome,</li>
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
			
				| Visitor Counter:
				<?php print $visitorcounter2[0]; ?>

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
                <li class="current_page_item"><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
               </ul>
          </section>
          </div>
		</div>

		


		<div id="banner">
			<div class="slideshow">
     <ul class="slideshow">
          	<li class="show"><img width="1000" height="395" src="images/6.jpg"alt=""></li>
          	<li><img width="1000" height="395" src="images/5.jpg" alt=""></li>
          	
    </ul> 
    </div>
		</div>
	</div>

	<!-- end #header -->


	<div id="featured-content">
		<div id="column1">
			<h2>Best Sellers</h2>
			            <?php
                               	                $query = mysql_query("select * from prodmain_tbl where prod_category='Best Seller' and prod_isdel = '0'");
												while($fetch = mysql_fetch_array($query)) 
												{


                                                ?>

                                                <div class="img" style="width: 250px; height: 290px; float: left; position: relative;">
												<div class="desc2"><?php print $fetch[1];?></div>
    											<img src= "backend/<?php print $fetch[5];?>" alt="" width="170" height="200">
    											
 												
												<div class="desc3">Price: (₱)<?php print $fetch[3];?></div>
												<div class="desc4"><a href="details.php?id=<?php print $fetch[0];?>">Check Details</a></div>
												</div>


                                                
                                                
                                                <?php } ?>
		</div>
		<div id="column2">
			<h2>Featured Products</h2>
			<?php
                               	                $query = mysql_query("select * from prodmain_tbl where prod_category='Featured Products' and prod_isdel = '0'");
												while($fetch = mysql_fetch_array($query)) 
												{


                                                ?>

                                                <div class="img" style="width: 250px; height: 290px; float: left; position: relative;">
												<div class="desc2"><?php print $fetch[1];?></div>
    											<img src= "backend/<?php print $fetch[5];?>" alt="" width="170" height="200">
												<div class="desc3">Price: (₱)<?php print $fetch[3];?></div>
												<div class="desc4"><a href="details.php?id=<?php print $fetch[0];?>">Check Details</a></div>
												</div>


                                                
                                                
                                                <?php } ?>
		</div>
		<div id="column3">
			<h2>New Products</h2>
			<?php
                               	                $query = mysql_query("select * from prodmain_tbl where prod_category='New Products' and prod_isdel = '0'");
												while($fetch = mysql_fetch_array($query)) 
												{


                                                ?>

                                                <div class="img" style="width: 250px; height: 290px; float: left; position: relative;">
												<div class="desc2"><?php print $fetch[1];?></div>
    											<img src= "backend/<?php print $fetch[5];?>" alt="" width="170" height="200">

 												
												<div class="desc3">Price: (₱)<?php print $fetch[3];?></div>
												<div class="desc4"><a href="details.php?id=<?php print $fetch[0];?>">Check Details</a></div>
												</div>


                                                
                                                
                                                <?php } ?>
		</div>
		
	</div>
	<div id="page">
		<div id="content">
			<div class="post">
				<h2> About Esting's</h2>
				<p class="par">Esting’s Flower Shop, or locally known as Esting’s, has been around since 1959 in the City of San Fernando, Pampanga. 
					It was owned by Ms. Estelita Garcia, an out of school youth. 
					They were once concessionaires at the US Bases in Clark and Subic. 
					Esting’s is one of the pioneers and most respected florist in Central Luzon. 
					Esting's offers different kinds of flower arrangement that is suitable for all types of occasions. 
					All the pictures you will see in this site , are the actual arrangements done by our team of florists. 
					Freshness and quality flowers is what has made Esting's in-sight up to this time. And best is guaranteed.
				</p><br><br>
				<h3>Mode of Payments</h3>
				<p class="par2"><img src="images/pvm.png" style="margin-left: 410px; margin-top:20px;"></p>
				
			</div>
		</div>
		<!-- end #content -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
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
</div>
<div id="footer">
	<p>&copy; Esting's Flower Shop. All rights reserved 2015. Images & Design by IT4BG5.</p>
</div>
<!-- end #footer -->

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>

<?php
include("dbcon.php");

require_once('phpmailer/class.phpmailer.php');
session_start();

	if(isset($_POST['btn_submit']))
	{
	
		$txt_FName = $_POST['txt_FName'];
		$txt_LName = $_POST['txt_LName'];
		$txt_CNum = $_POST['txt_CNum'];
		$txt_email = $_POST['txt_email'];
		$txt_password = $_POST['txt_password'];
		$txt_address = $_POST['txt_address'];
		$code = substr(md5($txt_FName), 0, 8);

		mysql_query("INSERT INTO custmain_tbl() values(NULL,'$txt_FName','$txt_LName','$txt_CNum','$txt_email','$txt_password','$txt_address','0','0','$code')")or die("Error");

		$getLastInsertedID = mysql_query("select * from custmain_tbl order by cust_id desc limit 1");
		$fetchLastInsertedID = mysql_fetch_row($getLastInsertedID);
		$lastInsertedID = $fetchLastInsertedID[0];
		
		$email_body = "Thank you for choosing Estings Flower Shop. We are pleased to inform you that your are one step away to complete your registration. Please click the link below and enter the verification code to activate your account.<br><br>Your verification code is <strong>$code</strong>. Click <a href='http://localhost/estings/verify.php?id=$lastInsertedID' target='_blank'>here</a> to activate your account.";
						
				//$code = md5($email); //Encrypted
		$mail = new PHPMailer ();
		$mail->From = "jj.bustos06@gmail.com";   //change this to your email address
		$mail->FromName = "Estings Flower Shop";               
		$mail->AddAddress($txt_email);        				
		$mail->Subject = "Account Activation"; 
		$mail->Body = $email_body;         
					   
		$mail->IsHTML(true);
		$mail->IsSMTP();
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->SMTPSecure = "ssl";
		$mail->SMTPAuth = "True";
		$mail->Username = "jj.bustos06@gmail.com";	//change this to your email address: example@gmail.com
		$mail->Password = "Jak3macolets";	//change this your email address' password: estings
					
		if(!$mail->Send())
		{
			$message =  '<div class="error">Error: ' . $mail->ErrorInfo .'</div>';
		}
		else
		{		
			print "<script type=\"text/javascript\">";
			print "alert('To complete your registration, please visit your email account for validation and verification purposes. Thank you!.');";
			print "document.location.href='login.php';"; 
			print "</script>";
		
		}
	}



?>


<!DOCTYPE html>

	<script type="text/javascript">
	function validateInput()
	{
		if(document.getElementById('txt_FName').value == "")
		{
			alert('First Name is required.');
			return false;
		}
		if(document.getElementById('txt_LName').value == "")
		{
			alert('Last Name is required.');
			return false;
		}

			if(document.getElementById('txt_email').value == "")
			{
				alert('Email is required.');
				return false;
			}
			if(document.getElementById('txt_password').value == "")
			{
				alert('Password is required.');
				return false;
			}
			if(document.getElementById('txt_password1').value == "")
			{
				alert('please re-enter your password.');
				return false;
			}
			if(document.getElementById('txt_password').value != document.getElementById('txt_password1').value)
			{
				alert('password mismatch.');
				return false;
			}
			if(document.getElementById('txt_address').value == "")
		{
			alert('Address is required.');
			return false;
		}
			if(document.getElementById('txt_CNum').value == "")
		{
			alert('Contact Number is required.');
			return false;
		}
			if(document.getElementById('6_letters_code').value == "")
		{
			alert('Captcha is required.');
			return false;
		}
		if(document.getElementById('6_letters_code').value != document.getElementById('captchaCode').value)
			{
				
				alert('captcha mismatch.');
				refreshCaptcha();
				return false;
			}

		}
	
	
		</script>
		
		<script type="text/javascript">

//	
	function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}


</script>




<html>
<head>
<meta charset="utf-8">
<title>Esting's Flower Shop</title>
<link href="css/register.css" rel="stylesheet"/>
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
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("captchaCode").value = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "samcaptcha.php", true);
	xmlhttp.send();
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
				 <div><a href="cart.php"><img class="cartimg" src="images/cart.png"></a></div>
	             <div class="cart">Cart (0)</div>
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
			<div class="register_account">
          	<div class="wrap">
    	      <h4 class="title">Create an Account</h4>
    		   <form method="post" >
    			 <div class="col_1_of_2 span_1_of_2">
		   			 <div>
						<label> First Name</label>
							<input type="text" name="txt_FName" placeholder="firstname" id="txt_FName" onkeydown="validateUserLetter()" >
					 </div>
					 
		    			<div>
							<label > Last Name</label>
								<input type="text" name="txt_LName" placeholder="lastname" id="txt_LName" onkeydown="validateUserLetter()" >
						</div>
		    			<div>
						 <label> Email </label>
								<input type="text" name="txt_email" placeholder="example@gmail.com" id="txt_email" >
						</div>
		    			<div>
						 <label> Password </label>
							<input type="password" name="txt_password" placeholder="password" id="txt_password" >
						</div>
		    	 		<div>
							<label> Confirm Password</label>
								<input type="password" placeholder="Repeat Password" id="txt_password1">
						</div>
		    	 		
		    	 </div>
		    	  <div class="col_1_of_2 span_1_of_2" >	
		    		<div>
					 <label> Address</label>
						<input type="text" name="txt_address"  placeholder="Enter" id="txt_address">
					</div>
		    		
		           <div>
		          </div>
						<label> Contact Number</label>
		          	<input type="text" name="txt_CNum" placeholder="(999-999-9999)" id="txt_CNum"  onkeydown="validateUserNumber()" >

		          	<p>
						<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br>
						<label for='message'>Enter the code above here :</label><br>
						<input id="6_letters_code" name="6_letters_code" type="text"><br>
						<small>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh</small>
						<input type ="hidden" name ="captchaCode" id="captchaCode" value="">
						
					</p>
					
					
								          		
		          </div>
				  
		      <button type="submit" class="grey" name="btn_submit" onclick="return validateInput();">Submit</button>
		    
		    <div class="clear"></div>
		    </form>
    	</div>
    </div>
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

 <script>
function validateUserNumber(){
   var code = this.event.keyCode;
    if ((code<48||code>57) // numerical
      &&code!==46 //delete
      &&code!==8  //back space
	  &&code!==9  //back space
      &&code!==37 // <- arrow 
      &&code!==39) // -> arrow
   {
     this.event.preventDefault();        
    }
}

function validateUserLetter(){
   var code = this.event.keyCode;
    if ((code<65||code>90 && code<97 || code>122) // numerical
      &&code!==46 //delete
      &&code!==8  //back space
	  &&code!==9  //back space
	  &&code !==32 //space
      &&code!==37 // <- arrow 
      &&code!==39) // -> arrow
	  
   {
     this.event.preventDefault();        
    }
}


 
</script>



</body>
</html>

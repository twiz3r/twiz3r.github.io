<?php
	include("dbcon.php");
	include('phpmailer/class.phpmailer.php');
 	@session_start();
 	$id = $_GET['id'];
	
	$getCode = mysql_query("select * from custmain_tbl where cust_id='$id'");
	$fetchCode = mysql_fetch_row($getCode);
	$code = $fetchCode[9];
	
	if(isset($_POST['btn_register']))
	{
		mysql_query("update custmain_tbl set cust_isVerified='1' where cust_id='$id'");
		
		print "<script>";
		print "alert('You have successfully activated your account. You can now log in and start shopping. Thank you for registering.');";
		print "document.location.href='login.php';";
		print "</script>";
	}
?>
<!DOCTYPE HTML>

		<script type="text/javascript">
		function validateCode()
		{
			var code1 = document.getElementById('code1').value;
			var code2 = document.getElementById('code2').value;
			
			if(code1 != code2)
			{
				alert('Invalid verification code.');
				return false;
			}
		}
		</script>
		

<html>
		<body>
			<section id="main" style="background-color:white;height:600px;float:left;width:100%;">
				<header><h2>Email Activation</h2></header>
				<div class="row">
					<div class="12u">
						<section class="box" style="width:50%;margin:0px auto;">
							<form name="registration_form" method="post" >
								<div class="row uniform half ollapse-at-2">
									<div class="6u">
										<label>Please enter your validation here:</label>
 										<input name="code1" id="code1" type="text" value="" placeholder="Enter code here..." style="width:500px;" required/>	
										<input type="hidden" name="code2" id="code2" value="<?php print $code; ?>">
									</div>
								</div>
								<br>
								<div class="row uniform">
									<div class="12u">
										<ul class="actions">
											<input type="submit" name="btn_register" onclick="return validateCode();" value="VALIDATE" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</div>
			</section>
			</body>
			</html>
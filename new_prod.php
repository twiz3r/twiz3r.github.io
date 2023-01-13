<?php
	@include("dbcon.php");
	 $id = $_GET['id'];
	session_start();

	if(@isset($id))
	{
		$validate1 = mysql_query("select * from cart1_tbl where cart1_prod_id='$id'");
		$validate2 = mysql_num_rows($validate1);
		
		if($validate2 <> 0)
		{
			print "<script>";
			print "alert('This item has already been added in your cart.');";
			print "document.location.href='products.php';";
			print "</script>";
			
			
			
		}
		else
		{
			
	$getprod = mysql_query("select * from prodmain_tbl where prod_id = '$id'");
	$fetchprod = mysql_fetch_row($getprod);

	$prodname = $fetchprod[1];
	$price = $fetchprod[3];
	$img = $fetchprod[5];


	print($prodname);
	print($price);
	@$customer_id = $_SESSION['customer_id'];

	mysql_query("insert into cart1_tbl() values(NULL,'$id','$customer_id','$price','1','$price')");
	header("location:cart.php");    
		}
	}		
?>




<!-- eto ung ipapasok na laman sa cart -->

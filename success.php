<?php
	include("dbcon.php");
	session_start();

	//$transCode = date("YmdHis");
	$custID = $_SESSION['customer_id'];
	$sum = 500;
	
	
	$orderDate = date("Y-m-d");
	$deliveryDate = $_SESSION['txt_deliverydate'];
	$deliveryAddress = $_SESSION['txt_deliveryaddress'];

	$getID = mysql_query("select * from trans_tbl order by trans_id desc limit 1");
    $fetchID = mysql_fetch_row($getID);
    $lastInsertedID = intval($fetchID[0]) + 1;
	
	$code = 0;

    if(intval($lastInsertedID) >= 1 and intval($lastInsertedID) <= 9)
        $code = "00".$lastInsertedID;
    else if(intval($lastInsertedID) >= 10 and intval($lastInsertedID) <= 99)
        $code = "0".$lastInsertedID;
    else if(intval($lastInsertedID) >= 100 and intval($lastInsertedID) <= 999)
        $code = $lastInsertedID;

    $transCode = "F-ORD".$code;

	$getQuery = mysql_query("SELECT * FROM cart1_tbl WHERE cart1_cust_id='$custID'");
	while($fetchQuery = mysql_fetch_array($getQuery))
	{
		$cart1_prod_id = $fetchQuery[1];
		$cart1_unit = $fetchQuery[3];
		$cart1_qty = $fetchQuery[4];
		$cart1_price = $fetchQuery[5];
		$sum = $sum + $fetchQuery[5];
		
		
		

		mysql_query("INSERT INTO cart2_tbl() VALUES(NULL, '$cart1_prod_id', '$cart1_qty', '$cart1_unit', '$cart1_price', '$custID', '$transCode')");
	}

	mysql_query("DELETE FROM cart1_tbl WHERE cart1_cust_id='$custID'");

	mysql_query("INSERT INTO trans_tbl() VALUES(NULL, '$custID', '$transCode', '$sum', '$orderDate', '$deliveryDate', '$deliveryAddress', 'Paid', '0', '0')");

	mysql_query("INSERT INTO payment_tbl() VALUES(NULL, '$custID', '$transCode', '$sum', 'PayPal', '0', '0', '$sum', '0', '0', '$orderDate')");

	print "INSERT INTO trans_tbl() VALUES(NULL, '$custID', '$transCode', '$sum', '$orderDate', '$deliveryDate', '$deliveryAddress', 'Paid', '0', '0')";
	print "<br>";
	print "DELETE FROM cart1_tbl WHERE cart1_cust_id='$custID'";

	header("location:index.php");
?>
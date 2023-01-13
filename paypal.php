<?php
include("dbcon.php");
session_start();

require_once('paypal.class.php');  // include the class file
$p = new paypal_class;             // initiate an instance of the class
$p->paypal_url = 'https://www.sandbox.paypal.com/cgi-bin/webscr';   // testing paypal url
//$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';     // paypal url
            
// setup a variable for this script (ie: 'http://www.micahcarrick.com/paypal.php')
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

// if there is not action variable, set the default action of 'process'
if (empty($_GET['action'])) $_GET['action'] = 'process';  

switch ($_GET['action']) {
    
   case 'process':      // Process and order...

      // There should be no output at this point.  To process the POST data,
      // the submit_paypal_post() function will output all the HTML tags which
      // contains a FORM which is submited instantaneously using the BODY onload
      // attribute.  In other words, don't echo or printf anything when you're
      // going to be calling the submit_paypal_post() function.
 
      // This is where you would have your form validation  and all that jazz.
      // You would take your POST vars and load them into the class like below,
      // only using the POST values instead of constant string expressions.
 
      // For example, after ensureing all the POST variables from your custom
      // order form are valid, you might have:
      //
      // $p->add_field('first_name', $_POST['first_name']);
      // $p->add_field('last_name', $_POST['last_name']);
      
      $payment = $_SESSION['sum'];
      $key = md5(date("Y-m-d:").rand());

      $p->add_field('business', 'boogie11cafe@business.com');
      $p->add_field('return', $this_script.'?action=success');
      $p->add_field('cancel_return', $this_script.'?action=cancel');
      $p->add_field('notify_url', $this_script.'?action=ipn');
      $p->add_field('item_name', 'Ordering');
      $p->add_field('amount', $payment);
      $p->add_field('key', $key);
      $p->add_field('currency_code', 'PHP');
      
      

      $p->submit_paypal_post(); // submit the fields to paypal
      //$p->dump_fields();      // for debugging, output a table of all the fields
      break;
      
   case 'success':      // Order was successful...
   
      // This is where you would probably want to thank the user for their order
      // or what have you.  The order information at this point is in POST 
      // variables.  However, you don't want to "process" the order until you
      // get validation from the IPN.  That's where you would have the code to
      // email an admin, update the database with payment status, activate a
      // membership, etc.  
      echo "<html>\n";
      echo "<body background=\"images\\vegetable.jpg\">\n";
      echo "<center><p><h1><b>ESTING'S FLOWERSHOP</b><h1></p></center>";
      echo "<center><p><h1><b>Thank You For Ordering</b><h1><br /></p></center>";
      echo "<br/><center><p><h2><b><a href='account.php'>Check your Account</a></b><h2><br /></p></center>";
      echo "</body></html>\n";
      
      // You could also simply re-direct them to another page, or your own 
      // order status page which presents the user with the status of their
      // order based on a database (which can be modified with the IPN code 
      // below).
      $tx = $_GET['tx'];

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

    //$transCode = "F-ORD".$code;

   $getQuery = mysql_query("SELECT * FROM cart1_tbl WHERE cart1_cust_id='$custID'");
   while($fetchQuery = mysql_fetch_array($getQuery))
   {
      $cart1_prod_id = $fetchQuery[1];
      $cart1_unit = $fetchQuery[3];
      $cart1_qty = $fetchQuery[4];
      $cart1_price = $fetchQuery[5];
      $sum = $sum + $fetchQuery[5];
      
      
      

      mysql_query("INSERT INTO cart2_tbl() VALUES(NULL, '$cart1_prod_id', '$cart1_qty', '$cart1_unit', '$cart1_price', '$custID', '$tx')");
   }

   mysql_query("DELETE FROM cart1_tbl WHERE cart1_cust_id='$custID'");

   mysql_query("INSERT INTO trans_tbl() VALUES(NULL, '$custID', '$tx', '$sum', '$orderDate', '$deliveryDate', '$deliveryAddress', 'Paid', '0', '0')");

   mysql_query("INSERT INTO payment_tbl() VALUES(NULL, '$custID', '$tx', '$sum', 'PayPal', '0', '0', '$sum', '0', '0', '$orderDate')");

   //print "INSERT INTO trans_tbl() VALUES(NULL, '$custID', '$tx', '$sum', '$orderDate', '$deliveryDate', '$deliveryAddress', 'Paid', '0', '0')";
   //print "<br>";
   //print "DELETE FROM cart1_tbl WHERE cart1_cust_id='$custID'";
      break;
      
   case 'cancel':       // Order was canceled...

      // The order was canceled before being completed.
 
 
      echo "<br/><p><b>The order was canceled!</b></p><br />";
    foreach ($_POST as $key => $value) { echo "$key: $value<br>"; }
      
      break;

      case 'ipn':          // Paypal is calling page for IPN validation...
   
      // It's important to remember that paypal calling this script.  There
      // is no output here.  This is where you validate the IPN data and if it's
      // valid, update your database to signify that the user has payed.  If
      // you try and use an echo or printf function here it's not going to do you
      // a bit of good.  This is on the "backend".  That is why, by default, the
      // class logs all IPN data to a text file.
      
      if ($p->validate_ipn()) { 
          
         // Payment has been recieved and IPN is verified.  This is where you
         // update your database to activate or process the order, or setup
         // the database with the user's order details, email an administrator,
         // etc.  You can access a slew of information via the ipn_data() array.
  
         // Check the paypal documentation for specifics on what information
         // is available in the IPN POST variables.  Basically, all the POST vars
         // which paypal sends, which we send back for validation, are now stored
         // in the ipn_data() array.
  
         // For this example, we'll just email ourselves ALL the data.
        
        $PaymentStatus =  $p->ipn_data['payment_status']; 
        $Email        =  $p->ipn_data['payer_email'];
        $id           =  $p->ipn_data['item_number'];
        
        if($PaymentStatus == 'Completed' or $PaymentStatus == 'Pending'){
            $PaymentStatus = '2';
        }else{
            $PaymentStatus = '1';
        }   
  } 
      break;
 }     

?>
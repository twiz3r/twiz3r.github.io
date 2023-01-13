<?php
	$date = date("Y-m-d");
	$date = strtotime("+3 days", strtotime($date));
    print $date = date("Y-m-d", $date);
?>
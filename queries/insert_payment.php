<?php 

	require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);
	
	$pid = NULL;
	$uid = $_REQUEST["uid"];
	$type = $_REQUEST["type"];
	$ccnum = $_REQUEST["ccnum"];
	$name = $_REQUEST["name"];
	$month = $_REQUEST["month"];
	$year = $_REQUEST["year"];
	$addr = $_REQUEST["addr"];
	$city = $_REQUEST["city"];
	$state = $_REQUEST["state"];
	$zip = $_REQUEST["zip"];
	
	if (isset($uid) && isset($type) && isset($ccnum) && isset($name) && isset($month)
	 && isset($year) && isset($addr) && isset($city) && isset($state) && isset($zip)) { // valid inputs
		 
		$user_query = mysql_query("SELECT uid FROM user WHERE uid='".$uid."'");
		
		if (mysql_num_rows($user_query) != 0) { // user ID is valid
			
			$insert_query = "INSERT INTO payment (pid, uid, type, ccnum, name, month, year, addr, city, state, zip) VALUES('".$pid."', '".$uid."', '".$type."', '".$ccnum."', '".$name."', '".$month."', '".$year."', '".$addr."', '".$city."', '".$state."', '".$zip."')";
			
			if (!mysql_query($insert_query, $RUCrazy)) { // attempts to insert into table
				die('Error: '.mysql_error());
			}
			
			$success = "success";
			
		} else { // invalid user ID
			
		}
		 
	 } else { // invalid or insufficient inputs
		 
	 }
	 
	 //header("Location: #");
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RU Crazy?</title>
	<!-- Stylesheets
	============================================= -->
    <link type="text/css" rel="stylesheet" href="../includes/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../includes/css/override.css" />
    <!-- Javascripts
	============================================= -->
	<script type="text/javascript" src="../includes/js/jquery.min.js"></script>
	<script type="text/javascript" src="../includes/js/bootstrap-2.0.2.js"></script>
    <script type="text/javascript" src="../includes/js/jquery.blueberry.js"></script>
    <!-- Functions
	============================================= -->
    <script>
	$(window).load(function() {
		$('.blueberry').blueberry();
	});
	</script>
</head>
<body>
	<br/>
	<div id="wrapper">
    <?php include"../includes/status.php" ?>
    
    <div id="header">RU Crazy</div>
    <br/>
    <?php include"../includes/top_nav.php"?>
  
    <div id="doc">
	<div id="content">
	
    <div align="center">
	<?php
		if ($success == "success") {
			echo "The link is currently under construction, please try back another time! =]";
		} else {
			echo "You shouldn't be here!<br/>";
		}
	?>
    </div>
    
	</div></div>
    <?php include"../includes/footer.php"?>
	</div>
</body>
</html>
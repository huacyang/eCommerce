<?php 
	require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);
	
	$uid = $_REQUEST["uid"];
	$pass = hash("md5", $_REQUEST["pass"], false);
	
	if (isset($uid) && isset($pass)) { // valid inputs
		 
		$query = sprintf("SELECT fname, lname FROM user WHERE uid='%s' AND pass='%s'",
					mysql_real_escape_string($uid),
					mysql_real_escape_string($pass));
					
		$user_query = mysql_query($query);
		
		if (mysql_num_rows($user_query) != 0) { // login successfully
			$success = "success";
		} else { // user ID and/or password is invalid
			$success = "invalid";
		}
	 }
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
    
    <?php
	// Start session first thing in script
  	session_start();
	?>
    
    <div id="header">RU Crazy</div>
    <br/>
    <?php include"../includes/top_nav.php"?>
  
    <div id="doc">
	<div id="content">
	
    <div align="center">
	<?php
		if ($success == "success") {
			echo "You have logined in successfully!<br/>";
			echo "Check out your account <a href=\"../about.php?uid=".$uid."\">here</a>";
		} else if ($success == "invalid") {
			echo "Invalid login and password combination, please try again.<br/>";
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
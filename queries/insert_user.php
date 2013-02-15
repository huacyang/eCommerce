<?php 
	require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);
	
	$uid = $_REQUEST["uid"];
	$pass = hash("md5", $_REQUEST["pass"], false);
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$phone = $_REQUEST["phone"];
	$campus = $_REQUEST["campus"];
	
	if (isset($uid) && isset($pass) && isset($fname) && isset($lname)) { // valid inputs
		
		$query = sprintf("SELECT uid FROM user WHERE uid='%s'",
					mysql_real_escape_string($uid));
		$user_query = mysql_query($query);
		
		if (mysql_num_rows($user_query) == 0) { // user ID is not taken
		
			isset($phone) ? $phone : "null";
			isset($campus) ? $campus : "null";
			
			$insert_query = sprintf("INSERT INTO `user` (`uid`, `pass`, `fname`, `lname`, `phone`, `campus`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
							 mysql_real_escape_string($uid),
							 mysql_real_escape_string($pass),
							 mysql_real_escape_string($fname),
							 mysql_real_escape_string($lname),
							 mysql_real_escape_string($phone),
							 mysql_real_escape_string($campus));
			
			if (!mysql_query($insert_query, $RUCrazy)) { // attempts to insert into table
				die('Error: '.mysql_error());
			}
			
			header('Location: http://isaw.biz/rucrazy/message.php?message=Thank you for creating your account!<br/>Please <a href="http://isaw.biz/rucrazy/login.php">login</a> log in and enjoy your benefits as a RU Crazy member!');
			
		} else { // user ID is already taken
			header('Location: http://isaw.biz/rucrazy/message.php?message=The user ID already exist!<br/>Please <a href="http://isaw.biz/rucrazy/login.php">login</a> if that was your account,<br/> otherwise try <a href="http://isaw.biz/rucrazy/registration.php">registering</a> again.');
		}
		 
	 } else { // invalid or insufficient inputs
	 	header('Location: http://isaw.biz/rucrazy/');
	 }
?>
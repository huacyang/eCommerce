<?php
	
	require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);

	$current = $_REQUEST['user'];
	$user_id = $_REQUEST["uid"];
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$phone = $_REQUEST["phone"];
	$campus = $_REQUEST["campus"];

	if(isset($user_id)){
		$query = "SELECT uid FROM user WHERE uid=' ".$current."' ";
		$user_query = mysql_query($query);
		
		if (mysql_num_rows($user_query) == 0) { // user ID is not taken

			mysql_query("UPDATE user SET uid='".$user_id."' WHERE uid='".$current."' ");
			
		}
	}
	if(isset($fname)){
		$query = "SELECT uid FROM user WHERE uid=' ".$current."' ";
		$user_query = mysql_query($query);
	
		if (mysql_num_rows($user_query) == 0) { // user ID is not taken

		mysql_query("UPDATE user SET fname='".$fname."' WHERE uid='".$current."' ");
		
		}
	}
	if(isset($lname)){
		$query = "SELECT uid FROM user WHERE uid=' ".$current."' ";
		$user_query = mysql_query($query);
	
		if (mysql_num_rows($user_query) == 0) { // user ID is not taken

		mysql_query("UPDATE user SET lname='".$lname."' WHERE uid='".$current."' ");
		
		}
	}
	if(isset($phone)){
		$query = "SELECT uid FROM user WHERE uid=' ".$current."' ";
		$user_query = mysql_query($query);
	
		if (mysql_num_rows($user_query) == 0) { // user ID is not taken

		mysql_query("UPDATE user SET phone='".$phone."' WHERE uid='".$current."' ");
		
		}
	}
	if(isset($campus)){
		$query = "SELECT uid FROM user WHERE uid=' ".$current."' ";
		$user_query = mysql_query($query);
	
		if (mysql_num_rows($user_query) == 0) { // user ID is not taken

		mysql_query("UPDATE user SET campus='".$campus."' WHERE uid='".$current."' ");
		
		}
	}

	header('Location: http://isaw.biz/rucrazy/message.php?message=Thank you for updating your account information!<br/>');
?>
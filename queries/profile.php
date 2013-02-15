<?php 

	function get_profile($uid){

		require_once('../../Connections/RUCrazy.php');
		mysql_select_db($database_RUCrazy, $RUCrazy);

		$result = mysql_query(
			"SELECT uid, fname, lname, phone, campus
			FROM  user WHERE uid='".$uid."'
			");

		if (!$result) {
		    die('Invalid query: ' . mysql_error());
		}


		return $row = mysql_fetch_assoc($result);
	}
?>
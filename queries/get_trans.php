<?php 

	function get_trans($uid){

		require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);

		$result = mysql_query(
			"SELECT uid, tid, cid, count, cost
			FROM  transaction WHERE uid='".$uid."'
			");

		if (!$result) {
		    die('Invalid query: ' . mysql_error());
		}

		return $row = mysql_fetch_assoc($result);
	}

	function get_item($pid){

		mysql_connect('localhost', 'root', '');
		mysql_select_db('rucrazy');

		$result = mysql_query(

			"SELECT pid, src, name, price, gender, brand, section
			FROM  product WHERE pid='".$pid."'
			");

		if (!$result) {
		    die('Invalid query: ' . mysql_error());
		}

		return $row = mysql_fetch_assoc($result);
	}
?>
<?php 

	
	if (isset($uid)) {
		$_SESSION['user'] = $uid;
	}
	
	if(!$_SESSION['user']){
		$_SESSION['user']='Guest';
	}
	
	if($_SESSION['user'] == 'Guest'){
		echo $_SESSION['user']." | ";
		include 'offline.php';
	}
	else{
		echo $_SESSION['user']." | ";
		include 'online.php';
	}
	/*require_once('../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);*/
?>
	 | <a href="http://isaw.biz/rucrazy/products/cart.php">shopping cart (#)</a><br/><a href="http://isaw.biz/rucrazy/registration.php">new customer?</a>

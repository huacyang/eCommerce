<?php 
	require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);
	
	$pid = $_REQUEST["pid"];
	$back = $_REQUEST["back"];
	
	if (isset($pid)) { // valid inputs
		 
		$query = "SELECT p.src, p.name, p.desc, p.price, s.sale
				  FROM product p LEFT JOIN sales s ON p.pid=s.pid
				  WHERE p.pid='".$pid."'";
				  
		$search_query = mysql_query($query);
		
		if (!$search_query) {
    		$success = "invalid";
		} else {
			$success = "success";
			$row = mysql_fetch_array($search_query);
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
	<?php if ($success == "success") { ?>
    	
    <table>
   	<tr>
    	<td>
        <p><img src="<?= $row['src'] ?>" /></p>
        </td><td width="50px"></td><td width="400px">
        <p><h3>Name:</h3></p>
        <p><?= $row['name'] ?></p>
        <p><h3>Price:</h3></p>
        <p>
		<?php if (isset($row['sale'])) {
				echo 'Was: $'.$row['price'].'<br/>';
				echo 'Now: <font color="red">$'.$row['sale'].'</font>';
			  }
			  else {
				echo '$'.$row['price'];
			  }
		?></p>
        <p><h3>Description:</h3></p>
        <p><?= $row['desc'] ?></p>
        </td>
    </tr>
    <tr>
    	<td align="center">
        <form id="form1" name="form1" method="post" action="cart.php">
          <input type="hidden" name="pid" id="pid" value="<?= $row['src'] ?>" />
          <input type="submit" name="button" id="button" value="Add to Shopping Cart" />
  		</form>
        </td><td></td><td align="center">
        <form method="post" action="<?= $back ?>.php">
          <input type="submit" name="button" value="Back" />
        </form>
        </td>
    </tr>
    </table>    
		
    <?php } else {
			echo "You shouldn't be here!<br/>";
		  }
	?>
    </div>
    
	</div></div>
    <?php include"../includes/footer.php"?>
	</div>
</body>
</html>
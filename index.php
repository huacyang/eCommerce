<?php 
	require_once('../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);
	
	$search = "SELECT p.pid AS pid, p.src AS src 
			   FROM sales s LEFT JOIN product p ON p.pid=s.pid
			   ORDER BY s.pid DESC";
	
	$search_query = mysql_query($search);
							 
	if (!$search_query) {
    	die('Invalid query: ' . mysql_error());
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RU Crazy?</title>
	<!-- Stylesheets
	============================================= -->
    <link type="text/css" rel="stylesheet" href="includes/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/override.css" />
    <!-- Javascripts
	============================================= -->
	<script type="text/javascript" src="includes/js/jquery.min.js"></script>
	<script type="text/javascript" src="includes/js/bootstrap-2.0.2.js"></script>
    <script type="text/javascript" src="includes/js/jquery.blueberry.js"></script>
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
    <?php include"includes/status.php" ?>
    
    <div id="header">RU Crazy</div>
    <br/>
    <?php include"includes/top_nav.php"?>
  
    <div id="doc">
	<div id="content">

	<!-- #start-blueberry-slideshow -->
    <div class="blueberry">
      <ul class="slides">
        <?php
		$row = mysql_fetch_array($search_query);
		do { 
			$row = str_replace("../", "", $row);
		?>
        <li>
        	<a href="products/index.php?pid=<?= $row['pid'] ?>&back=../index">
        	<img src="<?= $row['src'] ?>" /></a>
        </li>
		<?php } while ($row = mysql_fetch_array($search_query)); ?>
      </ul>
    </div><!-- #end-blueberry -->
    
	</div></div>
    <?php include"includes/footer.php"?>
	</div>
</body>
</html>
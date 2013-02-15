<?php 
	require_once('../../Connections/RUCrazy.php');
	mysql_select_db($database_RUCrazy, $RUCrazy);
	
	$filter = $_REQUEST["filter"];
	$sort = $_REQUEST["sort"];
	
	if (!isset($filter) || $filter == NULL) { $filter = "%"; }
	if (!isset($sort) || $sort == NULL) { $sort = "pid"; }
	
	$search = "SELECT p.pid AS pid, p.src AS src, p.name AS name, p.price AS price, s.sale AS sale 
			   FROM product p LEFT JOIN sales s ON p.pid=s.pid
			   WHERE p.gender='female' AND p.section LIKE '".$filter."'
			   ORDER BY p.".$sort." DESC";
	
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
    <link type="text/css" rel="stylesheet" href="../includes/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="../includes/css/override.css" />
    <!-- Javascripts
	============================================= -->
	<script type="text/javascript" src="../includes/js/jquery.min.js"></script>
	<script type="text/javascript" src="../includes/js/bootstrap-2.0.2.js"></script>
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
    <?php include"../includes/top_nav.php" ?>
  
    <div id="doc">
	<div id="content">

	<div align="center"><img src="../includes/images/banners/Womens.jpg" /></div>
    
<br /><br />
	
    <div align="center"><h2>Womens Selection</h2></div>

<div id="products">
<table width="90%" border="0" cellpadding="10px" align="center" style="text-align:center">
	<tr>
    	<form action="womens.php" method="post">
    	<td><b>FILTER BY:</b>&nbsp;
        <select id="" name="filter">
        <option value="">All</option>
        <option value="top">Top</option>
        <option value="bottom">Bottom</option>
        <option value="shoes">Shoes</option>
        </select>
    	</td><td>
        <b>SORT BY:</b>&nbsp;
        <select id="" name="sort">
        <option value="">What's New</option>
        <option value="price">Price - High to Low</option>
        </select>
        </td><td>
        <input type="submit" value="Submit">
        </td>
        </form>
    </tr>
	<tr>
    <?php
		$row = mysql_fetch_array($search_query);
		$count = 0;
		do {
			$count++;
			if ($count == 5) {
				$count = 1;
				echo '</tr><tr>';
			}
	?>
        <td><a href="index.php?pid=<?= $row['pid'] ?>&back=womens">
        <img src="<?= $row['src'] ?>" width="200" height="200" /><br/>
		<?= $row['name'] ?><br/>
        <?php if (isset($row['sale'])) { echo 'Was: $'.$row['price'].'<br/>Now: <font color="red">$'.$row['sale'].'</font>'; } 
			   else { echo '$'.$row['price']; } ?></a></td>
	<?php } while ($row = mysql_fetch_array($search_query)); ?>
	</tr>
</table>
</div>


	</div></div>
    <?php include"../includes/footer.php"?>
	</div>
</body>
</html>
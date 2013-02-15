<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RU Transacting?</title>
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
</head>
<body>
	<br/>
	<div id="wrapper">
    <?php include"includes/status.php" ?>
    
    <div id="header">RU Crazy</div>
    <br/>
    <?php include"includes/top_nav.php" ?>
  
    <div id="doc">
    	<div id="content" align="center">
            <?php 
                include"queries/get_trans.php";
                $result = get_trans($_SESSION['user']);
            ?>

            <p>Email: <?= $result['uid'] ?></p>
            <p>Tid: <?= $result['tid'] ?></p>
            <p>CID: <?= $result['cid'] ?></p>
            <p>Count: <?= $result['count'] ?></p>
            <p>Cost: <?= $result['cost'] ?></p>
            <a href="account_edit.php">Edit Account Information</a>
    	</div>
    </div>
    <?php include"includes/footer.php" ?>
	</div>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RU Login</title>
	<!-- Stylesheets
	============================================= -->
    <link type="text/css" rel="stylesheet" href="includes/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="includes/css/override.css" />
    <!-- Javascripts
	============================================= -->
	<script type="text/javascript" src="includes/js/jquery.min.js"></script>
	<script type="text/javascript" src="includes/js/bootstrap-2.0.2.js"></script>
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
	<div id="content">
    
    <div align="center">
    <?php 
		if (isset($_GET['message'])) {
			echo $_GET['message'];
		}
	?>
    </div>

	<div align="center" style="font-size:18px">
    	<h2>User Login</h2><br/>
    	<form action="queries/insert_login.php" method="POST">
        	&nbsp;Login ID*:
            <input size="25" type="text" placeholder="Enter Login ID" required name="uid"/><br />
            Password*:
            <input size="25" type="password" placeholder="Enter Password" required name="pass"/><br />
            <input type="submit" value="Submit">
        </form>
    </div>
    <div align="center" style="font-size:12px">
        <a href="/">Forgot login ID?</a>&nbsp;
        <a href="/">Forgot password?</a>
    </div>
    
	</div></div>
    <?php include"includes/footer.php"?>
	</div>
</body>
</html>
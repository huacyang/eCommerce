<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RU Register?</title>
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
    <?php include"includes/top_nav.php"?>
  
    <div id="doc">
	<div id="content">

	<div align="center" style="font-size:18px">
    	<h2>Account Creation</h2><br/>
        <p>* required field</p><br/>
    	<form action="queries/insert_user.php" method="POST">
        <table>
            <tr>
            	<td align="right">
            	Login ID*:&nbsp;
            	</td><td>
            	<input size="25" type="text" placeholder="Enter Email Address" required name="uid"/>
            	</td>
            </tr><tr>
            	<td align="right">
            	Password*:&nbsp;
            	</td><td>
            	<input size="25" type="password" placeholder="Enter Password" required name="pass"/>
            	</td>
            </tr><tr>
            	<td align="right">
            	First Name*:&nbsp;
            	</td><td>
            	<input size="25" type="text" placeholder="Enter First Name" required name="fname"/>
            	</td>
            </tr><tr>
            	<td align="right">
            	Last Name*:&nbsp;
            	</td><td>
            	<input size="25" type="text" placeholder="Enter Last Name" required name="lname"/>
            	</td>
            </tr><tr>
            	<td align="right">
            	Phone:&nbsp;
                </td><td>
            	<input size="25" type="text" placeholder="Enter Phone Number" name="phone"/>
            	</td>
            </tr><tr>
            	<td align="right">
            	Campus:&nbsp;
                </td><td>
            	<select name="campus">
                    <option value="">Select Campus</option>
                    <option value="bs">Busch</option>
                    <option value="li">Livingston</option>
                    <option value="ca">College Ave</option>
                    <option value="cd">Cook/Douglass</option>
            	</select>
                </td>
            </tr><tr>
				<td colspan="2" align="center"><input type="submit" value="Submit"></td>
            </tr>
        </table>
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
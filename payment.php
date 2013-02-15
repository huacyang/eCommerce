<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RU Payment</title>
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
	<div id="wrapper"><a href="#">login</a> | shopping cart (<a href="#">#</a>)<br/><a href="#">new customer?</a>
    <div id="header">RU Crazy</div>
    <br/>
    <?php include"includes/top_nav.php"?>
    
    <div id="doc">
	<div id="content">

	<div align="center" style="font-size:18px">
    	<h2>Please enter payment information</h2><br/>
        <p>* required field</p><br/>
    	<form action="queries/insert_payment.php" method="post">
        <table>
        <tr>
        	<td align="right">
            Credit Card Type*:&nbsp;
            </td><td>
        	<select name="cctype">
            	<option name="visa">Visa</option>
                <option name="mastercard">Mastercard</option>
                <option name="discover">Discover</option>
                <option name="express">American Express</option>
			</select>
            </td>
        </tr><tr>
        	<td align="right">
            Credit Card Number*:&nbsp;
            </td><td>
            <input size="25" type="text" placeholder="Enter Credit Card Number" required name="ccnumber"/>
            </td>
        </tr><tr>
        	<td align="right">
            Cardholder Name*:&nbsp;
            </td><td>
            <input size="50" type="text" placeholder="Enter Cardholder Name" required name="ccname"/>
            </td>
        </tr><tr>
        	<td align="right">
            Card Exp. Date*:&nbsp;
            </td><td>
            <select name="month" style="width:48%" required>
            	<option name="">Month</option>
                <option name="1">January</option>
                <option name="2">February</option>
                <option name="3">March</option>
                <option name="4">April</option>
                <option name="5">May</option>
                <option name="6">June</option>
                <option name="7">July</option>
                <option name="8">August</option>
                <option name="9">September</option>
                <option name="10">October</option>
                <option name="11">November</option>
                <option name="12">December</option>
			</select>
            <select name="year" style="width:48%" required>
                <option name="">Year</option>
                <option name="12">2012</option>
				<option name="13">2013</option>
                <option name="14">2014</option>
                <option name="15">2015</option>
                <option name="16">2016</option>
                <option name="17">2017</option>
                <option name="18">2018</option>
                <option name="19">2019</option>
                <option name="20">2020</option>
                <option name="21">2021</option>
                <option name="22">2022</option>
                <option name="23">2023</option>
                <option name="24">2024</option>
                <option name="25">2025</option>
			</select>
            </td>
		</tr><tr>
        	<td align="right">
            Billing Address*:&nbsp;
            </td><td>
            <input size="50" type="text" placeholder="Enter Cardholder's Street Address" required name="bst"/>
            </td>
        </tr><tr>
        	<td align="right">
            Billing City*:&nbsp;
            </td><td>
            <input size="50" type="text" placeholder="Enter Cardholder's City" required name="bcity"/>
            </td>
        </tr><tr>
        	<td align="right">
            State*:&nbsp;
            </td><td>
            <select name="state" required>
            	<option name="">State</option>
				<option name="al">Alabama</option>
                <option name="ak">Alaska</option>
                <option name="az">Arizona</option>
                <option name="ar">Arkansas</option>
                <option name="ca">California</option>
                <option name="co">Colorado</option>
                <option name="ct">Connecticut</option>
                <option name="de">Delaware</option>
                <option name="fl">Florida</option>
                <option name="ga">Georgia</option>
                <option name="hi">Hawaii</option>
                <option name="id">Idaho</option>
                <option name="il">Illinois</option>
                <option name="in">Indiana</option>
                <option name="ia">Iowa</option>
                <option name="ks">Kansaa</option>
                <option name="ky">Kentucky</option>
                <option name="la">Louisiana</option>
                <option name="me">Maine</option>
                <option name="md">Maryland</option>
                <option name="ma">Massachusetts</option>
                <option name="mi">Michigan</option>
                <option name="mn">Minnesota</option>
                <option name="ms">Mississippi</option>
                <option name="mo">Missouri</option>
                <option name="mt">Montana</option>
                <option name="ne">Nebraska</option>
                <option name="nv">Nevada</option>
                <option name="nh">New Hampshire</option>
                <option name="nj">New Jersey</option>
                <option name="nm">New Mexico</option>
                <option name="ny">New York</option>
                <option name="nc">North Carolina</option>
                <option name="nd">North Dakota</option>
                <option name="oh">Ohio</option>
                <option name="ok">Oklahoma</option>
                <option name="or">Oregon</option>
                <option name="pa">Pennsylvania</option>
                <option name="ri">Rhode Island</option>
                <option name="sc">South Carolina</option>
                <option name="sd">South Dakota</option>
                <option name="tn">Tennessee</option>
                <option name="tx">Texas</option>
                <option name="ut">Utah</option>
                <option name="vt">Vermont</option>
                <option name="va">Virginia</option>
                <option name="wa">Washington</option>
                <option name="wv">West Virginia</option>
                <option name="wi">Wisconsin</option>
                <option name="wy">Wyoming</option>
			</select>
            </td>
		</tr><tr>
        	<td align="right">
            Zip Code*:&nbsp;
            </td><td>
			<input size="25" type="text" placeholder="Enter Cardholder's Zip Code" required name="zcode"/>
			</td>
        </tr><tr>
        	<td>&nbsp;</td><td>
            <input type="submit" value="Submit">
            </td>
        </tr>
        </table>
		</form>
    </div>
    
	</div></div>
    <?php include"includes/footer.php"?>
	</div>
</body>
</html>
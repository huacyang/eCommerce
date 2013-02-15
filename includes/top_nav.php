	<div id="navbar">
    <ul>
        <li id="home" class=""><a href="http://isaw.biz/rucrazy/"><b>Home</b></a></li>
        <li id="all" class=""><a href="http://isaw.biz/rucrazy/products/all.php"><b>All</b></a></li>
        <li id="mens" class=""><a href="http://isaw.biz/rucrazy/products/mens.php"><b>Mens</b></a></li>
        <li id="womens" class=""><a href="http://isaw.biz/rucrazy/products/womens.php"><b>Womens</b></a></li>
        <li id="brands" class=""><a href="http://isaw.biz/rucrazy/products/brands.php"><b>Brands</b></a></li>
        <li id="misc" class=""><a href="http://isaw.biz/rucrazy/products/misc.php"><b>Miscellaneous</b></a></li>
        <li id="sales" class=""><a href="http://isaw.biz/rucrazy/products/sales.php"><b>Sales</b></a></li>
        <li id="about" class=""><a href="http://isaw.biz/rucrazy/about/"><b>About</b></a></li>
    </ul>
	</div>
    <!-- Will set the corresponding tag to active -->
    <script>
		var url = document.URL, index = 0, found = false;
		var token = url.split("/");
		for(var i = 0; i < token.length; i++) {
			if (token[i] == "all.php") {
				document.getElementById("all").className = "active";
				found = true;
				break;
			} else if (token[i] == "mens.php") {
				document.getElementById("mens").className = "active";
				found = true;
				break;
			} else if (token[i] == "womens.php") {
				document.getElementById("womens").className = "active";
				found = true;
				break;
			} else if (token[i] == "sports.php") {
				document.getElementById("sports").className = "active";
				found = true;
				break;
			} else if (token[i] == "brands.php") {
				document.getElementById("brands").className = "active";
				found = true;
				break;
			} else if (token[i] == "misc.php") {
				document.getElementById("misc").className = "active";
				found = true;
				break;
			} else if (token[i] == "sales.php") {
				document.getElementById("sales").className = "active";
				found = true;
				break;
			} else if (token[i] == "about") {
				document.getElementById("about").className = "active";
				found = true;
				break;
			} else if (token[i] == "contact") {
				document.getElementById("about").className = "active";
				found = true;
				break;
			} 
		}
		if (!found) {
			document.getElementById("home").className = "active";
		}
	</script>
    
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
 	 	<meta http-equiv="Content-Type" content="text/html">
		<title>Close Action Airsoft</title>
		<script type="text/javascript">
		function checkIE(){
			if (navigator.userAgent.indexOf("MSIE 10") > -1) {
				document.body.classList.add("ie10");
			}else{
			}
		}
		</script>
		<style>
			.ie10>.container>nav>ul>li:last-child {
				padding-right: 23px !important;
			}

		</style>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	</head>
	<body onload="checkIE();">
		<div class="container-loc">
			<nav>
				<ul>
					<li><a href="index.html">HOME</a></li>
					<li><a href="booking.html">BOOKING</a></li>
					<li style="background-color: #799145; color: #FFFFFF; box-shadow: 1.5px 1.5px 10px #000000;"><a>GALLERY</a></li>
					<li><a href="location.html">LOCATION</a></li>
					<li><a href="equipment.html">EQUIPMENT</a></li>
					<li><a href="ukara.html">UKARA</a></li>
				</ul>
			</nav>
			<section>
				<div class="banner">
					<h1 style="text-align: center; margin-bottom: 0px; margin-top: 0px;"><strong>GALLERY</strong></h1>
					<p style="text-align: center; margin: 0px;">Want to see what you will be experiencing?</p>
				</div>
				<div class="content">
					<?php

					if ($handle = opendir('images/gallery')) {
					    while (false !== ($entry = readdir($handle))) {
					        if ($entry != "." && $entry != "..") {
					        	// entry var holds the image name - images/gallery/$entry will be the url to the image
					            // echo "<img class='lazy' data-original='images/gallery/$entry'></img>";
					        }
					    }
					    closedir($handle);
					}

					?>
				</div>
			</section>
		</div>
		<footer>
				<p style="margin-left: 30px; padding-top: 15px;"><strong style="margin-right: 300px;">Close Action Airsoft | Pixel Blue-Print</strong>   Contact Email: enquiries@close-action.co.uk</p>
		</footer>
	</body>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script>
	$(function() {
   		$("img.lazy").lazyload();
	});
	</script>
	<script src="lazyload.min.js" type="text/javascript"></script>
</html>
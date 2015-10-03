<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../../../icon.png" sizes="16x16" type="image/png">
	<meta name="author" content="Magnus Fernandes">
	<meta name="description" content="The official website of Aashna Kuncolienkar.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ANK Beats | GALLERIA</title>
	<style>
		.loader{background-color:#fff;width:100%;height:100%;position:fixed;top:0;left:0;z-index:999}.load{position:absolute;top:50%;left:50%;margin-top:-100px;margin-left:-100px;width:200px;height:200px;background-image:url(../images/loader.png);-webkit-background-size:100% 200%;background-size:100% 200%;background-repeat:no-repeat;-webkit-animation-name:change;-webkit-animation-duration:1s;-webkit-animation-timing-function:steps(2);-webkit-animation-iteration-count:infinite;-webkit-animation-direction:normal;-moz-animation-name:change;-moz-animation-duration:1s;-moz-animation-timing-function:steps(2);-moz-animation-iteration-count:infinite;-moz-animation-direction:normal;-ms-animation-name:change;-ms-animation-duration:1s;-ms-animation-timing-function:steps(2);-ms-animation-iteration-count:infinite;-ms-animation-direction:normal;-o-animation-name:change;-o-animation-duration:1s;-o-animation-timing-function:steps(2);-o-animation-iteration-count:infinite;-o-animation-direction:normal;animation-name:change;animation-duration:1s;animation-timing-function:steps(2);animation-iteration-count:infinite;animation-direction:normal}@-webkit-keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}@keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}
	</style>
	<link rel="stylesheet" href="../css/all.css">
</head>
<body onload="hideloader()">
	<div class="loader">
		<div class="load"></div>
	</div>
	<div class="mainwrapper">
		<section class="menu">
			<div class="link">
				<a href="../../../"><p class="right-border">Home</p></a>
			</div>
			<div class="link">
				<a href="../../../About/"><p>About Me</p></a>
			</div>
			<div class="logo link">
				<img src="../images/logo.png" alt="AK Beats" class="img-responsive">
			</div>
			<div class="link">
				<a href="../../"><p class="right-border">Gallery</p></a>
			</div>
			<div class="link">
				<a href="../../../Contact/"><p>Contact Me</p></a>
			</div>
		</section>
		<section class="section gallery">
			<h1>FIRST</h1>
			<div class="pics">
				<?php
					$i = 1;
					again:
					if (file_exists("images/" . $i . ".jpg")) {
						echo '<a href="#"><div class="pic"><img src="images/' . $i . '.jpg" alt="DEFAULT" class="img-responsive"></div></a>';
						$i = $i + 1;
						goto again;
					}
				?>
			</div>
		</section>
		<section class="footer">
			<h4>AASHNA KUNCOLIENKAR &copy; | 2015</h4>
		</section>
	</div>
<script src="../../../js/lib/jquery.min.js"></script>
<script src="../js/all.js"></script>
</body>
</html>
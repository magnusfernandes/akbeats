<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../icon.png" sizes="16x16" type="image/png">
	<meta name="author" content="Magnus Fernandes">
	<meta name="description" content="The official website of Aashna KUNKOLIENKER.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ANK Beats | Contact</title>
	<style>
		.loader{background-color:#fff;width:100%;height:100%;position:fixed;top:0;left:0;z-index:999}.load{position:absolute;top:50%;left:50%;margin-top:-100px;margin-left:-100px;width:200px;height:200px;background-image:url(../images/loader.svg);-webkit-background-size:100% 200%;background-size:100% 200%;background-repeat:no-repeat;-webkit-animation-name:change;-webkit-animation-duration:1s;-webkit-animation-timing-function:steps(2);-webkit-animation-iteration-count:infinite;-webkit-animation-direction:normal;-moz-animation-name:change;-moz-animation-duration:1s;-moz-animation-timing-function:steps(2);-moz-animation-iteration-count:infinite;-moz-animation-direction:normal;-ms-animation-name:change;-ms-animation-duration:1s;-ms-animation-timing-function:steps(2);-ms-animation-iteration-count:infinite;-ms-animation-direction:normal;-o-animation-name:change;-o-animation-duration:1s;-o-animation-timing-function:steps(2);-o-animation-iteration-count:infinite;-o-animation-direction:normal;animation-name:change;animation-duration:1s;animation-timing-function:steps(2);animation-iteration-count:infinite;animation-direction:normal}@-webkit-keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}@keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}
	</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body onload="hideloader()">
	<div class="loader">
		<div class="load"></div>
	</div>
	<div class="mainwrapper">
		<div class="mobile">
			<section class="btn">-</section>
			<section><h3>ANK beats</h3></section>
			<ul>
				<li><a href="../"><h4>Home</h4></a></li>
				<li><a href="../About/"><h4>About Me</h4></a></li>
				<li><a href="../Gallery/"><h4>Gallery</h4></a></li>
				<li class="active"><a href="#"><h4>Contact Me</h4></a></li>
			</ul>
		</div>
		<section class="menu">
			<div class="link">
				<a href="../"><p class="right-border">Home</p></a>
			</div>
			<div class="link">
				<a href="../About/"><p>About Me</p></a>
			</div>
			<div class="logo link">
				<img src="../images/logo.png" alt="AK Beats" class="img-responsive">
			</div>
			<div class="link">
				<a href="../Gallery/"><p class="right-border">Gallery</p></a>
			</div>
			<div class="link active">
				<a href="#"><p>Contact Me</p></a>
			</div>
		</section>
		<div id="map" class="section map"></div>
		<div class="contact section">
			<form name="cform" method="post" action="mail.php">
				<h1><span>CONTACT ME!!</span></h1>
				<article>
					<div>Name</div>
					<input type="text" name="fname" required>
				</article>
				<article>
					<div>Email</div>
					<input type="email" name="email" required>
				</article>
				<article>
					<div>Phone</div>
					<input type="number" name="cno" required>
				</article>
				<article>
					<div>Message</div>
					<textarea name="message" required id="message" cols="30" rows="10"></textarea>
				</article>
				<article class="button">
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
				</article>
			</form>

		</div>
		<section class="footer">
			<h4>AASHNA KUNKOLIENKER &copy; | 2015</h4>
			<p>Powered by <a href="http://www.amberzile.com">Amber<span>Zile</span></a></p>
		</section>
		<section class="social">
			<a href="https://www.youtube.com/channel/UC-n9Vqug6-XxTyoufI6r3fg" target="_blank"><div class="youtube"><img src="../images/yt.svg" class="img-responsive" alt="Youtube"></div><h4>YOUTUBE</h4></a>
			<a href="https://www.facebook.com/ankbeats.comOfficial" target="_blank"><div class="facebook"><img src="../images/fb.svg" class="img-responsive" alt="Facebook"></div><h4>FACEBOOK</h4></a>
		</section>
	</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      center: new google.maps.LatLng(15.4776515,73.801693),
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions)
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="../js/lib/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
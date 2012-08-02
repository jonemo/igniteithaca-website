<?php
	@include ('config.inc.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 	
	<?php
		// the second part of the title is dynamic
		$titlePart2 = 'enlighten us but make it quick';	// default
		if ($nextEventAnnounced && !empty($nextEventReadableDate))
		{
			$titlePart2 = $nextEventReadableDate;	// use the 
		}
	?>
	<title>Ignite Ithaca - <?php echo $titlePart2; ?></title> 
	
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/themes/base/jquery-ui.css" type="text/css" media="all" /> 
	
	<style> 
		html, body {margin:0; padding:0; height:100%; font-family: 'Helvetica Neue', Helvetica, Arial, Geneva, sans-serif;}
		body {border-top:5px solid #c91825; background:#c91825}
		
		#ignith2 {font-family: 'Yanone Kaffeesatz', arial, serif; text-decoration:none; font-size:1.1em;color: #223343; text-align:right; padding: 0 120px 0 0; background-repeat:no-repeat; background-image:url('were-back.png')}
	
		#abovefold {background:#fff; background-image:url('themap.gif'); background-repeat:no-repeat; background-position: center top; width:100%; height:300px; margin: 0 auto;}	
		#ignite-ithaca-is {width:475px; font-family: 'Yanone Kaffeesatz', arial, serif; text-decoration:none; font-size:1.7em; color: #223343; text-align:right; position:absolute; left:50%; top:175px; margin-left:-50px}
		#ignite-ithaca-logo {position:absolute; top:10px; left:50%; margin-left:-300px}
		#come-to-next-event {position:absolute; top:37px; left:50%; margin-left:185px}
		#home-link {border:0;  position:absolute; left:50%; top:20px; margin-left:-400px}
		#postit {position:absolute; top:5px; left:50%; margin-left:125px}
		
		#navibar {width:100%; height:25px; padding:10px 0; background: #223343; color: #fff; text-align:center}
		#navibar-wrapper {width:850px; margin:0 auto;}
		#navibar a, #navibar a:visited {font-family: 'Yanone Kaffeesatz', arial, serif; text-decoration:none; color: #fff; display:block; width:14%; float:left; font-size: 1.1em}
		#navibar a:hover {color:#8493a0}
		
		#belowfold {background:#fff; width:100%; padding:40px 0; text-align:center; min-height:500px}
		#belowfold-wrapper {width:850px; margin:0 auto; text-align:left}
		.post-date {font: normal normal normal 14px/1.5em 'Helvetica Neue', Helvetica, Arial, sans-serif; letter-spacing: 0.1em; text-transform: uppercase; color: #e00000; border-bottom: 1px solid #e00000; margin-bottom: 1.5em;}
		#belowfold h2 {font-family: 'Yanone Kaffeesatz', arial, serif; font-size: 1.7em; font-weight:100; margin:0.83em 0 0.13em 0}
		
		a, a:visited {color:#223343; text-decoration:underline}
		
		#footer {width:100%; padding:40px 0 80px 0; text-align:center;font-family: 'Yanone Kaffeesatz', arial, serif; text-decoration:none; color:#fff}
		#footer-wrapper {width:850px; margin:0 auto; text-align:left}
		#footer-col1 {width:250px; float:left}
		#footer-col2 {width:250px; float:left}
		#footer-col3 {width:250px; float:left}
		#footer a, #footer a:visited {color:#fff}
		
		#belowfold .video-event {display:block; padding:7px; margin:0 50px 20px 0; width:100%; background: #223343; color:#fff; font-family: 'Yanone Kaffeesatz', arial, serif; text-decoration:none; line-height:1em; background-image:url('tab-arrow.png'); background-position:right center; background-repeat:no-repeat}
		
		/* #belowfold .ui-tabs-selected .video-event {background:#223343} */
		
		#belowfold .video-event h2 {font-family: 'Yanone Kaffeesatz', arial, serif; font-size:1.2em; padding:0; margin:0}
		#belowfold .video-event p {font-size:0.8em}
		#belowfold .eventtabs {margin: 0 0 0 380px; padding:0}
		#tabs ul {list-style-type:none; margin:0; padding:0; width:300px; float:left; border:0; background:#fff}
		#tabs li {margin:0; padding:0; border:0; background:#fff; width:100%}
		#tabs {background:#fff; border:0; padding:0; margin:0}
		.talk {border-bottom-left-radius: 4px 4px; border-bottom-right-radius: 4px 4px; border-top-left-radius: 4px 4px; border-top-right-radius: 4px 4px; clear:right; padding-bottom:30px; font-size:0.8em}
		.talk img {float:right; padding:0 0 20px 20px}
		
	</style> 

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.3/jquery-ui.min.js" type="text/javascript"></script> 
	
	<script src="http://maps.google.com/maps?file=api&v=2&key=ABQIAAAAJHcAh85fCos8s2oY3t1AKhTaDDOmX-vNYSm8Q8ULZ_vsrCgFshREwBZMoB5HXgvER86QYTTBnFQASw"></script>
	<script src="http://dev.virtualearth.net/mapcontrol/mapcontrol.ashx?v=6"></script>
	<script src="http://openlayers.org/api/OpenLayers.js"></script>
	<script type="text/javascript" src="http://tile.cloudmade.com/wml/latest/web-maps-lite.js"></script>
	<script type="text/javascript" charset="utf-8" src="http://mapstraction.googlecode.com/svn/trunk/source/mxn.js?(microsoft, openlayers, cloudmade)"></script>
	<script type="text/javascript">
		var mapstraction;
		var mapstraction2;
		var cloudmade_key = "4998f04c009349978f840515d5a8a576";
  </script>


</head> 
<body>
	<div id="abovefold">
		<div id="ignite-ithaca-is">IGNITE ITHACA is a high-energy evening of 5-minute talks by people who have an idea &ndash; and the guts to get onstage and share it with their hometown crowd.</div>
		<!--
			<img id="postit" src="postit.png" width="330" height="171" alt="Come to our next event: Nov 6, 2010, Pixel Lounge, Ithaca" />
			<img id="come-to-next-event" src="come-to-next-event.png" width="229" height="75" alt="Come to our next event: Nov 6, 2010, Pixel Lounge, Ithaca" />
		-->
		<a href="/"><img id="home-link" src="spacer.gif" width="300" height="230" alt="go home" /></a>
	</div>
	
	<div id="navibar">
		<div id="navibar-wrapper">
			<a href="http://igniteithaca.tumblr.com">news (the blog)</a>
			<a href="events.php">events</a>
			<a href="videos.php">videos</a>
			<a href="about.php">about</a>
			<a href="attend.php">attend</a>
			<a href="speak.php">speak</a>
			<a href="sponsor.php">sponsor</a>
		</div>
	</div>
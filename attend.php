<?php include ('page_head.inc.php'); ?>

	<div id="belowfold">
		<table id="belowfold-wrapper"><tr>
			<td valign="top">

			</td>
			<td width="470">
			
			<?php
			
			if ($nextEventAnnounced)
			{
			
			?>
			
				<h2>Where & When</h2>
				<p>Saturday, November 6, 2010, 6.30pm</p>
				<p><a href="http://pixelithaca.com/">Pixel Lounge</a>, 107 Dryden Road, Ithaca, NY 14850</p>
				
				<p><strong>Pixel Lounge is a bar and therefore only persons aged 21 or over can attend. We're sorry, it's the law.</strong></p>
				
				<h2>What to bring</h2>
				<p>Please bring lots of enthusiasm and excitement for fresh ideas. Also don't forget to bring your friends. An ID to proof your age might be needed to get into the venue depending on how young you look.</p>
				
				<h2>Catering</h2>
				<p>The bar at Pixel Lounge is stocked with a fine drinks selection including 24 beers on draft. You can read all the details <a href="http://pixelithaca.com/drinks/">on their website</a>. We encourage you to try! No food is served in the venue. If you are from out of town, you'll be able to grab a quick snack or big dinner at any of the gazillions of Collegetown restaurants nearby.</p>
				
				<h2>Maps?</h2>
				<p>The venue is in a side alley on the southern side of Dryden Road in Ithaca. It's near the Bubble Tea place and Subway. Enough talking, here is an aerial photo:
				<p>
					<div id='myMap' style="position:relative; width:100%; height:400px;"></div>
				</p>
				<script type="text/javascript">
					mapstraction = new mxn.Mapstraction('myMap','microsoft');
					var PixelLounge = new mxn.LatLonPoint(42.4419, -76.4868888258934);
					mapstraction.setCenterAndZoom(PixelLounge, 16);
					mapstraction.addControls({
						pan: true, 
						zoom: 'small',
						map_type: true 
					});
					mapstraction.setMapType(mxn.Mapstraction.SATELLITE);
					mapstraction.getMap().SetBirdseyeScene(new VELatLong(42.441650, -76.4868888258934));
					
					// create a marker positioned at a lat/lon 
					my_marker = new mxn.Marker(PixelLounge);
					my_marker.setIcon('http://mapstraction.com/icon.gif');
					mapstraction.addMarker( new mxn.Marker(PixelLounge));

					// add a label to the marker
					my_marker.setLabel("<blink>Hello!</blink>");
					var text = "<b>Be Happy!</b>";

					// add info bubble to the marker
					my_marker.setInfoBubble(text);

					// display marker 
					mapstraction.addMarker(my_marker);
					var foo = function() { mapstraction.removeMarker(my_marker); };					
				</script>
				<p>And here is a map:</p>
				<p>
					<div id='myMap2' style="position:relative; width:100%; height:400px;"></div>
				</p>
				<script type="text/javascript">
					mapstraction2 = new mxn.Mapstraction('myMap2','openlayers');
					var PixelLounge = new mxn.LatLonPoint(42.4419, -76.4868888258934);
					mapstraction2.setCenterAndZoom(PixelLounge, 16);
					mapstraction2.addControls({
						pan: true, 
						zoom: 'small'
					});
					// create a marker positioned at a lat/lon 
					my_marker = new mxn.Marker(PixelLounge);
					my_marker.setIcon('http://mapstraction.com/icon.gif');
					mapstraction2.addMarker( new mxn.Marker(PixelLounge));

					// add a label to the marker
					my_marker.setLabel("<blink>Hello!</blink>");
					var text = "<b>Be Happy!</b>";
					
				</script>				
				<p>For a bigger map or route planning you might want to follow <a href="http://maps.google.com/?ie=UTF8&ll=42.44181,-76.48698&spn=0.001013,0.003433&t=h&z=19&iwloc=lyrftr:h,6333923020612741538,42.441582,-76.486859">this link to Google Maps centered on Pixel Lounge</a>.</p>
				
				<h2>How to get there?</h2>
				<p>If you come from far away, please use the maps above for your route planning. Pixel Lounge is located in Collegetown which is a district south-west of Cornell Univeristy. From inside Ithaca, walking, cycling or bussing are recommended. The nearest bus stops are <a href="http://tcat.nextinsight.com/stops/8043">College @ Dryden</a> and <a href="http://tcat.nextinsight.com/stops/3000">Schwartz Performing Arts Center</a> (click the links for route and timetable info). We will definitely finish before the last bus of the day.</p>
				
				<h2>Parking</h2>
				<p>There is on-street parking on most roads around Pixel Lounge. Dryden Road is obvious but usually quite busy, so try Eddy Street, Highland Place, Buffalo Street and other surrounding streets. The Dryden Road Garage is just one or two minutes walk up Dryden Road. As far as we know, the parking right next to Pixel Lounge is rented to long term tenants.</p>
				
			<?php
			}
			else
			{
			?>
				<h2>Attending Ignite Ithaca</h2>
				<p>Everyone is invited to come and listen to the Ignite presenters and mingle with others at Ignite Ithaca events. Admission is free and you don't need to RSVP - just turn up. Our last two events were held at Pixel Lounge in Ithaca. </p>
			
				<h2>Stay tuned</h2>
				<p>Ignite Ithaca will be back! The next event is not scheduled yet. Please check back in a month or so to find out when&amp;where Ignite Ithaca<sup>3</sup> will happen. You can also subscribe to our blog, follow us on Twitter or become a fan on Facebook to stay up to date. We try to announce our events at least two months in advance.</p>
			<?php
			}
			?>
			
			</td>
		</tr></table>
	</div>

<?php include('page_foot.inc.php'); ?>
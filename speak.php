<?php include ('page_head.inc.php'); ?>

	<div id="belowfold">
		<table id="belowfold-wrapper"><tr>
			<td valign="top">

			</td>
			<td width="470">
				<h2>Who can speak?</h2>
				<p>Everyone can speak at Ignite Ithaca. The only requirement is that you have something to talk about! Do you have a great idea to share with Ithaca’s creative community? Got a story, a personal discovery, a new method or a hack – something that could make us laugh, make us applaud, make us think differently about the world? Whatever it is, if you can share it in 5 minutes we want to hear it!</p>
			
				<h2>Step 1: Sign Up!</h2>
				
				<p>Before preparing a presentation, please get in touch with us and let us know that you want to present. We'll confirm if there is still space in the program. While we try to never turn a presenter away, we do some curation like checking that no one else want's to speak about the exact same topic as you.</p>
				
				<?php
				if ($nextEventAnnounced) {
				?>
					<p>Please use <a href="signupform.php">our sign up form</a> or send us an email to info@igniteithaca.com. We'll try to reply within 24 hours. Please sign up before <?php echo $nextEventSignupBy; ?>.</p>
				<?php
				}
				else
				{
				?>
					<p>The next event is not yet scheduled, but you can tentatively express your interest in presenting by using <a href="signupform.php">our sign up form</a> or sending us an email to info@igniteithaca.com (we'll try to reply within 48 hours). If you sign up now, you will be one of the first to learn about the date for the next event and are almost guaranteed a place in the program.</p>
				<?php
				}
				?>
				
				
				<h2>Step 2: Prepare a presentation</h2>

				<p>Once we confirmed to you that you can speak at Ignite Ithaca, the fun part starts: Preparing your presentation! Everyone who presents at IGNITE must use <strong>20 slides</strong> to share their ideas, and <strong>the slides auto-advance every 15 seconds</strong> for a total of 5 minutes. No fancy slideshow effects, no long video clips, no animations &ndash; just you and your slides. That may seem like a difficult challenge but it worked rather well for hundreds of Ignite events around the world. You don’t need a remote, you don’t need notes, you just need to talk. As the official motto of IGNITE says, &ldquo;Enlighten us, but keep it brief.&rdquo;</p>
				
				<p>What you need to do:</p>
				<ul>
					<li>Prepare 20 slides (exactly, no additional &ldquo;cover slide&rdquo; or &ldquo;credits slide&rdquo;)</li>
					<li>Practise your talk. Remember, every slide will be up for 15 seconds exactly.</li>
				</ul>
				
				<h2>Presenter's Pack</h2>
				<p>We prepared a little presenter's pack that might help you. It contains a Popwerpoint template which you can use (but don't have to). </p>				
				<p><a href="http://drp.ly/DRw3s">**CLICK HERE TO DOWNLOAD OUR PRESENTER’S PACK**</a>
				
				<h2>A note on video recording</h2>
				<p>You probably noticed already, that videos of all talks are available to the public on our site. Your talk will be recorded live by two cameras at the event. The video is then edited for an internet audience (using your slides, video footage and the audio signal from the microphone). This edited version will be uploaded to Youtube. The video might be promoted to <a href="http://www.igniteshow.com">www.igniteshow.com</a>. We do not send you a proof copy of the video before publication. If you have an issue with being recorded, please contact us <strong>in advance</strong>, for example by email to info@igniteithaca.com.</p>
				
			</td>
		</tr></table>
	</div>

<?php include('page_foot.inc.php'); ?>
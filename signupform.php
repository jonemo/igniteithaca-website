<?php include ('page_head.inc.php'); ?>

	<div id="belowfold">
		<table id="belowfold-wrapper"><tr>
			<td valign="top">

			</td>
			<td width="470">
				<?php
					$error = null;
					if ($_POST['submit'] != '')
					{
						$name = $_POST['myname'];
						$email = $_POST['myemail'];
						$more = $_POST['moreaboutme'];
						
						if (strlen($name) < 5)
						{
							echo '<p style="color:red;">Please give us you full name.</p>';
							$error = 'name';
						}
						if (strlen($email) < 5)
						{
							echo '<p style="color:red;">Please give us a valid email address.</p>';
							$error = 'email';
						}
						if (strlen($more) < 5)
						{
							echo '<p style="color:red;">Please give us some information about you and your talk. We need it to plan the lineup..</p>';
							$error = 'more';
						}
						
						if ($error == null)
						{
							if (mail('info@igniteithaca.com , jn@jonemo.de', 'Ignite Talk :' . $name, "Name: " . $name . "\r\nEmail: " . $email . "\r\nMore: " . $more))
							{
								echo '<h2>Success</h2>';
								echo '<p>Thanks for proposing a talk for Ithaca Ignite on November 6, 2010. We will probably read your message within 24 hours and get back to you shortly to confirm if we still have a space free for your talk. If you don\'t hear back from us or have any questions, please write us to info@igniteithaca.com.</p>';
							}
							else
							{
								echo '<h2>Oh no!</h2>';
								echo '<p>Something went wrong while sending the message. We are so really sorry, that this happened. Could you do us a favor and write us to info@igniteithaca.com? Here is the message that couldn\'t be sent:</p>
								<p>My name is ' . $name . ' and you can write me emails to ' . $email . '.<p>
								<p>Here is a little more about the talk I would like to give and a few words about me:</p>
								<p>' . $more . '</p>';
							}
						}
					}
					
					if ($_POST['submit'] == '' || $error != null)
					{
					?>
					<h2>Sign up to speak at Ignite</h2>
					<form action="?signup=1" method="post">
						<label for="myname">My name is</label> <input type="text" name="myname" id="myname" value="" /> and you can <label for="myemail">write me emails to</label> <input type="text" name="myemail" id="myemail" value="" />.<p>
						<p><label for="moreaboutme">Here is a little more about the talk I would like to give and a few words about me:</label></p>
						<p><textarea style="width:100%; height:7em" rows="7" cols="20" name="moreaboutme" id="moreaboutme"></textarea></p>
						<p><input type="submit" name="submit" value="Send to the Ignite Ithaca inbox" /></p>
					</form>
					</p>
					<?php
					}
					?>
			</td>
		</tr></table>
	</div>

<?php include('page_foot.inc.php'); ?>
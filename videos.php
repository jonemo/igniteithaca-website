<?php include ('page_head.inc.php'); ?>

	<div id="belowfold">
		<?php
			if (!is_file('presenterlist.inc.php'))
			{
				echo '<p>Oops, something went wrong: I couldn\'t find the list of videos.';
			}
			else
			{
				include('presenterlist.inc.php');
				if ($presentations == NULL || count($presentations) == 0)
				{
					echo '<p>Oops, something went wrong: The list of videos isn\'t there.';
				}
				else
				{
					?>
					
					<script type="text/javascript">
					$(function() {

						$("#tabs").tabs({selected: <?php echo (count($presentations)-1); ?> });
					});
					</script>					
					
					<div id="belowfold-wrapper">
						<div id="tabs">
							<?php
								echo '<ul>';
								foreach ($presentations as $key => $event)
								{
									echo '<li><a class="video-event" href="#tabs-' . $key . '">';
									echo '<h2>Ignite Ithaca<sup>' . $key . '</sup></h2>';
									echo '<p>' . $event['date'] . ', ' . $event['venue'] . '</p>';
									echo '</a></li>';
								}
								echo '</ul>';
							?>
						
							<?php
								foreach ($presentations as $key => $event)
								{
									echo '<div id="tabs-' . $key . '" class="eventtabs">';
									
									if (count($event['talks']) > 0)
									{
										foreach ($event['talks'] as $talk)
										{
											?>
											<div class="talk">
												<h2><?php echo $talk['title']; ?></h2>
												<?php
													if ($talk['youtube'] != '')
													{
														echo '<a href="http://youtube.com/watch?v=' . $talk['youtube'] . '"><img src="http://img.youtube.com/vi/' . $talk['youtube'] . '/2.jpg" border="0" /></a>';
													}
												?>
												<p>by <?php echo $talk['presenter']; ?></p>
												<p><?php
													if ($talk['desc'] != '')
													{
														echo $talk['desc'];
													}
													else
													{
														echo 'No description.';
													}
												?></p>
												
												<?php
												if (count($talk['links']) > 0)
												{
													echo '<p>';
													foreach ($talk['links'] as $link)
													{
														echo '<a href="' . $link[1] . '">' . $link[1] . '</a><br />';
													}
													echo '</p>';
												}
												?>
												
												
											</div>
											<?php
											//echo '</a>';
										}
									}
									else
									{
										echo '<p style="height:500px">Nothing here yet. We\'ll publish the list of talks shortly after the event.</p>';
									}
									
									echo '</div>';
								}
							?>						

						</div>
					</div>
					<?php
				}
			}
		
		?>
	</div>

<?php include('page_foot.inc.php'); ?>
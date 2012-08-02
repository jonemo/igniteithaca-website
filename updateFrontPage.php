<?php
	$doc = new DOMDocument();
	if (@$doc->load('http://igniteithaca.tumblr.com/rss'))
	{
		$arrFeeds = array();
		$count = 3; // how many feed items to display?
		foreach ($doc->getElementsByTagName('item') as $node) {
			$itemRSS = array ( 
				'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
				'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
				'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
				'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
				);
			array_push($arrFeeds, $itemRSS);
			
			if (--$count == 0) break;
		}
		
		$out = '<h2>Latest News</h2>';
		
		$prevdate = 0;
		foreach ($arrFeeds as $entry)
		{
			$dt = date_create($entry['date']);
			if ($prevDate != $dt)
			{
				$prevdate = $dt;
				$out .= '<p class="post-date">' . $dt->format('l, F j, Y') . '</p>';
			}
			$out .= '<h2>' . $entry['title'] . '</h2>';
			$out .= '<p>' . $entry['desc'] . '</p>';
			$out .= '<p><a href="' . $entry['link'] . '">Continue reading</a></p>';
		}
		
		$out .= '<p><a href="http://igniteithaca.tumblr.com">Read more news on our Blog</a></p>';
		
		file_put_contents('frontpage_news.inc.php', $out);
		
		echo $out;
		
		echo '<br /><br /><br /><br />DONE';
	}
	else
	{
		echo 'FAIL!';
	}
?>
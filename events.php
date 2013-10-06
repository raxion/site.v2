<?php include('header.php'); ?>
<?php include('dbasconn.php'); ?>
	
<div id="thetext">
	<h1>Marknader</h1>
	<p class="intro">
		Här kommer jag finnas under sommaren 2013 och fler datum läggs in under tiden.
	</p>
	<p>
		<?php
			$result = mysql_query("SELECT location, start, end, address FROM events ORDER BY start");
		?>
		<?php
			while ($row = mysql_fetch_array($result)) {
				echo "<a href=".$row{'address'}.">".$row{'name'}."</a>  ".$row{'start'}." - ".$row{'end'};
				
			} 
		?>
		Skansen marknad 21/6-23/6.<br />
		Djurö marknad 14/7. 10.00-16.00<br />
		Skärgårdsmarknad på Brunnsgård, Ingarö 28/7. 10.00-17.00<br />
	</p>
</div>
	
<?php include('footer.html'); ?>
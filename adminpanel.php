<?php include('header.php'); ?>
<?php include('dbasconn.php'); ?>

<div id="thetext">
	<h1>Adminpanel</h1>
	<div class="admin-form-wrapper">
		<div class="admin-form">
			<p>Lägg till Marknad</p>
			<form action="adminevents.php" method="post">
				<input class="inputbox" type="text" name="name" placeholder="Namn">
				<input class="inputbox from" type="text" name="startdate" placeholder="Start">
				<input class="inputbox to" type="text" name="enddate" placeholder="Slut">
				<input class="inputbox" type="text" name="address" placeholder="Adress">
				<button class="sendbtn" type="submit" name="addEvent" value="addIt">add</button>
				<button class="sendbtn" type="submit" name="clearEvent" value="clearIt">clear</button>
		</div>
		<div class="admin-form">
			<p>Editera Marknader</p>
			<?php
				$result = mysql_query("SELECT id, location, start, end, address FROM events ORDER BY start");
			?>
				<?php
				while ($row = mysql_fetch_array($result)) { ?>
					<input class="inputbox" type="text" name="name<?php echo $row{'id'}; ?>" value="<?php echo $row{'name'} ?>">
					<input class="inputbox from" type="text" name="startdate<?php echo $row{'id'}; ?>" value="<?php echo $row{'start'} ?>">
					<input class="inputbox to" type="text" name="enddate<?php echo $row{'id'}; ?>" value="<?php echo $row{'end'} ?>">
					<input class="inputbox" type="text" name="address<?php echo $row{'id'}; ?>" value="<?php echo $row{'address'} ?>">
					<button class="sendbtn" type="submit" name="editEvent" value="<?php echo $row{'id'} ?>">edit</button>
					<button class="sendbtn" type="submit" name="deleteEvent" value="<?php echo $row{'id'} ?>">delete</button>
				<?php
				}
				?>
			</form>
		</div>
	</div>
</div>


<?php mysql_close($dbcon); ?>
<?php include('footer.html'); ?>
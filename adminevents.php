<?php include('dbasconn.php'); ?>
<?php
if(isset($_POST['addEvent'])) {
	echo "addEvent OK<br>";
	addEvent();
}
else if(isset($_POST['editEvent'])) {
	echo "editEvent OK";
	editEvent();
}
else if(isset($_POST['deleteEvent'])) {
	echo "deleteEvent OK<br>";
	deleteEvent();
}
else
	$error = "";
	
function addEvent() {
	$query = createQuery();
	
	mysql_query($query) 
		or die(mysql_error());
}

function createQuery() {
	$name = $_POST['name'];
	$startdate = $_POST['startdate'];
	$enddate = $_POST['enddate'];
	$address = $_POST['address'];
	
	return "INSERT INTO events (location,start,end,address) VALUES ('".$name."','".$startdate."','".$enddate."','".$address."')";
}

function editEvent() {
	$id = $_POST['editEvent'];
	$name = $_POST['name'.$id];
	$startdate = $_POST['startdate'.$id];
	$enddate = $_POST['enddate'.$id];
	$address = $_POST['address'.$id];
	echo $id;
	$query = "UPDATE events SET location='".$name."',start='".$startdate."',end='".$enddate."',address='".$address."' WHERE id='".$id."'";
	mysql_query($query) 
		or die(mysql_error("Coud not update."));
}

function deleteEvent() {
	$id = $_POST['deleteEvent'];
	echo $id;
	$query = "DELETE FROM events WHERE id='".$id."'";
	mysql_query($query) 
		or die(mysql_error("Delete is a no go"));
	
}

header("Location: adminpanel.php");
?>
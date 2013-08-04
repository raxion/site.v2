<?php include('header.php'); ?>
<? //include_once('dbasconn.php'); ?>

<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

$dbase = "117987-recolosdb";
$table = "user";

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";

mysql_select_db($dbase) or die(mysql_error());
echo "Done!<br>";
?>

<?php
if(isset($_POST['myusername']) && isset($_POST['mypassword'])) {
	$myusername=$_POST['myusername'];
	$myusername = stripslashes($myusername);
	$myusername = mysql_real_escape_string($myusername);
	
	$mypassword=$_POST['mypassword'];
	$mypassword = stripslashes($mypassword);
	$mypassword = mysql_real_escape_string($mypassword);
	
	$sql="SELECT * FROM $table WHERE name='$myusername' and password='$mypassword'";
	$result = mysql_query($sql);

	// Mysql_num_row is counting table row
	$count = mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1) {

		// Register $myusername, $mypassword and redirect to file "login_success.php"
		if(isset($_SESSION['user']))
			$_SESSION['user'] == $myusername;
		//header("location:login_success.php");
		echo "Success";
	}
	else {
		echo "Wrong Username or Password";
}
}

?>



<?php include('footer.html'); ?>
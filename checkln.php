<?php include('header.html'); ?>
<? include_once('dbasconn.php'); ?>

<?php
	mysql_select_db('117987-recolosdb') or die(mysql_error());
	echo "Done!";

?>




<?php include('footer.html'); ?>
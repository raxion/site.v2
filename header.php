<!DOCTYPE html>
<?php
session_start(); // start up your PHP session! 
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Your Name" />
	
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.form.js"></script>
    <script type="text/javascript" src="scripts/contact.js"></script>
	
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	
	<link rel="stylesheet" type="text/css" href="styles/cssreset.css" />
	<link rel="stylesheet" type="text/css" href="styles/style.css" />

	<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
	
	<title>recolo v2</title></title>
	
	<script>
		$(function() {
			 $.datepicker.regional['sv'] = {
                closeText: 'Stäng',
				prevText: '&laquo;Förra',
                nextText: 'Nästa&raquo;',
                currentText: 'Idag',
				monthNames: ['Januari','Februari','Mars','April','Maj','Juni',
					'Juli','Augusti','September','Oktober','November','December'],
				monthNamesShort: ['Jan','Feb','Mar','Apr','Maj','Jun',
					'Jul','Aug','Sep','Okt','Nov','Dec'],
                dayNamesShort: ['Sön','Mån','Tis','Ons','Tor','Fre','Lör'],
                dayNames: ['Söndag','Måndag','Tisdag','Onsdag','Torsdag','Fredag','Lördag'],
                dayNamesMin: ['Sö','Må','Ti','On','To','Fr','Lö'],
                weekHeader: 'Ve',
				dateFormat: 'yy-mm-dd',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
				$.datepicker.setDefaults($.datepicker.regional['sv']);
	
			$(".from").datepicker({
				dateFormat: "yy-mm-dd",
				showAnim: "fold",
				onClose: function(selectedDate) {
					$(".to").datepicker( "option","minDate",selectedDate );
				}
			});
			$(".to").datepicker({
				dateFormat: "yy-mm-dd",
				onClose: function( selectedDate ) {
					$(".from").datepicker("option","maxDate",selectedDate );
				}
			});
		});
	</script>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="index.php">recolo</a></h1>
		</div>
		<div id="slogan">
			<span><h2>hudvård, krämor, salvor, oljor</h2></span>
		</div>
		<div id="front">
			<img src="images/sunKur.jpg">
		</div>
	</div>
	
	<div id="content">
		<div id="menu">
			<ul>
				<li><a href="index.php">Hem</a></li>
				<li><a href="events.php">Marknader</a></li>
				<li><a href="salvkram.php">Salvor & Krämer</a></li>
				<li><a href="koljor.php">Kroppsoljor</a></li>
				<li><a href="eoljor.php">Eteriska Oljor</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
				<li><a href="om.php">Om recolo</a></li>
			</ul>
		</div>
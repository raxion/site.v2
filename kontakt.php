<?php include('header.php'); ?>
	
		<div id="thetext">
		<h1>Kontakta recolo</h1>
		<p class="intro">Om ni har några frågor angående någon produkt eller bara en allmän fundering är det bara att maila till <a href="mailto:annika@recolo.se">annika@recolo.se</a> eller fyll i formuläret nedan.
		</p>
		<div class="login-form">
			<div class="form-wrapper">
				<form id="contactform" action="processForm.php" method="post">
					<input type="text" class="inputbox" name="name" placeholder="Namn" />
					<input type="text" class="inputbox" name="email" placeholder="E-post" />
					<textarea class="inputbox inputarea" name="message" placeholder="Meddelande"></textarea><br />
					<button class="sendbtn" id="send" type="submit" value="send">Skicka</button>
				</form>
				<div id="response"></div>
			</div>
		</div>
		</div>
	
	
<?php include('footer.html'); ?>
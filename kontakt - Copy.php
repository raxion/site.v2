<?php include('header.html'); ?>
	
		<div id="thetext">
			<h1>Kontakta recolo</h1>
			<p class="intro">Om ni har några frågor angående någon produkt eller bara en allmän fundering är det bara att maila till <a href="mailto:annika@recolo.se">annika@recolo.se</a> eller fyll i formuläret nedan.
			</p>
			<div class="login-form">

			<form class="form-wrapper-01" action="index.php">

				<div class="input">
					<label class="inputlabel">Namn: </label>
					<div class="inputtext">
						<input type="text" placeholder="Namn" />
					</div>
				</div>

				<div class="input">
					<label class="inputlabel">E-post:</label>
					<div class="inputtext">
						<input type="text" placeholder="E-post" />
					</div>
				</div>

				<div class="inputtextbox nobottomborder">
					<label class="inputlabel">Medelande:</label>
					<div class="inputtext">
						<textarea class="textarea" placeholder="Meddelande"></textarea>
					</div>
				</div>

				<div class="buttons">
					<button class="orangebutton" type="submit" value="Send">Skicka</button>
				</div>

			</form>
			</div>
		</div>
	
	
<?php include('footer.html'); ?>
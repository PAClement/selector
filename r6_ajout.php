<!DOCTYPE html>
<html>

<head>

	<?php include('includes/head.php'); ?>
	
    <!--CSS-->
    <link rel="stylesheet" href="css/r6/r6_ajout.css">

</head>
<body>
	
	<div class="r6--ajout-logo"><a href="r6.php" target="_blank"><img src="img/R6/logo.png" class="r6--logo-modif"/></a></div>
	
	<div class="form--contain-r6-ajout">
		<form action="php/r6/agent_ajout.php" method="POST">
		<div class="r6--ajout-contain">
			<input type="radio" name="side" class="radio--bouton radio--bouton-1" value="attack" id="attaque">
			<label for="attaque">Attaquant</label>

			<input type="radio" name="side" class="radio--bouton radio--bouton-2" value="defense" id="defense">
			<label for="defense">Defenseur</label>
		</div>
			<br>
		<div class="r6--ajout-contain">
			<input type="text" class="input--text" name="agent" placeholder="Agent" required>
		</div>
			<br>
		<div class="r6--ajout-contain">
			<input type="text" class="input--text" name="principale_1" placeholder="Principale 1" required>
			<input type="text" class="input--text" name="principale_2" placeholder="Principale 2">
			<input type="text" class="input--text" name="principale_3" placeholder="Principale 3">
		</div>
			<br>
		<div class="r6--ajout-contain">
			<input type="text" class="input--text" name="secondaire_1" placeholder="Secondaire 1" required>
			<input type="text" class="input--text" name="secondaire_2" placeholder="Secondaire 2">
		</div>
			<br>
		<div class="r6--ajout-contain">
			<input type="text" class="input--text" name="equipement_1" placeholder="Equipement 1" required>
			<input type="text" class="input--text" name="equipement_2" placeholder="Equipement 2">
		</div>
			<br>
		<div class="r6--ajout-contain">
			<button type="submit" class=" btn btn-1 btn-1a">Ajouter agent</button>
		</div>
		</form>
	</div>
</body>
</html>


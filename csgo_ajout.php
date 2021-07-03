<!DOCTYPE html>
<html>

<head>

	<?php include('includes/head.php'); ?>
	
    <!--CSS-->
    <link rel="stylesheet" href="css/csgo/csgo_ajout.css">

</head>
<body>
	
<div class="contain-form--ajout">
	<form action="php/csgo/arme_ajout.php" method="POST">
		<!-- SIDE -->
		<div class="form-contain">
			<input type="radio" name="side" class="radio--bouton radio--bouton-2" value="counter-terrorist" id="counter-terroriste" required>
			<label for="counter-terroriste">Counter-Terroriste</label>

			<input type="radio" name="side" class="radio--bouton radio--bouton-2" value="terrorist" id="terroriste" required>
			<label for="terroriste">Terroriste</label>
			
			<input type="radio" name="side" class="radio--bouton radio--bouton-2" value="all" id="all" required>
			<label for="all">All</label>
		</div>	
		
		<!-- weapon / price / damage -->
		<div class="form-contain">
			<input type="text" name="weapon" class="input--text" placeholder="Weapon" required>
			<input type="number" name="price" class="input--number" placeholder="Price" min="0" max="6000" required>
			<input type="number" name="base_damage" class="input--number" placeholder="Damage" min="0" required>
		</div>
		
		<!-- reserve / reload time -->
		<div class="form-contain">
			<input type="text" name="magazine_reserve" class="input--text" placeholder="Magazine / Reserve" required>
			<input type="text" name="reload_time" class="input--text" placeholder="Reload Time" required>
		</div>
		<!-- kill reward -->
		<div class="form-contain">
			<input type="number" name="kill_reward" class="input--number" placeholder="Kill Reward" min="0" required>
		</div>
		
		<!-- movement / fire rate / penetration -->
		<div class="form-contain">
			<input type="text" name="movement" class="input--text" placeholder="Movement" required>
			<input type="text" name="fire_rate" class="input--text" placeholder="Fire Rate" required>
			<input type="text" name="penetration" class="input--text" placeholder="Penetration" required>
		</div>
		
		<!-- head / chest / stomach / legs DAMAGE -->
		<div class="form-contain">
			<input type="number" name="head_damage" class="input--number" placeholder="Head Damage"  min="0" required>
			<input type="number" name="chest_arms_damage" class="input--number" placeholder="Chest Arms Damage" min="0" required>
			<input type="number" name="stomach_damage" class="input--number" placeholder="Stomach Damage" min="0" required>
			<input type="number" name="legs_damage" class="input--number" placeholder="Legs Damage" min="0" required>
		</div>
		
		<!-- head / chest / stomach DAMAGE KEVLAR -->
		<div class="form-contain">
			<input type="number" name="head_damage_kevlar" class="input--number" placeholder="Head Damage Kevlar" min="0" required>
			<input type="number" name="chest_arms_damage_kevlar" class="input--number" placeholder="Chest Arms Damage Kevlar" min="0" required>
			<input type="number" name="stomach_damage_kevlar" class="input--number" placeholder="Stomach Damage Kevlar" min="0" required>
		</div>
		
		<!-- SIDE -->
		<div class="form-contain">
			<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Pistols" id="Pistols" required>
			<label for="Pistols">Pistols</label>

			<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Heavy" id="Heavy" required>
			<label for="Heavy">Heavy</label>
			
			<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="SMGs" id="SMGs" required>
			<label for="SMGs">SMGs</label>

			<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Rifles" id="Rifles" required>
			<label for="Rifles">Rifles</label>
			
			<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Gear" id="Gear" required>
			<label for="Gear">Gear</label>

			<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Grenade" id="Grenade" required>
			<label for="Grenade">Grenade</label>
		</div>	
		
		<div class="form-contain">
			<button type="submit" class=" btn btn-1 btn-1a">Ajouter l'arme</button>
		</div>
	
	</form>
</div>
</body>
</html>


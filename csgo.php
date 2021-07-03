<?php 

	session_start();

	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>

<head>

	<?php include('includes/head.php'); ?>
	
    <!--CSS-->
    <link rel="stylesheet" href="css/csgo/csgo.css">
    <link rel="stylesheet" href="css/csgo/csgo_mobile.css">

</head>
<body>
		
	<div class="cs-title--contain">
		<img src="img/CSGO/csgo_logo.png" class="cs--logo">
	</div>
	
	<div class="cs--contain-element">
		<div class="cs-info">Sélectionnez une catégorie ainsi que le camp et le sélecteur vous choisira une arme.</div>
		
		<?php 
		
		if(!isset($_SESSION["weapons"])){
			
	echo'
		<div class="cs-form--contain">

			<form action="php/csgo/arme_selector.php" method="POST">
				<div class="affichage--start cs-form--radio">
					<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Pistols" id="Pistols" required>
					<label for="Pistols">Pistols</label>

					<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Heavy" id="Heavy" required>
					<label for="Heavy">Heavy</label>

					<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="SMGs" id="SMGs" required>
					<label for="SMGs">SMGs</label>
					
					<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="Rifles" id="Rifles" required>
					<label for="Rifles">Rifles</label>

					<input type="radio" name="category" class="radio--bouton-category radio--bouton-category-1" value="all" id="all" required>
					<label for="all">All</label>
				</div>
				<div class="affichage--start cs-form--radio">
					<input type="radio" name="side" class="radio--bouton-side radio--bouton-side-1" value="terrorist" id="terrorist" required>
					<label for="terrorist">Counter-Terrorist</label>

					<input type="radio" name="side" class="radio--bouton-side radio--bouton-side-2" value="counter-terrorist" id="counter-terrorist" required>
					<label for="counter-terrorist">Terrorist</label>
				</div>
				<div class="affichage--start cs-form-contain-btn">
					<button type="submit" class="btn btn-1 btn-1a">Sélectionner l\'arme</button>
				</div>
				<br>
				<div class=" affichage--start cs--menu-place">
				<a href="index.php" class="cs-retour-menu"><i class="fas fa-arrow-left"></i> Retourner au menu</a>
				</div>
			</form>

		</div>
		';
	
	}else{
	
			$weapons = $_SESSION["weapons"];
			$side = $_SESSION["side"];
			$category = $_SESSION["category"];
			
			unset($_SESSION["weapons"]);
			unset($_SESSION["side"]);
			unset($_SESSION["category"]);
			
			echo'
			
			<div class=" affichage--start cs-res-contain">
				<div class="cs-column">
					<div class="cs-res-logo"><img src="img/CSGO/icons/'.$weapons.'.png" class="logo-weapons"></div>
					<div class="cs-res">'.$weapons.'</div>
				</div>
			</div>
			<form action="php/csgo/arme_selector.php" method="POST">
				<div class="reroll-form-mobile">
					<div class=" reroll-form">
						<input type="radio" name="category" value="'.$category.'" style="display:none;" checked>
						<input type="radio" name="side" value="'.$side.'" style="display:none;" checked>
						
						<button type="submit" class="btnmodif btn btn-1 btn-1a">Relancer</button>
						<input class="btnmodif btn btn-1 btn-1a btn--actualiser" type="button" value="X" id="refresh" />
					</div>
				</div>
			</form>';
		}
		?>
	</div>
</body>
	<script>
		$('#refresh').on('click', function() {
			location.reload();
		});
	</script>
</html>


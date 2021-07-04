<?php 

	session_start();

	/*ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);*/

	include('php/CBDD.php');
    $db = new Connection();



?>
<!DOCTYPE html>
<html>

<head>

	<?php include('includes/head.php'); ?>
	
    <!--CSS-->
    <link rel="stylesheet" href="css/r6/r6.css">
    <link rel="stylesheet" href="css/r6/r6_mobile.css">

</head>
<body>
	
	<div class="r6--logo"><img src="img/R6/logo.png" class="r6--logo-modif r6-mobile"/><img src="img/R6/background_mobile.png" class="r6--logo-modif-mobile r6-mobile-display"/></div>
	
	<div class="r6--def">Le selecteur choisira pour vous l'agent ainsi que les armes et équipements.</div>
	<?php 
	if(!isset($_SESSION["agent"])){
		echo'
		<form action="php/r6/agent_selector.php" method="POST">
		<div class="r6--form-contain-mobile">
			<div class="affichage--start r6--form-contain">

				  <input type="radio" name="side" class="radio--bouton radio--bouton-1" value="attack" id="attack">
				  <label for="attack">Attaquant</label>
			<div class="r6--sepa-mobile"></div>
				  <input type="radio" name="side" class="radio--bouton radio--bouton-2" value="defense" id="defense">
				  <label for="defense">Defenseur</label>
			</div>
		</div>
			<div class="affichage--start r6--btn-submit">
				<button type="submit" class=" btn btn-1 btn-1a">Choisir agent</button>
			</div>	
			<div class="r6--menu-place">
				<a href="index.php" class="r6-retour-menu"><i class="fas fa-arrow-left"></i> Retourner au menu</a>
			</div>
		</form>
		';
	}else
		{
			$agent = $_SESSION["agent"];
			$principale= $_SESSION["principale"];
			$secondaire= $_SESSION["secondaire"];
			$equipement= $_SESSION["equipement"]; 
			$bdd_reroll= $_SESSION["bdd_reroll"];

			unset($_SESSION["agent"]);
			unset($_SESSION["principale"]);
			unset($_SESSION["secondaire"]);
			unset($_SESSION["equipement"]);
			unset($_SESSION["bdd_reroll"]);
		
			echo '
			<div class="r6--contain">
				<div class="r6--contain-agent">
					<div class="r6--agent"><img src="img/R6/R6Agent/'.$agent.'.svg" class="r6--agent-img affichage--agent"></div>
				</div>
				<!--<div class="r6--agent-title">'.$agent.'</div>--!>
			<div class="r6--contain-weapon-mobile">
				<div class="r6--contain-weapon">
					<div class="r6--weapons affichage--principale">'.$principale.'</div>
				<div class="r6--weapons-sepa-mobile"></div>
					<div class="r6--weapons affichage--secondaire">'.$secondaire.'</div>
				<div class="r6--weapons-sepa-mobile"></div>
					<div class="r6--weapons affichage--equipement">'.$equipement.'</div>
				</div>
			</div>
				<br><br>
				<form action="php/r6/agent_selector.php" method="POST">
				<div class="reroll-form-mobile">
					<div class="reroll-form">
						<input type="radio" name="side" value="'.$bdd_reroll.'" style="display:none;" checked>
						
						<button type="submit" class="btnmodif btn btn-1 btn-1a">Relancer</button>
						<input class="btnmodif btn btn-1 btn-1a btn--actualiser" type="button" value="X" id="refresh" />
					</div>
				</div>
				</form>
			</div>
			';
		}
	?>
</body>
	<script>
		$('#refresh').on('click', function() {
			location.reload();
		});
	</script>
</html>


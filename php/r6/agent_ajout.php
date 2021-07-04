<?php

	/*ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);*/

	include('../CBDD.php');
    $db = new Connection();

	$side = htmlspecialchars($_POST['side']);
	$agent = htmlspecialchars($_POST['agent']);

	$principale_1 = htmlspecialchars($_POST['principale_1']);
	$principale_2 = htmlspecialchars($_POST['principale_2']);
	$principale_3 = htmlspecialchars($_POST['principale_3']);

	$secondaire_1 = htmlspecialchars($_POST['secondaire_1']);
	$secondaire_2 = htmlspecialchars($_POST['secondaire_2']);

	$equipement_1 = htmlspecialchars($_POST['equipement_1']);
	$equipement_2 = htmlspecialchars($_POST['equipement_2']);

	 $db->query("INSERT INTO `r6_agents` (`agent` ,`side`, `principale_1` , `principale_2` , `principale_3` , `secondaire_1` , `secondaire_2` ,`equipement_1` , `equipement_2`) VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ?)", array($agent,$side,$principale_1,$principale_2,$principale_3,$secondaire_1,$secondaire_2,$equipement_1,$equipement_2));

	header("location:../../r6_ajout.php");
	exit();
?>
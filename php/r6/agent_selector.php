<?php 

	session_start();

	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	include('../CBDD.php');
    $db = new Connection();

	$side = htmlspecialchars($_POST['side']);

	/*SELECTION DE L'AGENT*/

	$agent = $db->query("SELECT agent FROM r6_agents WHERE side = ?  ", array($side));

	$array_agent = array();

	while($res_agent = $agent->fetch()){
		
		array_push($array_agent , $res_agent['agent']);	
		
	}

	$array_agent = array_filter($array_agent);
	$rand_agent = rand(0 , count($array_agent)-1);

	$agent_final = $array_agent[$rand_agent];

	/*SELECTION DE LA PRINCIPALE*/
	
	$weapons = $db->query("SELECT * FROM r6_agents WHERE agent = ? ", array($agent_final));

	$array_principale = array();
	$array_secondaire = array();
	$array_equipement = array();
	
	
	while($res_weapons = $weapons->fetch()){
	
		array_push($array_principale , $res_weapons['principale_1']);	
		array_push($array_principale , $res_weapons['principale_2']);
		array_push($array_principale , $res_weapons['principale_3']);
		
		array_push($array_secondaire , $res_weapons['secondaire_1']);	
		array_push($array_secondaire , $res_weapons['secondaire_2']);
		
		array_push($array_equipement , $res_weapons['equipement_1']);	
		array_push($array_equipement , $res_weapons['equipement_2']);
	}
	
	$array_principale = array_filter($array_principale);
	$rand_principale = rand(0,count($array_principale)-1);

	$array_secondaire = array_filter($array_secondaire);
	$rand_secondaire = rand(0,count($array_secondaire)-1);

	$array_equipement = array_filter($array_equipement);
	$rand_equipement = rand(0,count($array_equipement)-1);
	
	$principale_final = $array_principale[$rand_principale];	
	$secondaire_final = $array_secondaire[$rand_secondaire];
	$equipement_final = $array_equipement[$rand_equipement];
	
	/*ENVOIE DES VALEURS RECUPERE*/
		
	$_SESSION["agent"]= $agent_final;
	$_SESSION["principale"]= $principale_final;
	$_SESSION["secondaire"]= $secondaire_final;
	$_SESSION["equipement"]= $equipement_final;
	$_SESSION["bdd_reroll"]= $side;
		
	header("location:../../r6.php");
	exit();	

?>
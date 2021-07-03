<?php

	session_start();

	ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
	
	include('../CBDD.php');
    $db = new Connection();

	$category = htmlspecialchars($_POST['category']);
	$side = htmlspecialchars($_POST['side']);
	
	$array_weapons = array();
	
	if($category != 'all'){

		$weapons = $db->query("SELECT weapon FROM csgo WHERE category= ? && side != ? ", array($category,$side));

		while($res = $weapons->fetch()){
			array_push($array_weapons , $res['weapon']);	
		}	

	}else{

		$weapons = $db->query("SELECT weapon FROM csgo WHERE side != ? ", array($side));

		while($res = $weapons->fetch()){
			array_push($array_weapons , $res['weapon']);
		}	
	}

	$rand_weapons = rand(0 , count($array_weapons)-1);
	$weapons_final = $array_weapons[$rand_weapons];

	/*ENVOIE DES VALEURS RECUPERE*/
		
	$_SESSION["weapons"]= $weapons_final;
	$_SESSION["side"]= $side;
	$_SESSION["category"]= $category;
		
	header("location:../../csgo.php");
	exit();	
	
?>
<?php

	/*ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);*/

	include('../CBDD.php');
    $db = new Connection();

	$side = htmlspecialchars($_POST['side']);

	$weapon = htmlspecialchars($_POST['weapon']);
	$price = htmlspecialchars($_POST['price']);
	$base_damage = htmlspecialchars($_POST['base_damage']);

	$magazine_reserve = htmlspecialchars($_POST['magazine_reserve']);
	$reload_time = htmlspecialchars($_POST['reload_time']);

	$kill_reward = htmlspecialchars($_POST['kill_reward']);

	$movement = htmlspecialchars($_POST['movement']);
	$fire_rate = htmlspecialchars($_POST['fire_rate']);
	$penetration = htmlspecialchars($_POST['penetration']);

	$head_damage = htmlspecialchars($_POST['head_damage']);
	$chest_arms_damage = htmlspecialchars($_POST['chest_arms_damage']);
	$stomach_damage = htmlspecialchars($_POST['stomach_damage']);
	$legs_damage = htmlspecialchars($_POST['legs_damage']);

	$head_damage_kevlar = htmlspecialchars($_POST['head_damage_kevlar']);
	$chest_arms_damage_kevlar = htmlspecialchars($_POST['chest_arms_damage_kevlar']);
	$stomach_damage_kevlar = htmlspecialchars($_POST['stomach_damage_kevlar']);

	$category = htmlspecialchars($_POST['category']);

	$db->query("INSERT INTO csgo (`weapon`,`price`,`base_damage`,`magazine_reserve`,`reload_time`,`kill_reward`,`movement`,`fire_rate`,`penetration`,`head_damage`,`chest_arms_damage`,`stomach_damage`,`legs_damage`,`head_damage_kevlar`,`chest_arms_damage_kevlar`,`stomach_damage_kevlar`,`category`,`side`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($weapon,$price,$base_damage,$magazine_reserve,$reload_time,$kill_reward,$movement,$fire_rate,$penetration,$head_damage,$chest_arms_damage,$stomach_damage,$legs_damage,$head_damage_kevlar,$chest_arms_damage_kevlar,$stomach_damage_kevlar,$category,$side));

	header("location:../../csgo_ajout.php");
	exit();
?>
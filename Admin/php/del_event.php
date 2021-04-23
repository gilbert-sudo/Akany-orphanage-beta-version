<?php
include 'connexion.php';

if (isset($_GET['id_event'])) {
	$delevent = $bdd->prepare("DELETE FROM `ad_event` WHERE `ad_event`.`id_event` = ?;");
	$delevent->execute(array($_GET['id_event']));
	header('Location:../pages/gerer_event.php');
}
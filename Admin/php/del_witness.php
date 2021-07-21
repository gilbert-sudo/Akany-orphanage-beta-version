<?php
include 'connexion.php';

if (isset($_GET['id_temoin'])) {
	$delWitness = $bdd->prepare("DELETE FROM `temoignage` WHERE `temoignage`.`id_temoin` = ?;");
	$delWitness->execute(array($_GET['id_temoin']));
	header('Location:../pages/gerer_temoignage.php');
}
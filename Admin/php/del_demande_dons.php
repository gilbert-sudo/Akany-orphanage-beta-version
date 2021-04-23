<?php
include 'connexion.php';

if (isset($_GET['id'])) {
	$delevent = $bdd->prepare("DELETE FROM `demande_dons` WHERE `demande_dons`.`id` = ?;");
	$delevent->execute(array($_GET['id']));
	header('Location:../pages/gerer_dons.php');
}
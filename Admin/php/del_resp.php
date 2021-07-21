<?php
include 'connexion.php';

if (isset($_GET['id_resp'])) {
	$delresp = $bdd->prepare("DELETE FROM `responsable` WHERE `responsable`.`id_resp` = ?;");
	$delresp->execute(array($_GET['id_resp']));
	header('Location:../pages/gerer_resp.php');
}
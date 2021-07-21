<?php
include 'connexion.php';

if (isset($_GET['id_services'])) {
	$delservice = $bdd->prepare("DELETE FROM `service` WHERE `service`.`id_services` = ?;");
	$delservice->execute(array($_GET['id_services']));
	header('Location:../pages/gerer_service.php');
}
<?php
include 'connexion.php';

if (isset($_GET['id_mail'])) {
	$delevent = $bdd->prepare("DELETE FROM `mailbox` WHERE `mailbox`.`id_mail` = ?;");
	$delevent->execute(array($_GET['id_mail']));
	header('Location:../pages/mailbox/mailbox.php');
}
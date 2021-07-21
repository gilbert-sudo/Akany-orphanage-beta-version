<?php
include 'connexion.php';

if (isset($_GET['id_blog'])) {
	$delblog = $bdd->prepare("DELETE FROM `blog` WHERE `blog`.`id_blog` = ?;");
	$delblog->execute(array($_GET['id_blog']));
	header('Location:../pages/gerer_blog.php');
}
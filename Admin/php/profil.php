<?php
include 'connexion.php';
	
	$reqprofil = $bdd->prepare("SELECT * FROM compte_admin");
	$reqprofil->execute();

$showprofil = $reqprofil->fetch();
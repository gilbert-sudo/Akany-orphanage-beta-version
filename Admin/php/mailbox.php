<?php
include 'connexion.php';
 if (isset($_POST['envoyer'])) {
 	if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['objet']) AND !empty($_POST['msg']) ) {
 		if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['objet']) AND isset($_POST['msg']) ) {
 	$nom = $_POST['name'];
 	$email = $_POST['email'];
 	$objet = $_POST['objet'];
 	$msg = $_POST['msg'];
 			
 		$sendmail = $bdd->prepare("INSERT INTO `mailbox` (`id_mail`, `name_sender`, `email_sender`, `subject`, `message`, `time`) VALUES (NULL,?,?,?,?, current_timestamp());");
 		$sendmail->execute(array($nom, $email, $objet, $msg));

 			$msgmaintso = "<b>Votre message a été bien envoyer✔</b>";


 			



 		}
 }
 else {
 	$msgmena = "<b> Tous les champs doivent être remplient❗</b>";
 }
}
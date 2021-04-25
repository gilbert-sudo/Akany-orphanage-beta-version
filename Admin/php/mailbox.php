<?php
$success = 0;
$msg = "une erreur est survenue(mailbox.php)!";
include 'connexion.php';

 		if (isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['objet']) AND isset($_POST['msg'])) {
	 	$nom = $_POST['name'];
	 	$email = $_POST['email'];
	 	$objet = $_POST['objet'];
	 	$mesg = $_POST['msg'];
 			
 		$sendmail = $bdd->prepare("INSERT INTO `mailbox` (`id_mail`, `name_sender`, `email_sender`, `subject`, `message`, `time`) VALUES (NULL,?,?,?,?, current_timestamp());");
 		$sendmail->execute(array($nom, $email, $objet, $mesg));
 		   $success = 1;
       	   $msg = "";

		}

    $res = ["success" => $success, "msg" => $msg];
    echo json_encode($res);

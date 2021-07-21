<?php
include 'connexion.php';
if (isset($_POST['valider'])) {
  if (isset($_POST['ad']) AND (!empty($_POST['ad']))) {
  	$address = $_POST['ad'];
	$reqad = $bdd->prepare("INSERT INTO `contacts` (`id_contact`, `address`, `number_phone`, `email`, `page_facebook`) VALUES (NULL,?, '', '', '');");
	$reqad->execute(array($address));
	$msgmaintso = "<b>Contact ajouter avec succèss<i class='fa fa-check-circle'></i></b>";
  }

	if (isset($_POST['phone']) AND (!empty($_POST['phone']))) {
  	  $number_phone = $_POST['phone'];
	  $reqphone = $bdd->prepare("INSERT INTO `contacts` (`id_contact`, `address`, `number_phone`, `email`, `page_facebook`) VALUES (NULL, '',?, '', '');");
	  $reqphone->execute(array($number_phone));
	  $msgmaintso = "<b>Contact ajouter avec succèss<i class='fa fa-check-circle'></i></b>";
    }
   
      if (isset($_POST['email']) AND (!empty($_POST['email']))) {
  	    $email = $_POST['email'];
	    $reqemail = $bdd->prepare("INSERT INTO `contacts` (`id_contact`, `address`, `number_phone`, `email`, `page_facebook`) VALUES (NULL, '', '',?, '');");
	    $reqemail->execute(array($email));
	    $msgmaintso = "<b>Contact ajouter avec succèss<i class='fa fa-check-circle'></i></b>";
      }
      
        if (isset($_POST['fb']) AND (!empty($_POST['fb']))) {
  	      $pageFb = $_POST['fb'];
	      $reqpageFb = $bdd->prepare("INSERT INTO `contacts` (`id_contact`, `address`, `number_phone`, `email`, `page_facebook`) VALUES (NULL, '', '', '',?);");
	      $reqpageFb->execute(array($pageFb));
	      $msgmaintso = "<b>Contact ajouter avec succèss<i class='fa fa-check-circle'></i></b>";
        }
 }
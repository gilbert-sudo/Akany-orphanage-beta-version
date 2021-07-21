<?php
include 'connexion.php';
if (isset($_POST['postcoms'])) 
{
if (!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['commsg'])) 
	{
	if (isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['commsg'])) 
		{
			if (isset($_POST['fb'])) {
				$fb = $_POST['fb'];
			}
			$pseudo = $_POST['pseudo'];
			$email = $_POST['email'];
			$commsg = $_POST['commsg'];

			$insertcoms = $bdd->prepare("INSERT INTO `commentaires` (`id_coms`, `nom_commentateur`, `email_commentateur`, `compte_facebook`, `commentaire`, `id_blog`) VALUES (NULL,?,?,?,?,?);");
			$insertcoms->execute(array($pseudo, $email, $fb, $commsg, $_GET['id_blog']));
			
			 header('location:../../single.php?id_blog='.$_GET['id_blog']);
		
		}
		else{
			echo "please complete all inputs!";
		}
	}
	else{
		echo "please complete all inputs!";
	}
}

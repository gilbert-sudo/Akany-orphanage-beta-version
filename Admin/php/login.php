<?php 

include 'connexion.php'; 

if (isset($_POST['connect'])){
	if (!empty($_POST['usernameadmin'])) {
		if (!empty($_POST['passadmin'])) {

			$requsername = $bdd->prepare("SELECT * FROM compte_admin WHERE username_admin = ? ");
			$requsername->execute(array($_POST['usernameadmin']));
			$usernameexist = $requsername->rowCount ();
				if ($usernameexist != 0){

			$reqpassword = $bdd->prepare("SELECT * FROM compte_admin WHERE username_admin = ? ");
			$reqpassword->execute(array($_POST['usernameadmin']));
			$userinfo = $reqpassword->fetch();
			$passwordconnectash =sha1($_POST['passadmin']);
						if ($userinfo['password_admin'] == $passwordconnectash) {
							$_SESSION['id'] = $userinfo['id_admin'];
							
							header('Location:pages/accueil.php');
						}
						else
							{
								$msgmena = "<b> ⚠ Mot de passe incorrecte!</b>";
							}
				}
				else
					{
						$msgmena = " <b>⚠ Nom d'utilisateur invalide!!</b>";
					}
		}
	}
	
}

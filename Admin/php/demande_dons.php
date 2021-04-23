<?php
include 'connexion.php';
if (isset($_POST['envoyer'])) {
	if (!empty($_POST['but']) AND !empty($_POST['budg']) AND !empty($_POST['exp']) AND !empty($_FILES['img']['name'])) {
		if (isset($_POST['but']) AND isset($_POST['budg']) AND isset($_POST['exp']) AND isset($_FILES['img']['name'])) {
				
			$but = $_POST['but'];
			$budg = $_POST['budg'];
			$exp = $_POST['exp'];

			$extensionValide = array('jpg', 'gif', 'jpeg', 'png');
			$extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], "."), 1));

			if (in_array($extensionUpload, $extensionValide)) {
				  
                  $chemin = "../images/Demande_dons/".$_FILES['img']['name'];
                  $insertimg = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);

            $req = $bdd->prepare("INSERT INTO `demande_dons` (`id`, `but`, `fond`, `description`, `images`) VALUES (NULL,?,?,?,?);");
			$req->execute(array($but, $budg, $exp, $_FILES['img']['name']));
				
				$msgmaintso = "<b> Demande envoyer <i class='fa fa-check-circle'></i></b>";

				
					
			

			}else
					{
						$msgmena =  "  <b> Format d'image invalide <i class='fa fa-warning'></i> </b>" ;
					}

			


		}
	}
	else
		{
			$msgmena =  " <b> Tous les champs doivent être remplis <i class='fa fa-warning'></i> </b> ";
		}
}


 ?>
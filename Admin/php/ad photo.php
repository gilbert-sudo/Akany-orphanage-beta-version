<?php
include 'connexion.php';
if (isset($_POST['envoyer'])) {
	if (!empty($_POST['nom']) AND !empty($_POST['pnom']) AND !empty($_POST['function']) AND !empty($_FILES['img']['name'])) {
		if (isset($_POST['nom']) AND isset($_POST['pnom']) AND isset($_POST['function']) AND isset($_FILES['img']['name'])) {

		
			$nom = $_POST['nom'];
			$pnom = $_POST['pnom'];
			$function = $_POST['function'];
				$tailleMax = 30000000;
				
			$extensionValide = array('jpg', 'gif', 'jpeg', 'png');
			if ($_FILES['img']['size'] <= $tailleMax) {
				
			
			$extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], "."), 1));

			if (in_array($extensionUpload, $extensionValide)) {
				  
                  $chemin = "../images/Responsable/".$_FILES['img']['name'];
                  $insertimg = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);

            $req = $bdd->prepare("INSERT INTO `responsable` (`id_resp`, `nom_resp`, `prenom_resp`, `fonction`, `image`) VALUES (NULL,?,?,?,?);");
			$req->execute(array($nom, $pnom, $function, $_FILES['img']['name']));
			
				
				$msgmaintso = " <b>Responsable ajoutée <i class='fa fa-check-circle'></i> </b>";		
			

			}else
					{
						$msgmena = " <b>Format d'image invalide ⚠</b>";
					}

			
				}else

			 $msgmena = "Votre photo est tros grande ⚠";

		}
	}
	else
		{
			$msgmena =  " <b>Tous les champs doivent être remplis <i class='fa fa-warning'></i></b>";
		}
}


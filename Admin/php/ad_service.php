<?php
include 'connexion.php';
if (isset($_POST['envoyer'])) {
	if (!empty($_POST['type']) AND !empty($_POST['expl']) AND !empty($_FILES['img']['name'])) {
		if (isset($_POST['type']) AND isset($_POST['expl']) AND isset($_FILES['img']['name'])) {
			$type = $_POST['type'];
			$expl = $_POST['expl'];
			

			$extensionValide = array('jpg', 'gif', 'jpeg', 'png');
			$extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], "."), 1));

			if (in_array($extensionUpload, $extensionValide)) {
				  $photo = 1;
                  $chemin = "../images/services/".$_FILES['img']['name'];
                  $insertimg = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);
            $reqBlog = $bdd->prepare("INSERT INTO `service` (`id_services`, `types`, `commentaires`, `images`) VALUES (NULL, ?, ?, ?);");
            $reqBlog->execute(array($type,$expl, $_FILES['img']['name'],));

            	$msgmaintso = "<b> service ajoutée <i class='fa fa-check-circle'></i> </b>";
			}
			else
				{
				 $msgmena = " <b>Format d'image invalide <i class='fa fa-warning'></i></b>";
				}
		}	
	}
	else
		{
			$msgmena = "<b> Tous les formulaires être remplis <i class='fa fa-warning'></i></b>";
		}
}





 ?>
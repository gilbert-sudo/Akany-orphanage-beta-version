<?php

include 'connexion.php';

if (isset($_POST['publier'])) {
	if (!empty($_POST['name']) AND !empty($_POST['title']) AND !empty($_POST['function']) AND!empty($_POST['video']) AND !empty($_FILES['img']['name']) ) {
		if (isset($_POST['name']) AND isset($_POST['title']) AND isset($_POST['function']) AND isset($_POST['video']) AND isset($_FILES['img']['name'])){

			$name = $_POST['name'];
			$title = $_POST['title'];
			$function = $_POST['function'];
			$video = $_POST['video'];

			$extensionValide = array('jpg', 'gif', 'jpeg', 'png');
			$extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], "."), 1));

			if (in_array($extensionUpload, $extensionValide)) {
				  $photo = 1;
                  $chemin = "../images/Temoin/".$_FILES['img']['name'];
                  $insertimg = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);

			$adWitness = $bdd->prepare("INSERT INTO `temoignage` (`id_temoin`, `nom_temoin`, `title`, `function`, `lien_video`, `date_de_publication`, `images`) VALUES (NULL, ?, ?, ?, ?, current_timestamp(), ?);");
			$adWitness->execute(array($name, $title, $function, $video, $_FILES['img']['name']));
			
				$msgmaintso = "<b> Témoignage ajoutée <i class='fa fa-check-circle'></i> </b>";
			}else
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
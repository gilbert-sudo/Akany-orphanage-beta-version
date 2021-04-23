<?php
include 'connexion.php';
if (isset($_POST['envoyer'])) {
	if (!empty($_POST['title']) AND !empty($_POST['date']) AND !empty($_POST['time']) AND !empty($_POST['description']) AND !empty($_FILES['img']['name'])) {
		if (isset($_POST['title']) AND isset($_POST['date']) AND isset($_POST['time']) AND isset($_POST['description']) AND isset($_FILES['img']['name'])) {

			$title = $_POST['title'];
			$date = $_POST['date'];
			$time = $_POST['time'];
			$description = $_POST['description'];

			$extensionValide = array('jpg', 'gif', 'jpeg', 'png');
			$extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], "."), 1));

			if (in_array($extensionUpload, $extensionValide)) {
				  $photo = 1;
                  $chemin = "../images/Evenement/".$_FILES['img']['name'];
                  $insertimg = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);

            $req = $bdd->prepare("INSERT INTO `ad_event` (`id_event`, `titre_event`, `date_event`, `time_event`, `description_event`, `image`) VALUES (NULL, ?, ?, ?, ?, ?);");
			$req->execute(array($title, $date, $time, $description, $_FILES['img']['name']));

				$msgmaintso = "<b> Evenement crée <i class='fa fa-check-circle'></i> </b>";

			}else
					{
					 $msgmena = " <b>Format d'image invalide <i class='fa fa-warning'></i></b>";
					}

			


		}
	}
	else
		{
			$msgmena = " <b>Tous les champs doivent être remplis <i class='fa fa-warning'></i></b>";
		}
}

?>
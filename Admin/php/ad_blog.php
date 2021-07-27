<?php include'connexion.php'; 

if (isset($_POST['envoyer'])) {
	if (!empty($_POST['object']) AND !empty($_POST['contained']) AND !empty($_FILES['img']['name'])) {
		if (isset($_POST['object']) AND isset($_POST['contained']) AND isset($_FILES['img']['name'])) {
			$objet = $_POST['object'];
			$contained = $_POST['contained'];
			$contained_two = $_POST['contained_two'];

			$extensionValide = array('jpg', 'gif', 'jpeg', 'png');
			$extensionUpload = strtolower(substr(strrchr($_FILES['img']['name'], "."), 1));

			if (in_array($extensionUpload, $extensionValide)) {
				  $photo = 1;
                  $chemin = "../images/Blog/".$_FILES['img']['name'];
                  $insertimg = move_uploaded_file($_FILES['img']['tmp_name'], $chemin);
            $reqBlog = $bdd->prepare("INSERT INTO `blog` (`id_blog`, `object`, `contained`, `image`, `contained_2` , `date_de_pub`) VALUES (NULL, ?, ?, ?, ?, current_timestamp());");
            $reqBlog->execute(array($objet,$contained, $_FILES['img']['name'], $contained_two));

            	$msgmaintso = "<b> Blog ajoutée <i class='fa fa-check-circle'></i> </b>";
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
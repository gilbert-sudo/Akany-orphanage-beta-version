 <?php 
 include 'connexion.php';
 if (isset($_POST['change'])) {
 	if (isset($_POST['newname']) AND !empty($_POST['newname'])) {

			$newname = $_POST['newname'];
		
                $newnameWitness = $bdd->prepare("UPDATE `temoignage` SET `nom_temoin` = ? WHERE `temoignage`.`id_temoin` = ? ");
                $newnameWitness->execute(array($newname, $_GET['id_temoin']));
                header('Location:gerer_temoignage.php');

        if (isset($_POST['newtitle']) AND !empty($_POST['newtitle'])) {

			$newtitle = $_POST['newtitle'];
		
                $newtitleWitness = $bdd->prepare("UPDATE `temoignage` SET `title` = ? WHERE `temoignage`.`id_temoin` = ? ");
                $newtitleWitness->execute(array($newtitle, $_GET['id_temoin']));
                header('Location:gerer_temoignage.php');

            if (isset($_POST['newfunction']) AND !empty($_POST['newfunction'])) {

			$newtime = $_POST['newfunction'];

                $newfunctionWitness = $bdd->prepare("UPDATE `temoignage` SET `function` = ? WHERE `temoignage`.`id_temoin` = ?  ");
                $newfunctionWitness->execute(array($newfunction, $_GET['id_temoin']));
                header('Location:gerer_temoignage.php');

                if (isset($_POST['newlien']) AND !empty($_POST['newlien'])) {

			$newlien = $_POST['newlien'];
		
                $newlienVideo = $bdd->prepare("UPDATE `temoignage` SET `lien_video` = ? WHERE `temoignage`.`id_temoin` = ? ");
                $newlienVideo->execute(array($newlien, $_GET['id_temoin']));


                header('Location:gerer_temoignage.php');

                    if (isset($_FILES['newimg']['name']) AND !empty($_FILES['newimg']['name'])) {

                    $extensionValide = array('jpg', 'gif', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['newimg']['name'], "."), 1));

                    if (in_array($extensionUpload, $extensionValide)) {
                  
                  $chemin = "../images/Temoin/".$_FILES['newimg']['name'];
                  $insertimg = move_uploaded_file($_FILES['newimg']['tmp_name'], $chemin);
        
                    $newdateEvent = $bdd->prepare("UPDATE `temoignage` SET `images` = ? WHERE `temoignage`.`id_temoin` = ? ");
                    $newdateEvent->execute(array($_FILES['newimg']['name'], $_GET['id_temoin']));
                     
                 header('Location:gerer_temoignage.php');
                }

            }
               

            }

            }
		}
	}
}



 

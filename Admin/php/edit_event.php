 <?php 
 include 'connexion.php';
 if (isset($_POST['change'])) {
 	if (isset($_POST['newtitle']) AND !empty($_POST['newtitle'])) {

			$newtitle = $_POST['newtitle'];
		
                $newtitleEvent = $bdd->prepare("UPDATE `ad_event` SET `titre_event` = ? WHERE `ad_event`.`id_event` = ? ");
                $newtitleEvent->execute(array($newtitle, $_GET['id_event']));
                header('Location:gerer_event.php');

        if (isset($_POST['newdate']) AND !empty($_POST['newdate'])) {

			$newdate = $_POST['newdate'];
		
                $newdateEvent = $bdd->prepare("UPDATE `ad_event` SET `date_event` = ? WHERE `ad_event`.`id_event` = ? ");
                $newdateEvent->execute(array($newdate, $_GET['id_event']));
                header('Location:gerer_event.php');

            if (isset($_POST['newtime']) AND !empty($_POST['newtime'])) {

			$newtime = $_POST['newtime'];
		
                header('Location:gerer_event.php');

                $newtimeEvent = $bdd->prepare("UPDATE `ad_event` SET `time_event` = ? WHERE `ad_event`.`id_event` = ?  ");
                $newtimeEvent->execute(array($newtime, $_GET['id_event']));
                header('Location:gerer_event.php');

                if (isset($_POST['newdescription']) AND !empty($_POST['newdescription'])) {

			$newdescription = $_POST['newdescription'];
		
                $newdescriptionEvent = $bdd->prepare("UPDATE `ad_event` SET `description_event` = ? WHERE `ad_event`.`id_event` = ? ");
                $newdescriptionEvent->execute(array($newdescription, $_GET['id_event']));


                header('Location:gerer_event.php');

                    if (isset($_FILES['newimg']['name']) AND !empty($_FILES['newimg']['name'])) {

                    $extensionValide = array('jpg', 'gif', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['newimg']['name'], "."), 1));

                    if (in_array($extensionUpload, $extensionValide)) {
                  
                  $chemin = "../images/Evenement/".$_FILES['newimg']['name'];
                  $insertimg = move_uploaded_file($_FILES['newimg']['tmp_name'], $chemin);
        
                    $newdateEvent = $bdd->prepare("UPDATE `ad_event` SET `image` = ? WHERE `ad_event`.`id_event` = ? ");
                    $newdateEvent->execute(array($_FILES['newimg']['name'], $_GET['id_event']));
                     
                 header('Location:gerer_event.php');
                }

            }
               

            }

            }
		}
	}
}



 

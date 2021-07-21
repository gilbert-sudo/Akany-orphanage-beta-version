 <?php 
 include 'connexion.php';
 if (isset($_POST['change'])) {
 	if (isset($_POST['newtypes']) AND !empty($_POST['newtypes'])) {

			$newtypes = $_POST['newtypes'];
		
                $newtypeService = $bdd->prepare("UPDATE `service` SET `types` = ? WHERE `service`.`id_services` = ? ");
                $newtypeService->execute(array($newtypes, $_GET['id_services']));
                header('Location:gerer_service.php');

        if (isset($_POST['newexpl']) AND !empty($_POST['newexpl'])) {

			$newexpl = $_POST['newexpl'];
		
                $newexplService = $bdd->prepare("UPDATE `service` SET `commentaires` = ? WHERE `service`.`id_services` = ? ");
                $newexplService->execute(array($newexpl, $_GET['id_services']));
                header('Location:gerer_service.php');


            if (isset($_FILES['newimg']['name']) AND !empty($_FILES['newimg']['name'])) {

                    $extensionValide = array('jpg', 'gif', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['newimg']['name'], "."), 1));

                    if (in_array($extensionUpload, $extensionValide)) {
                  
                  $chemin = "../images/services/".$_FILES['newimg']['name'];
                  $insertimg = move_uploaded_file($_FILES['newimg']['tmp_name'], $chemin);
        
                    $newimgService = $bdd->prepare("UPDATE `service` SET `images` = ? WHERE `service`.`id_services` = ? ");
                    $newimgService->execute(array($_FILES['newimg']['name'], $_GET['id_services']));
                     
                 header('Location:gerer_service.php');
                }

            }
               

            }

            }
		}
	




 

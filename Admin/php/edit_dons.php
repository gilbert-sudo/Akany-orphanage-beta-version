 <?php 
 include 'connexion.php';
 if (isset($_POST['change'])) {
 	if (isset($_POST['newbut']) AND !empty($_POST['newbut'])) {

			$newbut = $_POST['newbut'];
		
                $newbutDons = $bdd->prepare("UPDATE `demande_dons` SET `but` = ? WHERE `demande_dons`.`id` = ? ");
                $newbutDons->execute(array($newbut, $_GET['id']));
                header('Location:gerer_dons.php');

        if (isset($_POST['newbudg']) AND !empty($_POST['newbudg'])) {

			$newbudg = $_POST['newbudg'];
		
                $newbudgDons = $bdd->prepare("UPDATE `demande_dons` SET `fond` = ? WHERE `demande_dons`.`id` = ? ");
                $newbudgDons->execute(array($newbudg, $_GET['id']));
                header('Location:gerer_dons.php');

            if (isset($_POST['newexp']) AND !empty($_POST['newexp'])) {

			$newexp = $_POST['newexp'];

		        $newexpDons = $bdd->prepare("UPDATE `demande_dons` SET `description` = ? WHERE `demande_dons`.`id` = ?  ");
                $newexpDons->execute(array($newexp, $_GET['id']));
                header('Location:gerer_dons.php');


            if (isset($_FILES['newimg']['name']) AND !empty($_FILES['newimg']['name'])) {

                    $extensionValide = array('jpg', 'gif', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['newimg']['name'], "."), 1));

                    if (in_array($extensionUpload, $extensionValide)) {
                  
                  $chemin = "../images/Demande_dons/".$_FILES['newimg']['name'];
                  $insertimg = move_uploaded_file($_FILES['newimg']['tmp_name'], $chemin);
        
                    $newimgDons = $bdd->prepare("UPDATE `demande_dons` SET `images` = ? WHERE `demande_dons`.`id` = ? ");
                    $newimgDons->execute(array($_FILES['newimg']['name'], $_GET['id']));
                     
                 header('Location:gerer_dons.php');
                }

            }
               

            }

            }
		}
	}




 

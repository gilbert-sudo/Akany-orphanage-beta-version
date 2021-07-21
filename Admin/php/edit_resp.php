 <?php 
 include 'connexion.php';
 if (isset($_POST['change'])) {
 	if (isset($_POST['newname']) AND !empty($_POST['newname'])) {

			$newname = $_POST['newname'];
		
                $newnameResp = $bdd->prepare("UPDATE `responsable` SET `nom_resp` = ? WHERE `responsable`.`id_resp` = ? ");
                $newnameResp->execute(array($newname, $_GET['id_resp']));
                header('Location:gerer_resp.php');

        if (isset($_POST['newpname']) AND !empty($_POST['newpname'])) {

			$newpname = $_POST['newpname'];
		
                $newpnameResp = $bdd->prepare("UPDATE `responsable` SET `prenom_resp` = ? WHERE `responsable`.`id_resp` = ? ");
                $newpnameResp->execute(array($newpname, $_GET['id_resp']));
                header('Location:gerer_resp.php');

            if (isset($_POST['newfunction']) AND !empty($_POST['newfunction'])) {

			$newfunction = $_POST['newfunction'];

		        $newfunctionResp = $bdd->prepare("UPDATE `responsable` SET `fonction` = ? WHERE `responsable`.`id_resp` = ? ");
                $newfunctionResp->execute(array($newfunction, $_GET['id_resp']));
                header('Location:gerer_resp.php');


            if (isset($_FILES['newimg']['name']) AND !empty($_FILES['newimg']['name'])) {

                    $extensionValide = array('jpg', 'gif', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['newimg']['name'], "."), 1));

                    if (in_array($extensionUpload, $extensionValide)) {
                  
                  $chemin = "../images/Responsable/".$_FILES['newimg']['name'];
                  $insertimg = move_uploaded_file($_FILES['newimg']['tmp_name'], $chemin);
        
                    $newimgDons = $bdd->prepare("UPDATE `responsable` SET `image` = ? WHERE `responsable`.`id_resp` = ? ");
                    $newimgDons->execute(array($_FILES['newimg']['name'], $_GET['id_resp']));
                     
                 header('Location:gerer_resp.php');
                }

            }
               

            }

            }
		}
	}




 

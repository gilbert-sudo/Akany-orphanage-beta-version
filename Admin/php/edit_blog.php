 <?php 
 include 'connexion.php';
 if (isset($_POST['change'])) {
 	if (isset($_POST['newobject']) AND !empty($_POST['newobject'])) {

			$newobject = $_POST['newobject'];
		
                $newObjectBlog = $bdd->prepare("UPDATE `blog` SET `object` = ? WHERE `blog`.`id_blog` = ? ");
                $newObjectBlog->execute(array($newobject, $_GET['id_blog']));
                header('Location:gerer_blog.php');

        if (isset($_POST['newcontained']) AND !empty($_POST['newcontained'])) {

			$newcontained = $_POST['newcontained'];
		
                $newcontainedBlog = $bdd->prepare("UPDATE `blog` SET `contained` = ? WHERE `blog`.`id_blog` = ? ");
                $newcontainedBlog->execute(array($newcontained, $_GET['id_blog']));
                header('Location:gerer_blog.php');

                if (isset($_POST['newcontainedtwo']) AND !empty($_POST['newcontainedtwo'])) {
                    $newcontainedtwo = $_POST['newcontainedtwo'];

                    $newcontainedtwoBlog = $bdd->prepare("UPDATE `blog` SET `contained_2` = ? WHERE `blog`.`id_blog` = ?; ");
                    $newcontainedtwoBlog->execute(array($newcontainedtwo, $_GET['id_blog']));

                  header('Location:gerer_blog.php');
                

                  if (isset($_FILES['newimg']['name']) AND !empty($_FILES['newimg']['name'])) {

                    $extensionValide = array('jpg', 'gif', 'jpeg', 'png');
                    $extensionUpload = strtolower(substr(strrchr($_FILES['newimg']['name'], "."), 1));

                    if (in_array($extensionUpload, $extensionValide)) {
                  
                  $chemin = "../images/blog/".$_FILES['newimg']['name'];
                  $insertimg = move_uploaded_file($_FILES['newimg']['tmp_name'], $chemin);
        
                    $newimgBlog = $bdd->prepare("UPDATE `blog` SET `image` = ? WHERE `blog`.`id_blog` = ? ");
                    $newimgBlog->execute(array($_FILES['newimg']['name'], $_GET['id_blog']));
                     
                 header('Location:gerer_blog.php');

                }

            }
               

            }

            }
		}
	}




 

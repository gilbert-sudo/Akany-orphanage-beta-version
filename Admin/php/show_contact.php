          <?php include 'connexion.php';
                    $reqcontact = $bdd->prepare("SELECT* FROM contacts");
                    $reqcontact->execute();
                     ?>
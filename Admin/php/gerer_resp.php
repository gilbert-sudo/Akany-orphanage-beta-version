<?php

include 'connexion.php';


          $reqresp = $bdd->prepare("SELECT * FROM responsable");
          $reqresp->execute();
          $inforesp = $reqresp->fetch();

          $_SESSION['id'] = $inforesp['id_resp'];

          
if (isset($_POST['del'])) {

$delresp = $bdd->prepare("DELETE FROM `responsable` WHERE `responsable`.`nom_resp` =?;");
$delresp->execute(array($afresp['nom_resp']));

}
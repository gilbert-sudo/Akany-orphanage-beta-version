<?php 
include 'connexion.php';
$reqnbr = $bdd->prepare("SELECT * FROM demande_dons");
       			  $reqnbr->execute();
              $donnbr = $reqnbr->rowCount();
              $i = 0;

      	while ($shownbr = $reqnbr->fetch()) { 
      	$donnbrtotal[$i++] = $shownbr['fond']; 			 
     	
     	}
     	 $i = 0;
          $totalnbr = 0;
          while ($i < $donnbr) {
            $totalnbr = $totalnbr + $donnbrtotal[$i++];
          }
          $totalnbreuro = $totalnbr / 3793.47;
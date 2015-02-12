<?php
include_once('includes/connexion.inc.php');
include_once ('setting/setting.php');

//Créer une instance de Smarty
require_once("libs/Smarty.class.php");
if (isset($connect) and $connect == TRUE) {
$smarty2 = new Smarty();
//Suppression du cookie en lui donnant une durée de vie négative
setcookie("sid", time() - 1);
$_SESSION['notification']=" Vous ete bien Déconnecter ";
/*
 //$montexte2 = "<p> Vous ete bien Déconnecter </p>";


//Attribution d'une variable a l'instance $smarty2
$smarty2->assign("texteSmarty2", $montexte2);

include_once('includes/header.inc.php');

//Affichage du contenu du templet de l'instance smarty 
$smarty2->display("templet/deconnexion.tpl");

include_once('includes/nav.inc.php');

include_once('includes/footer.inc.php');
*/
 header('location:index.php?click=1');
}
else {
    header('location:connexion.php');
}
?>

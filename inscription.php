 



<?php

include_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once("libs/Smarty.class.php");

//Créer une instance de Smarty
$smarty4 = new Smarty();
if (isset($_POST['inscrire'])) {
    $nom = addcslashes($_POST['nom'], "'\_*%");
    $prenom = addcslashes($_POST['prenom'], "'\_*%");
    $email = addcslashes($_POST['email'], "'\_*%");
    $mdp = addcslashes($_POST['mdp'], "'\_*%");

    $sql = "INSERT INTO utilisateur (nom, prenom,email, mdp) VALUES('$nom', '$prenom', '$email', '$mdp') "; // Insert nos données et on lui demende de retourner l'id de la ligne qu'il vient d'inserer
    $result = mysql_query($sql);
}

include_once('includes/header.inc.php');

$smarty4->display("templet/inscription.tpl");

include_once('includes/nav.inc.php');

include_once('includes/footer.inc.php');
?>



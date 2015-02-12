<?php
include_once('includes/connexion.inc.php');
require_once('setting/setting.php');


//Créer une instance de Smarty
require_once("libs/Smarty.class.php");
$smartysup = new Smarty();

if (isset($connect) and $connect == TRUE) {
    
    $id = $_GET['id'];
    $sql = "DELETE FROM articles where id = $id ";
    mysql_query($sql);

//verifie si l'image existe
    if (file_exists(dirname(__FILE__) . "/img/$id.jpg")) {
//supression de l'image
        unlink(dirname(__FILE__) . "/img/$id.jpg");
    }
    $textesup = "La suppression est effectuer avec succès !";
    //Attribution d'une variable a l'instance
    $smartysup->assign("messagesup", $textesup);
    include_once('includes/header.inc.php');
    $smartysup->display("templet/supprimer.tpl");
    include_once('includes/nav.inc.php');
    include_once('includes/footer.inc.php');
} else {
    header('location:connexion.php');
}
?>

<?php
include_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once("libs/Smarty.class.php");


//Créer une instance de Smarty
$smarty3 = new Smarty();


if (isset($_POST['con'])) {
    //variable de connexion utilisateur recuperation methode post
    $email = addcslashes($_POST['email'], "'\_*%");
    $mdp = addcslashes($_POST['mdp'], "'\_*%");

    //echo $email;
    //echo $mdp;
    //
   //requete recuperation variable utilisateur en bdd
    $sql = "select * from  utilisateur where email = '$email' and mdp  ='$mdp'"; // 


    $exe = mysql_query($sql);
    $tab = mysql_fetch_array($exe); // Mets les resultats dans un tableau 
    //print_r($tab);
    //verification si le tableau exist
    if ($tab) {
        // print_r($tab);
        //creation du sid avec la fonction md5 pour crypter $sid selon le temps qui est unique  
        $sid = md5($email . time());
        //insertion du sid dans la bdd
        $sql2 = "UPDATE utilisateur SET sid='$sid' WHERE email = '$email' and mdp  = '$mdp'";
       // echo $sql2;

        mysql_query($sql2);
        //creation du cookie a partir du sid
        setcookie("sid", $sid, time() + 3600);
         header('location:index.php?click'); 
    } else {
        // Message d'erreure si l'utilisateur a saisie des identifiant incorrecte et renvoie sur la meme page
        session_start();
        $_SESSION['Notifconnexion'] = " Échec de la connexion sécurisée probleme de mot de passe ou email ";
        header('location:connexion.php');
    }
} else {

    include_once('includes/header.inc.php');
//Teste renvoie Message d'erreure si l'utilisateur a saisie des identifiant incorrecte
    if (isset($_SESSION['Notifconnexion'])) {
       
         $textesnotif = $_SESSION['Notifconnexion'];
    //Attribution d'une variable a l'instance
    $smarty3->assign("notifconnexion", $textesnotif);
        session_unset($_SESSION['Notifconnexion']);
    }
      $smarty3 ->display("templet/connexion.tpl");
   
    include_once('includes/nav.inc.php');
    include_once('includes/footer.inc.php');
}
?>
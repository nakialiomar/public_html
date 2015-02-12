<?php
/*
 * Function de Démarrage d'une session 
 * pour permettre l'utilisation des variables de session .
 */
session_start();

//paramettre de connexion a la bd
mysql_connect("localhost", "u221867275_blog", "Admin1@") or ( 'connexion impossible : ' . mysql_error());
mysql_select_db("u221867275_blog");

//Verification si le cookie sid existe 
if (isset($_COOKIE['sid'])) {
    $cookie = $_COOKIE['sid'];
    //
    $sql3 = "select * from  utilisateur where sid = '$cookie' ";
    $exe = mysql_query($sql3);
    $tab = mysql_fetch_array($exe); // Mets les resultats dans un tableau 
    //verification si le cookie sid correspond au cookie de la bdd sid
    $idutil=$tab['id'];
   
    
    if ($cookie == $tab['sid']) {
        $connect = TRUE;

    }
    
} else {
$connect = FALSE;
}S
?>
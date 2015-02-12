<?php
include_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once("libs/Smarty.class.php");

$smarty5 = new Smarty();

if (isset($connect) and $connect == TRUE) {

//verifier si on a cliquer sur le bouton envoyer 
    if (isset($_POST['Ajouter']) OR isset($_POST['Modifier'])) {
        //recuperation de donner du formulaire par la methode poste avec les nom de champs
        $id = $_POST['id'];
        $titre =  mysql_real_escape_string($_POST['titre']);
        $texte =  mysql_real_escape_string($_POST['texte']);
      
//cette condition me permet de verifier si la variable publie a etaaiit poster = 1 sinon c'est = 0
        $publie = (isset($_POST['publie'])) ? $_POST['publie'] : 0;
        $date = date('Y/m/d/');

//echo $date;
        echo "  ";
//echo $publie;
        /* insert un article dans la base de donner et on retourne l'id de la requete ruturn id 
          sur mysql on utilise mysql_insert_id(); a la place de isert_id
         */
        if (isset($_POST['Ajouter'])) { //Si le bouton sur lequel on clique s'apelle Ajouter alors on execute cette requete 
            $req = "INSERT INTO articles (titre,texte,date,publie) VALUES ('".$titre."','".$texte."','".$date."','".$publie."')";
      // echo $req;
       
        } else { // Sinon celle ci ( Bouton modifier )
            $req = "UPDATE articles SET titre = '$titre', texte = '$texte', date = '$date' , publie = $publie WHERE id =  '$id'"; // Insert nos données et on lui demende de retourner l'id de la ligne qu'il vient d'inserer
        
        }

        // echo $insert_id;
//verification si l'image ne contient pas d'erreurs
        if (!empty($_POST['image'])) {
            $erreur_img = $_FILES['image']['error'];
        } else {
            $erreur_img = "Erreur d'image";
        }
        $resultat = mysql_query($req);

        if (isset($_POST['Ajouter'])) {
            
            $insert_id = mysql_insert_id();;
            //recuperation du nom du chemin de l'image et on le deplace ver la racine du serveur dans img avec le numero de l'id 
            move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$insert_id.jpg");
          //  print_r($_FILES);
           /* echo "   ";
            echo $_FILES['image']['tmp_name'];
            return 0; */
            $_SESSION['notification'] = "felicitation votre article a bien ete ajouter";
        } else {//modification de l'image de l'image
            $insert_id = $id;
            move_uploaded_file($_FILES['image']['tmp_name'], dirname(__FILE__) . "/img/$insert_id.jpg");
            $_SESSION['notification'] = "felicitation votre article a bien ete modifier";
        }

//print("<center>Bonjour $titre $texte</center>"); 
//print_r($_POST);

    header('location:article.php'); 
    } else {

        if (isset($_GET['id'])) {
            $req_aff = 'SELECT id, titre, texte, DATE_FORMAT(date, \'%d/%m/%Y\')as date_fr, publie FROM articles WHERE id =' . $_GET['id']; // Crée la requête d'affichage et sort la date en version Française  
            $exe = mysql_query($req_aff); // Execute la requête et l'ajoute dans une variable         
            $tab = mysql_fetch_array($exe); //Execute la requête et l'affiche ensuite 
            extract($tab);
            $titre = $tab['titre'];
            $texte = $tab['texte'];
            $id = $tab['id'];
            $publie = $tab['publie'];
      
         $smarty5->assign("monid", $id);
        }
 else {
     
            $titre = "";
            $texte = "";
            $id = 0;
            $publie = 0;    
            $smarty5->assign("monid", $id);
 }
        
           
            $smarty5->assign("montitre", $titre);
            $smarty5->assign("montexte", $texte);
            $smarty5->assign("monpublie",$publie);
       
        
        
         $nom_bouton = (isset($_GET['id'])) ? "Modifier" : "Ajouter";  // si il y a un id le bouton s'appelle Modifier sinon il s'apellera ajouter'        
          $smarty5->assign("nom_bouton",$nom_bouton);
        include_once('includes/header.inc.php');
        
        

        $smarty5->display("templet/article.tpl");

        include_once('includes/nav.inc.php');
        include_once('includes/footer.inc.php');
       
    }
} else {
    header('location:connexion.php');
}
?> 

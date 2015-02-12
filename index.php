<?php
include_once('includes/connexion.inc.php');
require_once('setting/setting.php');
require_once("libs/Smarty.class.php");


//Créer une instance de Smarty

/* cette fonction permet de supprimer les variable de session suivante $_SESSION['$marecherche'] $_SESSION['page_courante']
 * j'utilise ces variales pour permettre l'affichage dans differentes pages le resultat d'une recherche .
 * les variables serons supprimer au clic du lien de la page accueil (index )
 * pour pouvoir avoir l'affichage normale de la page accueil (c'est a dire sans recherche)
 */
if (isset($_GET['click'])) {
    unset($_SESSION['$marecherche']);
    unset($_SESSION['page_courante']);
    // session_destroy();
    header("location:index.php");

    exit();
}
$smarty6 = new Smarty();
$nbarticleparpage = 2;

function pagination($nbarticleparpage, $page_courante, $unerecherche) {//, $recherche
    /*   $req = " SELECT count(*) FROM articles "; //publie = 1 AND (titre LIKE '%$marecherche%' OR texte LIKE '%$marecherche%');
      var_dump($req); */

    if (isset($unerecherche) && strlen($unerecherche) != 0) {
        $req = "SELECT count(*) as nb FROM articles WHERE publie = 1 AND (titre LIKE '%$unerecherche%' OR texte LIKE '%$unerecherche%');";
    } else {
        $req = ' SELECT count(*) as nb FROM articles WHERE publie = 1';
    }
    $exe = mysql_query($req);
    $nbarticle = mysql_fetch_array($exe);
    $nbarticle = $nbarticle['nb'];
    $nbpage = ceil($nbarticle / $nbarticleparpage);
    //print_r($nbarticle);
    //$req3= " select id from articles order by id limit 1 offset 0";
//return  $nbpage; 
    $index = ($page_courante - 1) * $nbarticleparpage;



    /* for ($i=1; $i <= $nbpage ; $i+$nbarticleparpage) 
      {

      } */
    return array($nbpage, $index);
}

//print_r($var);
//echo $var[0];
//echo $var[1];

?>  


<br>
<?php
if (isset($_SESSION['notification'])) {
    echo "<h4>";
    echo $_SESSION['notification'];
    echo "</h4>";
    session_destroy();
}
?>
<br>

<?php
if (isset($_GET['recherche'])) {
    $_SESSION['page_courante'] = (isset($_GET['p'])) ? $_GET['p'] : 1;

    $_SESSION['$marecherche'] = $_GET['recherche'];
    $marecherche = $_SESSION['$marecherche'];
    $var = pagination($nbarticleparpage, $_SESSION['page_courante'], $_SESSION['$marecherche']); //, $recherche
    $req_aff = "SELECT id,titre, texte, DATE_FORMAT(date, '%d/%m/%Y')as date_fr FROM articles WHERE publie = 1 AND (titre LIKE '%$marecherche%' OR texte LIKE '%$marecherche%') order by id limit 2 offset $var[1] ;";
} else if (isset($_SESSION['$marecherche']) && strlen($_SESSION['$marecherche']) != 0) {
    $marecherche = $_SESSION['$marecherche'];
    $_SESSION['page_courante'] = (isset($_GET['p'])) ? $_GET['p'] : 1;
    $var = pagination($nbarticleparpage, $_SESSION['page_courante'], $_SESSION['$marecherche']); //, $recherche
    $req_aff = "SELECT id,titre, texte, DATE_FORMAT(date, '%d/%m/%Y')as date_fr FROM articles WHERE publie = 1 AND (titre LIKE '%$marecherche%' OR texte LIKE '%$marecherche%') order by id limit 2 offset $var[1] ;";
} else {
    $page_courante = (isset($_GET['p'])) ? $_GET['p'] : 1;
    $marecherche = "";

    $var = pagination($nbarticleparpage, $page_courante, $marecherche);
// requete pour affiche les articles dont il sont publier (=1)
//$req_aff="SELECT id,titre,texte,DATE_FORMAT(date, '%d/%m/%Y')as date_fr FROM articles where publie = 1 ORDER BY id "; 
    $req_aff = "SELECT id,titre,texte,DATE_FORMAT(date, '%d/%m/%Y')as date_fr FROM articles where publie = 1 order by id limit 2 offset $var[1] ";
}

// Vérification si on na fait une recherche,si la requête de recherche retourne quelque chose ou si on a rien saisie
if (isset($_GET['recherche']) && ((mysql_num_rows(mysql_query($req_aff)) == false) or ( strlen($_SESSION['$marecherche']) == 0))) {
    echo 'Il n\'y a pas de recherche corresondante';
} else {
    // execution de la requete d'afffichages des articles publier         
    $exe = mysql_query($req_aff);
//on stock dans une table le article publie tant qu'il ya encore des article
    while ($tab = mysql_fetch_array($exe)) {
 
        $montab[] = $tab;
   
        
    }
    //verification si $connect existe et que on est bien connecter pour affiche le bouton modifier et supprimer 
    if (isset($connect) and $connect == TRUE) {
        $smarty6->assign("connect", $connect);
    } // fin verification si on est connecter 
    
    //Attribution d'une variable a l'instance
    $smarty6->assign("montableau", $montab);
     $smarty6->assign("leid", $tab['id']);
    $smarty6->assign("varpage", $var[0]);
      if (isset($_POST['poster']))
  {
   // $smarty5->assign("montitre", $titre);
   
    $commentaire = mysql_real_escape_string($_POST['commentaire']);
  $id = $_POST['id'];
  echo $id;
$dtime= date("Y-m-d H:i:s");
    $reqinsert = "INSERT INTO commentaires (id_article,id_utilisateur,commentaire,date_commentaire) VALUES ('".$id."','".$idutil."','".$commentaire."','".$dtime."')";
    $resultat = mysql_query($reqinsert);
  /* $reqAffcomment =" select nom,prenom,commentaire,date_commentaire from utilisateur as u,commentaires as c,articles as a 
        where a.id=c.id_article 
        and u.id = c.id_utilisateur
        and a.id = '".$id."';";
 $execom = mysql_query($reqAffcomment);
//on stock dans une table le article publie tant qu'il ya encore des article
    while ($tabcom = mysql_fetch_array($execom)) {
 
        $montabcom[] = $tabcom;
    }
        //Attribution d'une variable a l'instance
    $smarty6->assign("montableaucom", $montabcom);
  */
    
    
  }
 // print_r($montab);
if (isset ($montab[0][0]))
{
  $reqAffcomment ="SELECT a.id, nom, prenom, commentaire, DATE_FORMAT( date_commentaire, '%d/%m/%Y %H:%i:%s' ) AS date_commentaire
FROM utilisateur AS u, commentaires AS c, articles AS a
WHERE a.id = c.id_article
AND u.id = c.id_utilisateur
AND a.id = '".$montab[0][0]."'  and  publie =1
ORDER BY date_commentaire ASC";
   $execom = mysql_query($reqAffcomment);
//on stock dans une table le article publie tant qu'il ya encore des article
    while ($tabcom = mysql_fetch_array($execom)) {
 
        $montabcom[] = $tabcom;
    
        if(isset($tabcom)){ 
     
            
               $smarty6->assign("montableaucom", $montabcom);  
           
                 //Attribution d'une variable a l'instance  
        }
}
}
if (isset ($montab[1][0]))
{
   $reqAffcomment2 ="SELECT a.id, nom, prenom, commentaire, DATE_FORMAT( date_commentaire, '%d/%m/%Y %H:%i:%s' ) AS date_commentaire
FROM utilisateur AS u, commentaires AS c, articles AS a
WHERE a.id = c.id_article
AND u.id = c.id_utilisateur
AND a.id = '".$montab[1][0]."' and  publie =1
ORDER BY date_commentaire ASC";
   
    $execom2 = mysql_query($reqAffcomment2);
//on stock dans une table le article publie tant qu'il ya encore des article
    while ($tabcom2 = mysql_fetch_array($execom2)) {
 
        $montabcom2[] = $tabcom2;
    
        if(isset($tabcom2)){ 
     
          
                
               $smarty6->assign("montableaucom2", $montabcom2);  
            
                 //Attribution d'une variable a l'instance  
        }
}
   
}
  
}

include_once('includes/header.inc.php');   
    
 $smarty6->display("templet/index.tpl");

include_once('includes/nav.inc.php');

include_once('includes/footer.inc.php');
?>
        
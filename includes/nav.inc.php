</div>
<nav class="span4">
    <h3>Menu</h3>

    <form action="index.php" method="get" enctype="multipart/form-data" id="form_recherche">


        <div class="clearfix" >

            <div class="input"><input type="text" name="recherche" id="recherche" placeholder="votre recherche ..."/>            

            </div >  
        </div >  
        <div class="form-inline">
            <input type="submit" name="" value="recherche" class="btn btn-mini btn-primary">
        </div>
    </form>

    <ul>
        <li><a href="index.php?click=1">Accueil</a></li> 

        <?php
        /*verification si $connect existe et que on est bien connecter = true 
         * pour afficher les liens de l'utilisateur
         */
        if (isset($connect) and $connect == TRUE) {
            ?>
            <li><a href="article.php">Rediger un article</a></li>

            <li><a href="deconnection.php">Se Déconnecter</a></li>
            <li><a href="connexion.php">Statut connexion : <?php echo "<span style='color: green;'>En ligne</span>";?> </a></li>
  
            

            <?php
        } else {
            //affiche ces liens si on est pas connecter 
            ?>  
            <li><a href="inscription.php">S'inscrire</a></li> 
            <li><a href="connexion.php">Se Connecter </a></li>
            <li><a href="connexion.php">Statut connexion : <?php echo "<span style='color: red;'>Hors ligne</span>";?> </a></li>
  
            <?php
        }
        ?>
              </ul>

</nav>

</div>

</div>
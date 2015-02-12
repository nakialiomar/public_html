   
{if isset($notifconnexion) } <h4><b><font color='red'>
        {$notifconnexion} </font></b></h4>
{/if}


<h2>Connexion</h2>
       
    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_article" name="form_inscription"> 
        <div class="row">

            <div class="span8">
                <!-- notifications -->

                <!-- contenu -->





                <div class="clearfix"> <!-- Permet de créer un formulaire nom -->                            
                    <label for="email">Email </label>
                    <div class="input">
                        <input type="email" name="email" id="email" value=""> <!-- Définie le email-->
                    </div>
                </div>

                <div class="clearfix"> <!-- Permet de créer un formulaire mot de passe -->                            
                    <label for="mdp">Mot de passe </label>
                    <div class="input">
                        <input type="password" name="mdp" id="mdp" value=""> <!-- motdepass-->
                    </div>
                </div>



                <div class="form-actions"> 

                    <input type="submit" name="con" value="Se connecter" class="btn btn-large btn-primary">
                </div>

            </div>  
        </div>  
    </form>
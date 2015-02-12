<h2>Ajout d'un Article</h2>
        <form action="article.php" method="post" enctype="multipart/form-data"
              id="form_article" name="form_article">

            <input type="hidden" name="id" value="{$monid}"/>

            <div class="row">

                <div class="span8"> 

                    <div class="clearfix">

                        <label for="titre">Titre</label>
                        <div class="input">
                            <input type="text" name="titre" id="titre" value="{if isset($montitre) } {$montitre} {/if}"/>
     
                            
                        </div>

                    </div>

                    <div class="clearfix">

                        <label for="text">Texte</label>
                        <div class="textearea">
                            <textarea type="text" name="texte" id="texte" style=" width : 400px;"rows="10" cols="70" >{if isset($montexte) } {$montexte}{/if}</textarea>
                        </div>

                    </div>
                    <div class="clearfix">

                        <label for="image"> Image </label>
                        <div class="input">
                            <img src="img/{if isset($monid)}{$monid}{/if}.jpg" width ='100'><!-- Définie l'image -->
                            <input type="file" name="image" id="image">
                        </div>

                    </div>
                    <div class="clearfix">

                        <label for="publie"> Publié </label>
                        <div class="input">
                            <input type="checkbox" name="publie" id="publie" value="1" {if {$monpublie} } checked {/if} >
         <!-- Permet si on coche la case de mettre l'article en mode 1 (visible)  -->
                        </div>

                    </div>

                    <div class="form-actions"> 
       
                        <input type="submit" name="{$nom_bouton}" value="{$nom_bouton}" class="btn btn-large btn-primary">
                    </div> 



                </div>
            </div>
        </form>
              
                    
                    
                    
                    
                    
                    
             
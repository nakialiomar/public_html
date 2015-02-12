

<script type="text/javascript">
    function metfocus(){
       
		 document.getElementById('elem').style.display = "block";
		  document.getElementById('elem2').style.display = "block";
		  document.getElementById("elem").focus();
         
}
    function metfocus2(){
       
		 document.getElementById('2elem').style.display = "block";
		  document.getElementById('2elem2').style.display = "block";
		  document.getElementById("2elem").focus();
         
}
    
</script>
 {if isset($smarty.get.idarticle) and $smarty.get.idarticle == $montableau.0.id}
<body onload="metfocus();">
 {elseif isset($smarty.get.idarticle) and $smarty.get.idarticle == $montableau.1.id} 
 <body onload="metfocus2();"> {/if}  
   {if isset($montableau)}  
   <img src="img/{$montableau.0.id}.jpg"  alt="Mountain View" style="width:350px;height:270px">
     <h2>  {$montableau.0.titre} </h2>
     

     {*<pre> Affiche integrallement le texte tel qu'il est écrit en respectant  les tabulations et les sauts à la ligne de la base de donnée *}
        <pre> {$montableau.0.texte} </pre>

        <span><p>Date : {$montableau.0.date_fr}</p> </span><br> 
        
       {*verification si $connect existe et que on est bien connecter pour affiche le bouton modifier et supprimer *}
      
             {if isset($connect) and $connect == 1 }   
            <a href="article.php?id={$montableau.0.id}"><input type="submit" name="envoyer" value="Modifier"></a> {*Affiche un bouton modifier qui prendra l'id *}
            <a href="supprimer.php?id={$montableau.0.id}"><input type="submit" name="envoyer" value="Supprimer"></a> {* Affiche un bouton supprimer qui prendra l'id *}
            <a href="index.php{if isset($smarty.get.p)}?p={$smarty.get.p}?idarticle={$montableau.0.id}{else}?idarticle={$montableau.0.id}{/if}"><input type="button" value="commenter"></a><br><br><br>
          
         {* fin verification si on est connecter *}
       {/if}
                  
         {if isset($montableaucom)} 
         <br><br>
 {foreach from=$montableaucom item=lee}
        commentaires
        
       <h6> {$lee.nom} {$lee.prenom} le {$lee.date_commentaire}</h6>  
      
       <pre><p>{$lee.commentaire}</p></pre>  
        {/foreach}
         {/if}
       
           {if isset($connect) and $connect == 1 } 
               <a href="index.php{if isset($smarty.get.p)}?p={$smarty.get.p}?idarticle={$montableau.0.id}{else}?idarticle={$montableau.0.id}{/if}"><input type="button" value="commenter"></a><br><br><br>
          
            <form action="index.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
   
                <input type="hidden" name="id" value="{$smarty.get.idarticle}"/>

<textarea id="elem" name="commentaire" style="display:none; width : 609px; " cols="50px" rows="1" ></textarea>
<input id="elem2" type="submit"  onclick="metfocus()" style="display:none;" value="poster" name="poster">
  </form>
           
           {/if}    
        {*    DEUXIEME ARTICLE   *} 
         {if isset($montableau.1.id)}
          <img src="img/{$montableau.1.id}.jpg"  alt="Mountain View" style="width:350px;height:270px">
     <h2>  {$montableau.1.titre} </h2>
     

     {*<pre> Affiche integrallement le texte tel qu'il est écrit en respectant  les tabulations et les sauts à la ligne de la base de donnée *}
        <pre> {$montableau.1.texte} </pre>

        <span><p>Date : {$montableau.1.date_fr}</p> </span><br> 
        
       {*verification si $connect existe et que on est bien connecter pour affiche le bouton modifier et supprimer *}
      
             {if isset($connect) and $connect == 1 }   
            <a href="article.php?id={$montableau.1.id}"><input type="submit" name="envoyer" value="Modifier"></a> {*Affiche un bouton modifier qui prendra l'id *}
            <a href="supprimer.php?id={$montableau.1.id}"><input type="submit" name="envoyer" value="Supprimer"></a> {* Affiche un bouton supprimer qui prendra l'id *}
            <a href="index.php{if isset($smarty.get.p)}?p={$smarty.get.p}?idarticle={$montableau.1.id}{else}?idarticle={$montableau.1.id}{/if}"><input type="button" value="commenter"></a><br><br><br>
         
             {/if}
            {if isset($montableaucom2)} 
         
 {foreach from=$montableaucom2 item=lee2}
        commentaires
        
       <h6> {$lee2.nom} {$lee2.prenom} le {$lee2.date_commentaire}</h6>  
      
       <pre><p>{$lee2.commentaire}</p></pre>
        {/foreach}
        
         {if isset($connect) and $connect == 1 }   
            <a href="index.php{if isset($smarty.get.p)}?p={$smarty.get.p}?idarticle={$montableau.1.id}{else}?idarticle={$montableau.1.id}{/if}"><input type="button" value="commenter"></a><br><br><br>
    {* fin verification si on est connecter *}{/if}
 
 <form action="index.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
 <input type="hidden" name="id" value="{$smarty.get.idarticle}"/>
<textarea id="2elem" name="commentaire" style="display:none;  width : 609px;" cols="50" rows="1" ></textarea>
<input id="2elem2" type="submit"  onclick="metfocus2()" style="display:none;" value="poster" name="poster">
  </form>
      
      {*fin DEUXIEME ARTICLE   *}  {/if}
         {/if}
     
        {* Permet d'avoir des liens permettant d'aller à la page voulu *} 
          <ul class="pagination">
              
     
         {if isset ($smarty.get.p) and $smarty.get.p > 1}
         <li><a href="index.php?p={$smarty.get.p-1}">&laquo;</a></li>
            {/if}
          {for $foo=1 to $varpage}
         
        <li> <a href="index.php?p={$foo}">Page {$foo} </a></li>
           {/for} 
        {if isset ($smarty.get.p) and $smarty.get.p < $varpage}
         <li><a href="index.php?p={$smarty.get.p+1}">&raquo;</a></li>
{/if}
   
              
      </ul>    {else}
               Bienvenue, Désoler il n'y a pas d'article disponible .
              
           {/if}    
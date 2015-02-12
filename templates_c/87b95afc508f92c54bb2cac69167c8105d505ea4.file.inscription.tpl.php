<?php /* Smarty version Smarty-3.1.15, created on 2015-02-03 21:47:48
         compiled from "templet/inscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129959886854d142044f1d64-60670977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b95afc508f92c54bb2cac69167c8105d505ea4' => 
    array (
      0 => 'templet/inscription.tpl',
      1 => 1419276351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129959886854d142044f1d64-60670977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54d142045acff5_73202068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d142045acff5_73202068')) {function content_54d142045acff5_73202068($_smarty_tpl) {?>
 <h2>Inscription </h2>
<form action="inscription.php" method="post" enctype="multipart/form-data" id="form_article" name="form_inscription"> 
    <div class="row">

        <div class="span8">
            <!-- notifications -->

            <!-- contenu -->
            

            <div class="clearfix"> <!-- Permet de créer un formulaire nom -->                            
                <label for="nom">Nom </label>
                <div class="input">
                    <input type="nom" name="nom" id="nom" value=""> <!-- Définie le nom-->
                </div>
            </div>

            <div class="clearfix"> <!-- Permet de créer un formulaire nom -->                            
                <label for="prenom">Prenom </label>
                <div class="input">
                    <input type="prenom" name="prenom" id="prenom" value=""> <!-- Définie le nom-->
                </div>
            </div>

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

                <input type="submit" name="inscrire" value="s'inscrire" class="btn btn-large btn-primary">
            </div>

        </div>  
   </div> 
</form><?php }} ?>

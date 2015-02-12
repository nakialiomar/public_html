<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 09:47:49
         compiled from "templet/connexion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175610098454b8de45bc2e54-03939640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e50c0e429a108fd506c1cad36c3e4a74b5cc9056' => 
    array (
      0 => 'templet/connexion.tpl',
      1 => 1420499572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175610098454b8de45bc2e54-03939640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notifconnexion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b8de45c8b570_37939852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b8de45c8b570_37939852')) {function content_54b8de45c8b570_37939852($_smarty_tpl) {?>   
<?php if (isset($_smarty_tpl->tpl_vars['notifconnexion']->value)) {?> <h4><b><font color='red'>
        <?php echo $_smarty_tpl->tpl_vars['notifconnexion']->value;?>
 </font></b></h4>
<?php }?>


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
    </form><?php }} ?>

<?php /* Smarty version Smarty-3.1.15, created on 2015-01-16 12:02:41
         compiled from "templet/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162395797954b8dfff2da460-14879467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '297769fc7d21eb8f302eb7975780d90fee77bffe' => 
    array (
      0 => 'templet/article.tpl',
      1 => 1421409730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162395797954b8dfff2da460-14879467',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b8dfff3552e6_39084013',
  'variables' => 
  array (
    'monid' => 0,
    'montitre' => 0,
    'montexte' => 0,
    'monpublie' => 0,
    'nom_bouton' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b8dfff3552e6_39084013')) {function content_54b8dfff3552e6_39084013($_smarty_tpl) {?><h2>Ajout d'un Article</h2>
        <form action="article.php" method="post" enctype="multipart/form-data"
              id="form_article" name="form_article">

            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['monid']->value;?>
"/>

            <div class="row">

                <div class="span8"> 

                    <div class="clearfix">

                        <label for="titre">Titre</label>
                        <div class="input">
                            <input type="text" name="titre" id="titre" value="<?php if (isset($_smarty_tpl->tpl_vars['montitre']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['montitre']->value;?>
 <?php }?>"/>
     
                            
                        </div>

                    </div>

                    <div class="clearfix">

                        <label for="text">Texte</label>
                        <div class="textearea">
                            <textarea type="text" name="texte" id="texte" style=" width : 400px;"rows="10" cols="70" ><?php if (isset($_smarty_tpl->tpl_vars['montexte']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['montexte']->value;?>
<?php }?></textarea>
                        </div>

                    </div>
                    <div class="clearfix">

                        <label for="image"> Image </label>
                        <div class="input">
                            <img src="img/<?php if (isset($_smarty_tpl->tpl_vars['monid']->value)) {?><?php echo $_smarty_tpl->tpl_vars['monid']->value;?>
<?php }?>.jpg" width ='100'><!-- Définie l'image -->
                            <input type="file" name="image" id="image">
                        </div>

                    </div>
                    <div class="clearfix">

                        <label for="publie"> Publié </label>
                        <div class="input">
                            <input type="checkbox" name="publie" id="publie" value="1" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['monpublie']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1) {?> checked <?php }?> >
         <!-- Permet si on coche la case de mettre l'article en mode 1 (visible)  -->
                        </div>

                    </div>

                    <div class="form-actions"> 
       
                        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['nom_bouton']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['nom_bouton']->value;?>
" class="btn btn-large btn-primary">
                    </div> 



                </div>
            </div>
        </form>
              
                    
                    
                    
                    
                    
                    
             <?php }} ?>

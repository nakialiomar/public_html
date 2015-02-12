<?php /* Smarty version Smarty-3.1.15, created on 2015-01-19 21:30:47
         compiled from "templet/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12974834654b8dd9fc80790-85651248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19d8307f6701d2519d3093d76fd725b764ccfd84' => 
    array (
      0 => 'templet/index.tpl',
      1 => 1421703037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12974834654b8dd9fc80790-85651248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54b8dda0089a17_39155356',
  'variables' => 
  array (
    'montableau' => 0,
    'connect' => 0,
    'montableaucom' => 0,
    'lee' => 0,
    'montableaucom2' => 0,
    'lee2' => 0,
    'varpage' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b8dda0089a17_39155356')) {function content_54b8dda0089a17_39155356($_smarty_tpl) {?>

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
 <?php if (isset($_GET['idarticle'])&&$_GET['idarticle']==$_smarty_tpl->tpl_vars['montableau']->value[0]['id']) {?>
<body onload="metfocus();">
 <?php } elseif (isset($_GET['idarticle'])&&$_GET['idarticle']==$_smarty_tpl->tpl_vars['montableau']->value[1]['id']) {?> 
 <body onload="metfocus2();"> <?php }?>  
   <?php if (isset($_smarty_tpl->tpl_vars['montableau']->value)) {?>  
   <img src="img/<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
.jpg"  alt="Mountain View" style="width:350px;height:270px">
     <h2>  <?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['titre'];?>
 </h2>
     

     
        <pre> <?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['texte'];?>
 </pre>

        <span><p>Date : <?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['date_fr'];?>
</p> </span><br> 
        
       
      
             <?php if (isset($_smarty_tpl->tpl_vars['connect']->value)&&$_smarty_tpl->tpl_vars['connect']->value==1) {?>   
            <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
"><input type="submit" name="envoyer" value="Modifier"></a> 
            <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
"><input type="submit" name="envoyer" value="Supprimer"></a> 
            <a href="index.php<?php if (isset($_GET['p'])) {?>?p=<?php echo $_GET['p'];?>
?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
<?php } else { ?>?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
<?php }?>"><input type="button" value="commenter"></a><br><br><br>
          
         
       <?php }?>
                  
         <?php if (isset($_smarty_tpl->tpl_vars['montableaucom']->value)) {?> 
         <br><br>
 <?php  $_smarty_tpl->tpl_vars['lee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['montableaucom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lee']->key => $_smarty_tpl->tpl_vars['lee']->value) {
$_smarty_tpl->tpl_vars['lee']->_loop = true;
?>
        commentaires
        
       <h6> <?php echo $_smarty_tpl->tpl_vars['lee']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['lee']->value['prenom'];?>
 le <?php echo $_smarty_tpl->tpl_vars['lee']->value['date_commentaire'];?>
</h6>  
      
       <pre><p><?php echo $_smarty_tpl->tpl_vars['lee']->value['commentaire'];?>
</p></pre>  
        <?php } ?>
         <?php }?>
       
           <?php if (isset($_smarty_tpl->tpl_vars['connect']->value)&&$_smarty_tpl->tpl_vars['connect']->value==1) {?> 
               <a href="index.php<?php if (isset($_GET['p'])) {?>?p=<?php echo $_GET['p'];?>
?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
<?php } else { ?>?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[0]['id'];?>
<?php }?>"><input type="button" value="commenter"></a><br><br><br>
          
            <form action="index.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
   
                <input type="hidden" name="id" value="<?php echo $_GET['idarticle'];?>
"/>

<textarea id="elem" name="commentaire" style="display:none; width : 609px; " cols="50px" rows="1" ></textarea>
<input id="elem2" type="submit"  onclick="metfocus()" style="display:none;" value="poster" name="poster">
  </form>
           
           <?php }?>    
         
         <?php if (isset($_smarty_tpl->tpl_vars['montableau']->value[1]['id'])) {?>
          <img src="img/<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
.jpg"  alt="Mountain View" style="width:350px;height:270px">
     <h2>  <?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['titre'];?>
 </h2>
     

     
        <pre> <?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['texte'];?>
 </pre>

        <span><p>Date : <?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['date_fr'];?>
</p> </span><br> 
        
       
      
             <?php if (isset($_smarty_tpl->tpl_vars['connect']->value)&&$_smarty_tpl->tpl_vars['connect']->value==1) {?>   
            <a href="article.php?id=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
"><input type="submit" name="envoyer" value="Modifier"></a> 
            <a href="supprimer.php?id=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
"><input type="submit" name="envoyer" value="Supprimer"></a> 
            <a href="index.php<?php if (isset($_GET['p'])) {?>?p=<?php echo $_GET['p'];?>
?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
<?php } else { ?>?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
<?php }?>"><input type="button" value="commenter"></a><br><br><br>
         
             <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['montableaucom2']->value)) {?> 
         
 <?php  $_smarty_tpl->tpl_vars['lee2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lee2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['montableaucom2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lee2']->key => $_smarty_tpl->tpl_vars['lee2']->value) {
$_smarty_tpl->tpl_vars['lee2']->_loop = true;
?>
        commentaires
        
       <h6> <?php echo $_smarty_tpl->tpl_vars['lee2']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['lee2']->value['prenom'];?>
 le <?php echo $_smarty_tpl->tpl_vars['lee2']->value['date_commentaire'];?>
</h6>  
      
       <pre><p><?php echo $_smarty_tpl->tpl_vars['lee2']->value['commentaire'];?>
</p></pre>
        <?php } ?>
        
         <?php if (isset($_smarty_tpl->tpl_vars['connect']->value)&&$_smarty_tpl->tpl_vars['connect']->value==1) {?>   
            <a href="index.php<?php if (isset($_GET['p'])) {?>?p=<?php echo $_GET['p'];?>
?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
<?php } else { ?>?idarticle=<?php echo $_smarty_tpl->tpl_vars['montableau']->value[1]['id'];?>
<?php }?>"><input type="button" value="commenter"></a><br><br><br>
    <?php }?>
 
 <form action="index.php" method="post" enctype="multipart/form-data" id="form_article" name="form_article">
 <input type="hidden" name="id" value="<?php echo $_GET['idarticle'];?>
"/>
<textarea id="2elem" name="commentaire" style="display:none;  width : 609px;" cols="50" rows="1" ></textarea>
<input id="2elem2" type="submit"  onclick="metfocus2()" style="display:none;" value="poster" name="poster">
  </form>
      
        <?php }?>
         <?php }?>
     
         
          <ul class="pagination">
              
     
         <?php if (isset($_GET['p'])&&$_GET['p']>1) {?>
         <li><a href="index.php?p=<?php echo $_GET['p']-1;?>
">&laquo;</a></li>
            <?php }?>
          <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['varpage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['varpage']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
         
        <li> <a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">Page <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
 </a></li>
           <?php }} ?> 
        <?php if (isset($_GET['p'])&&$_GET['p']<$_smarty_tpl->tpl_vars['varpage']->value) {?>
         <li><a href="index.php?p=<?php echo $_GET['p']+1;?>
">&raquo;</a></li>
<?php }?>
   
              
      </ul>    <?php } else { ?>
               Bienvenue, Désoler il n'y a pas d'article disponible .
              
           <?php }?>    <?php }} ?>

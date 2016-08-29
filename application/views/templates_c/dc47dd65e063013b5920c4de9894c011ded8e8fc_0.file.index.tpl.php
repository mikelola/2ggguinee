<?php
/* Smarty version 3.1.29, created on 2016-08-29 15:44:21
  from "C:\xampp\htdocs\gmarka\application\views\templates\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c43c35902f74_50136971',
  'file_dependency' => 
  array (
    'dc47dd65e063013b5920c4de9894c011ded8e8fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gmarka\\application\\views\\templates\\index.tpl',
      1 => 1472477676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c43c35902f74_50136971 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? 'gestion de notes' : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <meta content="chrome=1" http-equiv="X-UA-Compatible">
        <meta content="Gmark est puissante application de gestion de notes" name="description">
        <meta content="noindex, follow" name="robots">
        <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
style.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
custom.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap-theme.css">
        <link rel = "stylesheet" type = "text/css" href ="<?php echo $_smarty_tpl->tpl_vars['css_url']->value;?>
bootstrap-theme.min.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_url']->value;?>
modernizr.custom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_url']->value;?>
tabs.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        
        <?php if (isset($_smarty_tpl->tpl_vars['header']->value) && $_smarty_tpl->tpl_vars['header']->value === 'header') {?>
            <div class="header"> 
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_2437457c43c358bb641_13416036',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </div>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['nav']->value) && $_smarty_tpl->tpl_vars['nav']->value === 'nav') {?>
        <div class="nav">
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "nav", array (
  0 => 'block_1183157c43c358c7160_36020326',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    </div>
<?php }?>


<div class="main" id="container">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "container", array (
  0 => 'block_810057c43c358ccdc3_38245111',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</div>


<?php if (isset($_smarty_tpl->tpl_vars['footer']->value) && $_smarty_tpl->tpl_vars['footer']->value === 'footer') {?>
    <div class="footer">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_462457c43c358f9259_05239435',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</div> 
<?php }?>

    <?php echo '<script'; ?>
 src="{$js_url}jquery-2.1.6.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="{$js_url}tabs.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'}  file:index.tpl */
function block_2437457c43c358bb641_13416036($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'header'} */
/* {block 'nav'}  file:index.tpl */
function block_1183157c43c358c7160_36020326($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'nav'} */
/* {block 'asideleft'}  file:index.tpl */
function block_846157c43c358d4959_52434941($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideleft'} */
/* {block 'content'}  file:index.tpl */
function block_1453057c43c358dec29_75821391($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'content'} */
/* {block 'asideright'}  file:index.tpl */
function block_3041957c43c358ec280_21259123($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'asideright'} */
/* {block 'container'}  file:index.tpl */
function block_810057c43c358ccdc3_38245111($_smarty_tpl, $_blockParentStack) {
?>

        
        <?php if (isset($_smarty_tpl->tpl_vars['asideleft']->value) && $_smarty_tpl->tpl_vars['asideleft']->value === 'asideleft') {?>
            <div class="aside-left span3">
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "asideleft", array (
  0 => 'block_846157c43c358d4959_52434941',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

        </div>
    <?php }?>

    
    <?php if (isset($_smarty_tpl->tpl_vars['content']->value) && $_smarty_tpl->tpl_vars['content']->value === 'content') {?>
        <div class="content span6">
        <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1453057c43c358dec29_75821391',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

    </div>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['asideright']->value) && $_smarty_tpl->tpl_vars['asideright']->value === 'asideright') {?>
    <div class="aside-right span3">
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "asideright", array (
  0 => 'block_3041957c43c358ec280_21259123',
  1 => false,
  3 => 0,
  2 => 0,
), $_blockParentStack);
?>

</div>
<?php }
}
/* {/block 'container'} */
/* {block 'footer'}  file:index.tpl */
function block_462457c43c358f9259_05239435($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'footer'} */
}

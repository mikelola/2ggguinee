<?php
/* Smarty version 3.1.29, created on 2016-08-29 18:54:34
  from "C:\xampp\htdocs\gmarka\application\views\templates\config\config.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c468ca832435_11079947',
  'file_dependency' => 
  array (
    '388548fc5fad214f84ebfb745189309aa850b072' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gmarka\\application\\views\\templates\\config\\config.tpl',
      1 => 1472477782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:basedata/modality/blockpayement.tpl' => 4,
    'file:basedata/modality/steppayement.tpl' => 4,
  ),
),false)) {
function content_57c468ca832435_11079947 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_2213057c468ca80b8a8_33613548',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:config/config.tpl */
function block_2213057c468ca80b8a8_33613548($_smarty_tpl, $_blockParentStack) {
?>

    <div class="tabbed">
        <input name="tabbed" id="tabbed1" type="radio" checked>
        <section>
            <h1>
                <label for="tabbed1">Modalités</label>
            </h1>

            <div>
               
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/blockpayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/steppayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </section>
        <input name="tabbed" id="tabbed3" type="radio">
        <section>
            <h1>
                <label for="tabbed3">Localités</label>
            </h1>
            <div>
                
            </div>
        </section>
        <input name="tabbed" id="tabbed4" type="radio">
        <section>
            <h1>
                <label for="tabbed4">coéficiants</label>
            </h1>
            <div>
                
            </div>
        </section>
        <input name="tabbed" id="tabbed5" type="radio">
        <section>
            <h1>
                <label for="tabbed5">Matières</label>
            </h1>
            <div>
                 
            </div>
        </section>
        <input name="tabbed" id="tabbed6" type="radio">
        <section>
            <h1>
                <label for="tabbed6">Type d'évaluation</label>
            </h1>
            <div>
                 
            </div>
        </section>
            <input name="tabbed" id="tabbed7" type="radio">
        <section>
            <h1>
                <label for="tabbed7">Type d'évaluation</label>
            </h1>
            <div>
                
            </div>
        </section>
            <input name="tabbed" id="tabbed8" type="radio">
        <section>
            <h1>
                <label for="tabbed8">Type de Frais</label>
            </h1>
            <div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/blockpayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/steppayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
        </section>
            <input name="tabbed" id="tabbed9" type="radio">
        <section>
            <h1>
                <label for="tabbed9">Sexes</label>
            </h1>
            <div>
                
            </div>
        </section>
            <input name="tabbed" id="tabbed10" type="radio">
        <section>
            <h1>
                <label for="tabbed10">Classes</label>
            </h1>
            <div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/blockpayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/steppayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
 
            </div>
        </section>
        <input name="tabbed" id="tabbed11" type="radio">
        <section>
            <h1>
                <label for="tabbed11">Permissions</label>
            </h1>
            <div>
                
            </div>
        </section>
        <input name="tabbed" id="tabbed12" type="radio">
        <section>
            <h1>
                <label for="tabbed12">Sessions</label>
            </h1>
            <div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/blockpayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:basedata/modality/steppayement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>
        </section>
    </div>
<?php
}
/* {/block 'content'} */
}

<?php
/* Smarty version 3.1.29, created on 2016-08-29 19:53:16
  from "C:\xampp\htdocs\gmarka\application\views\templates\basedata\gender\gender.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c4768cd42da0_77873030',
  'file_dependency' => 
  array (
    '7472605e082745677e9162ad754b7f3bd7f84ada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gmarka\\application\\views\\templates\\basedata\\gender\\gender.tpl',
      1 => 1472492895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c4768cd42da0_77873030 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_572057c4768cd362d7_88622247',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:basedata/gender/gender.tpl */
function block_572057c4768cd362d7_88622247($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-sm-6 col-sm-push-3">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Genres</legend>
            <div class="control-group">
                <p class="inline-small-label">
                    <label for="libelle"><span class="">Libellé long </span></label>
                    <input type="text" name="lib" id="login" class="full-width" value="">
                </p>
                <p class="inline-small-label">
                    <label for="description"><span class="">Libellé moyen</span></label>
                    <input type="text" name="desc" id="pass" class="full-width" value="">
                </p>
                 <p class="inline-small-label">
                    <label for="description"><span class="">Libellé court</span></label>
                    <input type="text" name="desc" id="pass" class="full-width" value="">
                </p>

                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary ">Enregistrer</button>      
                        <button type="reset" class="btn btn-danger">Annuler</button>

                    </div>
                </div>
            </div>
            <!-- Table -->
            <br><br><br>
            <div class="table">
                <div class="col-sm-3 col-md-3 pull-right">
                    <input type="text" class="form-control" placeholder="Search" name="q">

                </div>
                <table id="mytable" class="table table-bordred table-striped">
                    <thead>

                    <th><input type="checkbox" id="checkall" /></th>
                    <th>Libellé Long</th>
                    <th>Libellé Moyen</th>
                    <th>Libellé Court</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Masculain</td>
                            <td>Masc</td>
                            <td>M</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Feminin </td>
                            <td>Femi</td>
                            <td>F</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </fieldset> 
    </div> 
<?php
}
/* {/block 'content'} */
}

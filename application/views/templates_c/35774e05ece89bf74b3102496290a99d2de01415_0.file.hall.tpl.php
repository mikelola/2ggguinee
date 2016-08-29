<?php
/* Smarty version 3.1.29, created on 2016-08-29 19:53:16
  from "C:\xampp\htdocs\gmarka\application\views\templates\basedata\hall\hall.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c4768cd709b5_10379025',
  'file_dependency' => 
  array (
    '35774e05ece89bf74b3102496290a99d2de01415' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gmarka\\application\\views\\templates\\basedata\\hall\\hall.tpl',
      1 => 1472492895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c4768cd709b5_10379025 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1243857c4768cd60b54_94588836',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:basedata/hall/hall.tpl */
function block_1243857c4768cd60b54_94588836($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-sm-6 col-sm-push-3">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Classes</legend>
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
                <p class="inline-small-label">
                    <label for="description"><span class="">Description</span></label>
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
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Sixième</td>
                            <td>6em</td>
                            <td>6e</td>
                            <td>Classe de Sixième</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Troisième</td>
                            <td>3em</td>
                            <td>3e</td>
                            <td>Classe de Troisième</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>Cinquième </td>
                            <td>5em</td>
                            <td>5e</td>
                            <td>Classe de Cinquième</td>
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

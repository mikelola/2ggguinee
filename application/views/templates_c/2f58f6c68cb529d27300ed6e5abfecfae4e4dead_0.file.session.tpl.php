<?php
/* Smarty version 3.1.29, created on 2016-08-29 20:00:26
  from "C:\xampp\htdocs\gmarka\application\views\templates\basedata\session\session.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c4783a952ce9_58563916',
  'file_dependency' => 
  array (
    '2f58f6c68cb529d27300ed6e5abfecfae4e4dead' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gmarka\\application\\views\\templates\\basedata\\session\\session.tpl',
      1 => 1472493611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c4783a952ce9_58563916 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_1641857c4783a92d0a8_42377568',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:basedata/session/session.tpl */
function block_1641857c4783a92d0a8_42377568($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-sm-6 col-sm-push-3">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Sessions</legend>
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
                            <td>xxxxxxxxxxxxx</td>
                            <td>xxxxxxxxxxxxxx</td>
                            <td>xxxxxxxxxxxxxx</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>yyyyyyyyyyyyyyyy </td>
                            <td>yyyyyyyyyyyyyyyyyy</td>
                            <td>yyyyyyyyyyyyyyyyyy</td>
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

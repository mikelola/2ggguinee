<?php
/* Smarty version 3.1.29, created on 2016-08-29 15:59:19
  from "C:\xampp\htdocs\gmarka\application\views\templates\basedata\locality\city.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57c43fb7efadc0_57890415',
  'file_dependency' => 
  array (
    'a5f0c741cf6c136d8c5383b8e9dc7763b58a1a2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gmarka\\application\\views\\templates\\basedata\\locality\\city.tpl',
      1 => 1472479140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57c43fb7efadc0_57890415 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_204457c43fb7eed276_70106906',
  1 => false,
  3 => 0,
  2 => 0,
));
}
/* {block 'content'}  file:basedata/locality/city.tpl */
function block_204457c43fb7eed276_70106906($_smarty_tpl, $_blockParentStack) {
?>

    <div class="col-lg-6">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border">Pays</legend>
            <div class="control-group">
                <p class="inline-small-label">
                    <label for="libelle"><span class="">Libellé</span></label>
                    <input type="text" name="lib" id="login" class="" value="">
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
                    <th>Libellé</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>GUINEE</td>
                            <td>XXXXXXXXXXXXXXXXXXXXXXXX</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>SENEGAL</td>
                            <td>XXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td>TOGO</td>
                            <td>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</td>
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

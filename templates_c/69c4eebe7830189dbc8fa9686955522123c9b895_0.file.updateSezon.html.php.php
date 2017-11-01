<?php /* Smarty version 3.1.27, created on 2017-05-29 15:06:01
         compiled from "C:\xampp\htdocs\typer\templates\updateSezon.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:5251592c1cb9161437_80396024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c4eebe7830189dbc8fa9686955522123c9b895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\updateSezon.html.php',
      1 => 1496063160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5251592c1cb9161437_80396024',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'subdir' => 0,
    'Sezon' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592c1cb9252732_84051436',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c1cb9252732_84051436')) {
function content_592c1cb9252732_84051436 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5251592c1cb9161437_80396024';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Edytuj Sezon</h1>
    </div>

    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/insert2" method="post">
        <div class="form-group">
            <label for="idSezon"></label>
            <input type="hidden" class="form-control" id="idSezon" readonly="readonly" name="idSezon" value="<?php echo $_smarty_tpl->tpl_vars['Sezon']->value['idSezon'];?>
">
        </div>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="nazwa">Nazwa sezonu</label>
            <input type="text" class="form-control" id="nazwa" name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['Sezon']->value['nazwaSezonu'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="dataP">Data rozpoczecia</label>
            <input type="text" class="form-control" id="dataP" name="dataP" value="<?php echo $_smarty_tpl->tpl_vars['Sezon']->value['dataRozpoczecia'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="dataZ">Data zakonczenia</label>
            <input type="text" class="form-control" id="dataZ" name="dataZ" value="<?php echo $_smarty_tpl->tpl_vars['Sezon']->value['dataZakoncznia'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="alert alert-danger collapse" role="alert"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-default">Zapisz zmiany</button>
            </div>
        </div>
    </form>


</div>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("logform.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
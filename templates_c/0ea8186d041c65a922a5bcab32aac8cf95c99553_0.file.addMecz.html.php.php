<?php /* Smarty version 3.1.27, created on 2017-05-31 01:17:46
         compiled from "C:\xampp\htdocs\typer\templates\addMecz.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:1584592dfd9a34e815_35260883%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea8186d041c65a922a5bcab32aac8cf95c99553' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\addMecz.html.php',
      1 => 1496137035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584592dfd9a34e815_35260883',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'subdir' => 0,
    'allTeam' => 0,
    'key' => 0,
    'allLeague' => 0,
    'idKolejka' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592dfd9a48ad66_19078190',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592dfd9a48ad66_19078190')) {
function content_592dfd9a48ad66_19078190 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1584592dfd9a34e815_35260883';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
<div class="container">
    <div class="page-header col-centered">
        <h1 class="text-center">Dodaj Mecz</h1>
    </div>

    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/insert" method="post">
        <datalist id="Druzyna">
            <?php
$_from = $_smarty_tpl->tpl_vars['allTeam']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['nazwaDruzyny'];?>
">
                <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
        </datalist>

        <datalist id="Liga">
            <?php
$_from = $_smarty_tpl->tpl_vars['allLeague']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value['nazwaLeague'];?>
">
                <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
        </datalist>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="data">Data rozpoczecia spotkania</label>
            <input type="date" class="form-control" id="data" name="data">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="time">Godzina rozpoczecia spotkania</label>
            <input type="time" class="form-control" id="time" name="time">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gospodarz ">Drużyna gospodarza</label>
            <input list="Druzyna" type="text" class="form-control" id="gospodarz" name="gospodarz">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gosc">Drużyna gosci</label>
            <input list="Druzyna" type="text" class="form-control" id="gosc" name="gosc">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="league">Nazwa ligi</label>
            <input list="Liga" type="text" class="form-control" id="league" name="league">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="idKolejka"></label>
            <input type="hidden" class="form-control" id="idKolejka" readonly="readonly" name="idKolejka" value="<?php echo $_smarty_tpl->tpl_vars['idKolejka']->value;?>
">
            </div>
        </div>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="alert alert-danger collapse" role="alert"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
            </div>
        </div>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-default">Dodaj</button>
        <button type="reset" class="btn btn-default">Wyczysc</button>
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
<?php /* Smarty version 3.1.27, created on 2017-05-29 15:15:38
         compiled from "C:\xampp\htdocs\typer\templates\updateMecz.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:22499592c1efa6666a6_16886239%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d9c2c02c740c318d43abf49e153a3e03e0d039c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\updateMecz.html.php',
      1 => 1496063419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22499592c1efa6666a6_16886239',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'subdir' => 0,
    'allTeam' => 0,
    'key' => 0,
    'allLeague' => 0,
    'Mecz' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592c1efa7826b5_02026667',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c1efa7826b5_02026667')) {
function content_592c1efa7826b5_02026667 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22499592c1efa6666a6_16886239';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Edytuj Meczu</h1>
    </div>

    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/insert2" method="post">
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
            <input type="date" class="form-control" id="data" name="data" value="<?php echo $_smarty_tpl->tpl_vars['Mecz']->value['dataMeczu'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="time">Godzina rozpoczecia spotkania</label>
            <input type="text" class="form-control" id="time" name="time" value="<?php echo $_smarty_tpl->tpl_vars['Mecz']->value['godzinaRozpoczecia'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gospodarz">Drużyna gospodarza</label>
            <input list="Druzyna" type="text" class="form-control" id="gospodarz" name="gospodarz" value="<?php echo $_smarty_tpl->tpl_vars['Mecz']->value['gospodarzNazwa'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gosc">Drużyna gosci</label>
            <input list="Druzyny" type="text" class="form-control" id="gosc" name="gosc" value="<?php echo $_smarty_tpl->tpl_vars['Mecz']->value['goscNazwa'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="league">Nazwa ligi</label>
            <input list="Liga" type="text" class="form-control" id="league" name="league" value="<?php echo $_smarty_tpl->tpl_vars['Mecz']->value['league'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="idMecz"></label>
            <input type="hidden" class="form-control" id="idMecz" readonly="readonly" name="idMecz" value="<?php echo $_smarty_tpl->tpl_vars['Mecz']->value['idMecz'];?>
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
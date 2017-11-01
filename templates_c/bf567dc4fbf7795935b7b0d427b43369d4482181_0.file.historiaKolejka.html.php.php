<?php /* Smarty version 3.1.27, created on 2017-05-23 17:43:29
         compiled from "C:\xampp\htdocs\typer\templates\historiaKolejka.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:14374592458a1220091_72493210%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf567dc4fbf7795935b7b0d427b43369d4482181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\historiaKolejka.html.php',
      1 => 1495550268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14374592458a1220091_72493210',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'allKolejka' => 0,
    'Kolejka' => 0,
    'subdir' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592458a1364793_19482901',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592458a1364793_19482901')) {
function content_592458a1364793_19482901 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14374592458a1220091_72493210';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 1) {?>
<div class="container">

    <?php if (count($_smarty_tpl->tpl_vars['allKolejka']->value) === 0) {?>
    <div class="page-header">
        <h1>Brak histori</h1>
    </div>
    <?php } else { ?>
    <div class="page-header">
        <h1>Lista zakończoncyh kolejek </h1>
    </div>


        <table class="table table-striped">
            <thead>
            <tr class="header">
                <th>Numer kolejki</th>
                <th>Liczba meczy</th>
                <th>Typuj</th>
            </tr>
            </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['allKolejka']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['Kolejka'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['Kolejka']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['Kolejka']->value) {
$_smarty_tpl->tpl_vars['Kolejka']->_loop = true;
$foreach_Kolejka_Sav = $_smarty_tpl->tpl_vars['Kolejka'];
?>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 2) {?>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['ile'];?>
</td>
                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'], null, 0);?>
                <td><a type="button" class="btn btn-primary" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Typ/showHistoria/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Podgląd<a></td>
                <?php }?>
            </tr>


            <?php
$_smarty_tpl->tpl_vars['Kolejka'] = $foreach_Kolejka_Sav;
}
?>
        </tbody>
        </table>
    <?php }?>
        <div class="alert alert-danger collapse" role="alert"></div>





</div>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("logform.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
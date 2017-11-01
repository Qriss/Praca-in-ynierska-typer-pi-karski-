<?php /* Smarty version 3.1.27, created on 2017-05-31 00:49:29
         compiled from "C:\xampp\htdocs\typer\templates\klasyfikacja.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:10099592df6f93753a5_70362883%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e63cab6003c1252e04fb3477b5abb5edb3fb42c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\klasyfikacja.html.php',
      1 => 1496184560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10099592df6f93753a5_70362883',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'allPozycja' => 0,
    'key' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592df6f9465c31_34230765',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592df6f9465c31_34230765')) {
function content_592df6f9465c31_34230765 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10099592df6f93753a5_70362883';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 1) {?>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Klasyfikacja generalna sezon: 2016/2017</h1>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['allPozycja']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Klasyfikacja nie jest jeszcze dostępna</div>
    <?php }?>



        <table class="table table-striped">
            <thead>
            <tr>
                <th>Pozycja</th>
                <th>Nick</th>
                <th>Liczba punktów</th>


            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['allPozycja']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
?>
            <tr class="emp">
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['key']->value['Miejsce'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['login'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value['Punkty'];?>
</td>



            </tr>


            <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
            </tbody>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>

        



</div>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("logform.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
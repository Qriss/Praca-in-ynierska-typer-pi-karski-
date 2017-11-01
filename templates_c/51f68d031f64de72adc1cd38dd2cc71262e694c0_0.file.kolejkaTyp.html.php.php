<?php /* Smarty version 3.1.27, created on 2017-05-31 00:32:21
         compiled from "C:\xampp\htdocs\typer\templates\kolejkaTyp.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:30893592df2f55f8ae2_33994743%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51f68d031f64de72adc1cd38dd2cc71262e694c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\kolejkaTyp.html.php',
      1 => 1496183537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30893592df2f55f8ae2_33994743',
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
  'unifunc' => 'content_592df2f67b4754_96848953',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592df2f67b4754_96848953')) {
function content_592df2f67b4754_96848953 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30893592df2f55f8ae2_33994743';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 1) {?>
<div class="container">

    <?php if (count($_smarty_tpl->tpl_vars['allKolejka']->value) === 0) {?>
    <div class="page-header">
        <h1>Brak dostępnych kolejke do typowania</h1>
    </div>
    <?php } else { ?>
    <div class="page-header">
        <h1>Dostępne kolejki do typowania </h1>
    </div>


        <table class="table table-striped">
            <thead>
            <tr>
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
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 1) {?>
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['ile'];?>
</td>
                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'], null, 0);?>
                <td><a type="button" class="btn btn-primary" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Typ/showMecz/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Wprowadź typ<a></td>
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
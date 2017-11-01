<?php /* Smarty version 3.1.27, created on 2017-05-23 17:39:54
         compiled from "C:\xampp\htdocs\typer\templates\showSezon.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:28762592457ca99bed8_54717334%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61c141a6d338a556024c7ca002ef154b727968f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\showSezon.html.php',
      1 => 1495550269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28762592457ca99bed8_54717334',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'allSezon' => 0,
    'Sezon' => 0,
    'subdir' => 0,
    'temp_id' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592457cab41dc6_22817559',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592457cab41dc6_22817559')) {
function content_592457cab41dc6_22817559 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28762592457ca99bed8_54717334';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
<div class="container">
    <div class="page-header">
        <h1>Lista sezonów</h1>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['allSezon']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Brak Sezonow w bazie!</div>
    <?php }?>




    <table class="table table-striped">
        <thead>
            <tr class="header">
                <th>Nazwa sezonu</th>
                <th>Data rozpoczecia</th>
                <th>Data zakonczenia</th>
                <th>Liczba kolejek</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['allSezon']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['Sezon'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['Sezon']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['Sezon']->value) {
$_smarty_tpl->tpl_vars['Sezon']->_loop = true;
$foreach_Sezon_Sav = $_smarty_tpl->tpl_vars['Sezon'];
?>
            <tr>

                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Sezon']->value['nazwaSezonu'];?>
</th>
                <td><?php echo $_smarty_tpl->tpl_vars['Sezon']->value['dataRozpoczecia'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Sezon']->value['dataZakonczenia'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Sezon']->value['ile'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['Sezon']->value['status'] == 1) {?>
                <td>aktywny</td>
                <?php } else { ?>
                <td>nie aktywny</td>
                <?php }?>
                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['Sezon']->value['idSezon'], null, 0);?>
                <td><a type="button" class="btn btn-primary" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/update/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Edytuj</a></td>
                <td><a type="button" class="btn btn-danger" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/delete/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</a></td>
            </tr>


            <?php
$_smarty_tpl->tpl_vars['Sezon'] = $foreach_Sezon_Sav;
}
?>
        </tbody>
        </table>

    <div class="alert alert-danger collapse" role="alert"></div>
    <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
    <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <?php }?>
        <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/add/">Nowy sezon</a>
        



</div>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("logform.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
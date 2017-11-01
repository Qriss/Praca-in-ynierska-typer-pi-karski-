<?php /* Smarty version 3.1.27, created on 2016-12-07 16:16:05
         compiled from "C:\xampp\htdocs\typer\templates\Sezon.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:5567584827b5aef039_44035920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23dd4d0cac4fee01d3bf4d7973ff479bd3e7e59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Sezon.html.php',
      1 => 1481123758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5567584827b5aef039_44035920',
  'variables' => 
  array (
    'allSezon' => 0,
    'Sezon' => 0,
    'subdir' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584827b5c02485_92980845',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584827b5c02485_92980845')) {
function content_584827b5c02485_92980845 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5567584827b5aef039_44035920';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Lista sezonów</h1>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['allSezon']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Brak Sezonow w bazie!</div>
    <?php }?>




        <table id="dane">
            <tr class="header">
                <td>Nazwa sezonu</td>
                <td>Data rozpoczecia</td>
                <td>Data zakonczenia</td>
                <td>Liczba kolejek</td>
                <td>Status</td>
                <td></td>
                <td></td>
            </tr>

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
            <tr class="emp">

                <td><?php echo $_smarty_tpl->tpl_vars['Sezon']->value['nazwaSezonu'];?>
</td>
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
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/update/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Edytuj</a></td>
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/delete/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</a></td>
            </tr>


            <?php
$_smarty_tpl->tpl_vars['Sezon'] = $foreach_Sezon_Sav;
}
?>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>
        <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/add/">Dodaj sezon</a>
        



</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
<?php /* Smarty version 3.1.27, created on 2017-01-10 20:57:01
         compiled from "C:\xampp\htdocs\typer\templates\Typ.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:980358753c8d90eaf9_25404946%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e764d90e0ad041d8775859569e32b049b375328a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Typ.html.php',
      1 => 1484078218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '980358753c8d90eaf9_25404946',
  'variables' => 
  array (
    'allKolejka' => 0,
    'Kolejka' => 0,
    'subdir' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58753c8dd642f8_44891739',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58753c8dd642f8_44891739')) {
function content_58753c8dd642f8_44891739 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '980358753c8d90eaf9_25404946';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Lista kolejek</h1>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['allKolejka']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Brak kolejek do typowania!</div>
    <?php }?>



        <table id="dane">
            <tr class="header">
                <td>Numer kolejki</td>
                <td>Liczba meczy</td>
                <td>Typuj</td>
            </tr>
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
            <tr class="emp">
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['statusKolejki'] == 1) {?>
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['ile'];?>
</td>
                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'], null, 0);?>
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/showone2/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
"">Typuj<a></td>
                <?php }?>
            </tr>


            <?php
$_smarty_tpl->tpl_vars['Kolejka'] = $foreach_Kolejka_Sav;
}
?>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>





</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
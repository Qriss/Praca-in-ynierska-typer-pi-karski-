<?php /* Smarty version 3.1.27, created on 2017-04-28 16:29:46
         compiled from "C:\xampp\htdocs\typer\templates\Kolejka.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:28273590351da0f6db5_86829954%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a9bdf1cc9c0a2e7b032e15c932fcc8e91fbcabf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Kolejka.html.php',
      1 => 1493389471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28273590351da0f6db5_86829954',
  'variables' => 
  array (
    'allKolejka2' => 0,
    'name' => 0,
    'access' => 0,
    'subdir' => 0,
    'Kolejka' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_590351db565091_51665137',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_590351db565091_51665137')) {
function content_590351db565091_51665137 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28273590351da0f6db5_86829954';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Lista kolejek</h1>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['allKolejka2']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Brak kolejek w bazie!</div>
    <?php }?>
    <div><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 a doatesp to : <?php echo $_smarty_tpl->tpl_vars['access']->value;?>
</div>
    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/insert" method="post">


        <table id="dane">
            <tr class="header">
                <td>Numer kolejki</td>
                <td>Status</td>
                <td>Liczba meczy</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['allKolejka2']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'];?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['statusKolejki'] == 1) {?>
                <td>uruchomiona</td>
                <?php } else { ?>
                <td>nie uruchomiona</td>
                <?php }?>
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['ile'];?>
</td>
                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'], null, 0);?>
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/showone/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Dodaj mecz<a></td>
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/delete/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</td>
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/showone/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Podglad </td>
                <td><a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/update2/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Uruchom</td>

            </tr>


            <?php
$_smarty_tpl->tpl_vars['Kolejka'] = $foreach_Kolejka_Sav;
}
?>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>
        <button type="submit" class="btn btn-default">Dodaj Kolejke</button>
        

    </form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
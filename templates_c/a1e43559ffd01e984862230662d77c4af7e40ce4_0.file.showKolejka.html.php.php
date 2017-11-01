<?php /* Smarty version 3.1.27, created on 2017-05-31 00:32:30
         compiled from "C:\xampp\htdocs\typer\templates\showKolejka.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:18402592df2fe2c1235_33839710%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1e43559ffd01e984862230662d77c4af7e40ce4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\showKolejka.html.php',
      1 => 1496137178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18402592df2fe2c1235_33839710',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'allKolejka' => 0,
    'subdir' => 0,
    'Kolejka' => 0,
    'temp_id' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592df2fe4cbf38_80313783',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592df2fe4cbf38_80313783')) {
function content_592df2fe4cbf38_80313783 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18402592df2fe2c1235_33839710';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
<div class="container">
    <div class="page-header">
        <h1>Lista kolejek</h1>
    </div>
    <?php if (count($_smarty_tpl->tpl_vars['allKolejka']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Brak kolejek w bazie!</div>
    <?php }?>
    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/insert" method="post">


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Numer kolejki</th>
                <th>Status</th>
                <th>Liczba meczy</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
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
                <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['numerKolejki'];?>
</th>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 1) {?>
                <td>uruchomiona</td>
                <?php } elseif ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 2) {?>
                <td>zakończona</td>
                <?php } else { ?>
                <td>nie uruchomiona</td>
                <?php }?>
                <td><?php echo $_smarty_tpl->tpl_vars['Kolejka']->value['ile'];?>
</td>
                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['Kolejka']->value['idKolejka'], null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 0) {?>
                <td><a type="button" class="btn btn-success" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/add/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Dodaj mecz<a></td>
                <?php } else { ?>
                <td><a type="button" class="btn btn-success disabled" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/add/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Dodaj mecz<a></td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 0) {?>
                <td><a type="button" class="btn btn-danger" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/delete/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</td>
                <?php } else { ?>
                <td><a type="button" class="btn btn-danger disabled" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/delete/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</td>
                <?php }?>
                <td><a type="button" class="btn btn-info" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/index/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Podglad </td>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 0) {?>
                <td><a type="button" class="btn btn-warning" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/run/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Uruchom</td>
                <?php } else { ?>
                <td><a type="button" class="btn btn-warning disabled" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/run/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Uruchom</td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['Kolejka']->value['status'] == 1) {?>
                <td><a type="button" class="btn btn-primary" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/end/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">zakoncz</td>
                <?php } else { ?>
                <td><a type="button" class="btn btn-primary disabled" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/end/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">zakoncz</td>
                <?php }?>
            </tr>


            <?php
$_smarty_tpl->tpl_vars['Kolejka'] = $foreach_Kolejka_Sav;
}
?>
            </tbody>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
        <button type="submit" class="btn btn-default">Dodaj Kolejke</button>
        

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
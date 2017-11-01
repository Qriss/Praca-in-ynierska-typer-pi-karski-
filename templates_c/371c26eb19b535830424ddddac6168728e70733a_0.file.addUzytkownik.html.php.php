<?php /* Smarty version 3.1.27, created on 2016-12-07 17:07:21
         compiled from "C:\xampp\htdocs\typer\templates\addUzytkownik.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:11345584833b95242e0_86301389%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '371c26eb19b535830424ddddac6168728e70733a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\addUzytkownik.html.php',
      1 => 1481126834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11345584833b95242e0_86301389',
  'variables' => 
  array (
    'subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584833b95d3ff5_43738712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584833b95d3ff5_43738712')) {
function content_584833b95d3ff5_43738712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11345584833b95242e0_86301389';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Formularz rejestracyjny</h1>
    </div>

    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Uzytkownik/insert" method="post">

        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login">
        </div>
        <div class="form-group">
            <label for="haslo">Hasło</label>
            <input type="password" class="form-control" id="haslo" name="haslo">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="alert alert-danger collapse" role="alert"></div>
        <button type="submit" class="btn btn-default">Dodaj</button>
        <button type="reset" class="btn btn-default">Wyczysc</button>

    </form>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
<?php /* Smarty version 3.1.27, created on 2017-05-29 15:16:16
         compiled from "C:\xampp\htdocs\typer\templates\updateProfile.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:17888592c1f2074a3f4_19422118%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56c1c4de655765ad7a48f7e70e5d28101e8ac514' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\updateProfile.html.php',
      1 => 1496063287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17888592c1f2074a3f4_19422118',
  'variables' => 
  array (
    'login' => 0,
    'subdir' => 0,
    'User' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592c1f20833401_12097994',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592c1f20833401_12097994')) {
function content_592c1f20833401_12097994 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17888592c1f2074a3f4_19422118';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Edycja profilu</h1>
    </div>

    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Uzytkownik/insert" method="post">

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['User']->value['login'];?>
">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="haslo">Hasło</label>
            <input type="password" class="form-control" id="haslo" name="haslo" >
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="haslo2">Powtórz hasło</label>
            <input type="password" class="form-control" id="haslo2" name="haslo2" >
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['User']->value['email'];?>
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
        <button type="submit" class="btn btn-default">Zapisz zmiany</button>
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
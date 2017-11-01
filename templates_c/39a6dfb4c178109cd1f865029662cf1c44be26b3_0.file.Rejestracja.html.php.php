<?php /* Smarty version 3.1.27, created on 2017-09-01 12:21:11
         compiled from "C:\xampp\htdocs\typer\templates\Rejestracja.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:901459a9349734d8e2_01350514%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39a6dfb4c178109cd1f865029662cf1c44be26b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Rejestracja.html.php',
      1 => 1504261141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901459a9349734d8e2_01350514',
  'variables' => 
  array (
    'subdir' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a9349740ea18_56294758',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a9349740ea18_56294758')) {
function content_59a9349740ea18_56294758 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '901459a9349734d8e2_01350514';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1 class="text-center">Formularz rejestracyjny</h1>
    </div>

    <form id="adduser" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Uzytkownik/insert" method="post">

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="login">Login</label>
            <input type="text" class="form-control input-mini" id="login" name="login" >
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="haslo">Hasło</label>
            <input type="password" class="form-control" id="haslo" name="haslo">
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="haslo2">Powtórz hasło</label>
            <input type="password" class="form-control" id="haslo2" name="haslo2">
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="alert alert-danger collapse" role="alert"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
            </div>
        </div>

      <div class="form-group row">
       <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-default ">Dodaj</button>
        <button type="reset" class="btn btn-default">Wyczysc</button>
      </div>
      </div>
    </form>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
<?php /* Smarty version 3.1.27, created on 2017-01-10 20:10:11
         compiled from "C:\xampp\htdocs\typer\templates\logform.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:2132158753193271d88_94310358%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff88b38f9b0c225ab8cf969f21354dd92d053ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\logform.html.php',
      1 => 1484075408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132158753193271d88_94310358',
  'variables' => 
  array (
    'subdir' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5875319332fe87_97474880',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5875319332fe87_97474880')) {
function content_5875319332fe87_97474880 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2132158753193271d88_94310358';
?>

<?php echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container">

    <div class="page-header">
        <h1>Panel logowania</h1>
    </div>

    <form id="logform" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Access/login" method="post" class="navbar-form navbar-left" role="form">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login" type="text" class="form-control" name="login" value="" placeholder="Login">
        </div>

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Hasło">
        </div>

        <div class="alert alert-danger collapse" role="alert"></div>
        <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
        <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
        <?php }?>
        <button type="submit" class="btn btn-primary">Zaloguj</button>
    </form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
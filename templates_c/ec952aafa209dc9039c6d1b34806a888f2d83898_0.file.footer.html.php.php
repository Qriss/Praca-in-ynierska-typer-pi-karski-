<?php /* Smarty version 3.1.27, created on 2017-09-01 12:56:21
         compiled from "C:\xampp\htdocs\typer\templates\footer.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:2484359a93cd5317166_05793544%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec952aafa209dc9039c6d1b34806a888f2d83898' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\footer.html.php',
      1 => 1504262475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484359a93cd5317166_05793544',
  'variables' => 
  array (
    'subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59a93cd53c1509_15544959',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59a93cd53c1509_15544959')) {
function content_59a93cd53c1509_15544959 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2484359a93cd5317166_05793544';
?>

<div class="container">
    <footer class="footer">

    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.cookie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/addUser.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>
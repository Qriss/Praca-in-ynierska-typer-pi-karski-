<?php /* Smarty version 3.1.27, created on 2017-01-10 17:02:32
         compiled from "C:\xampp\htdocs\typer\templates\StronaGlowna.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:3110858750598990416_49696582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18399e3446996e3b593c3038ca472308b978be9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\StronaGlowna.html.php',
      1 => 1484063289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3110858750598990416_49696582',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5875059953ffb9_42241167',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5875059953ffb9_42241167')) {
function content_5875059953ffb9_42241167 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3110858750598990416_49696582';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Lista kolejek</h1>
    </div>






</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>
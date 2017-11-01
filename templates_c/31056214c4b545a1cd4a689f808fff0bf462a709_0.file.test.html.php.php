<?php /* Smarty version 3.1.27, created on 2016-12-04 20:39:07
         compiled from "C:\xampp\htdocs\typer\templates\test.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:19893584470db8d5b05_02180427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31056214c4b545a1cd4a689f808fff0bf462a709' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\test.html.php',
      1 => 1480880168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19893584470db8d5b05_02180427',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584470db962442_12774797',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584470db962442_12774797')) {
function content_584470db962442_12774797 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19893584470db8d5b05_02180427';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Dodaj Mecz</h1>
    </div>
    



</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
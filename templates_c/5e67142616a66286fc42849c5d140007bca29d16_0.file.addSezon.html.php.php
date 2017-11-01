<?php /* Smarty version 3.1.27, created on 2017-05-02 15:22:56
         compiled from "C:\xampp\htdocs\typer\templates\addSezon.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:2020659088830eaf106_55207141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e67142616a66286fc42849c5d140007bca29d16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\addSezon.html.php',
      1 => 1481187234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2020659088830eaf106_55207141',
  'variables' => 
  array (
    'subdir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59088831080047_73270536',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59088831080047_73270536')) {
function content_59088831080047_73270536 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2020659088830eaf106_55207141';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="container">
    <div class="page-header">
        <h1>Dodaj Sezon</h1>
    </div>

    <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon/insert" method="post">

        <div class="form-group">
            <label for="nazwa">Nazwa sezonu</label>
            <input type="text" class="form-control" id="nazwa" name="nazwa">
        </div>
        <div class="form-group">
            <label for="dataP">Data rozpoczecia</label>
            <input type="date" class="form-control" id="dataP" name="dataP">
        </div>
        <div class="form-group">
            <label for="dataZ">Data zakonczenia</label>
            <input type="date" class="form-control" id="dataZ" name="dataZ">
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
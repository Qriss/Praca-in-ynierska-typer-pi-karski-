<?php /* Smarty version 3.1.27, created on 2017-06-02 15:12:24
         compiled from "C:\xampp\htdocs\typer\templates\showMecz.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:5011593164388d6200_28198399%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f9b08cf48c7fd4f0ce293d7a065d4a0f5870856' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\showMecz.html.php',
      1 => 1496409127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5011593164388d6200_28198399',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'allMecz' => 0,
    'key' => 0,
    'subdir' => 0,
    'idKolejka' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59316439c26be9_29638254',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59316439c26be9_29638254')) {
function content_59316439c26be9_29638254 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5011593164388d6200_28198399';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
<div class="container">
    <div class="panel-body">
        <?php if (count($_smarty_tpl->tpl_vars['allMecz']->value) === 0) {?>
        <div class="alert alert-danger" role="alert">Brak meczy w kolejce</div>
        <?php }?>
        <?php
$_from = $_smarty_tpl->tpl_vars['allMecz']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
?>
        <div class="row">
            <div class="col-md-12"><?php echo $_smarty_tpl->tpl_vars['key']->value['dataMeczu'];?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value['godzinaRozpoczecia'];?>
</div>
        </div>
        <form id="addpet" action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/insertResult/<?php echo $_smarty_tpl->tpl_vars['idKolejka']->value;?>
" method="post">
        <div class="row">

            <div class="col-md-2" >
                <?php echo $_smarty_tpl->tpl_vars['key']->value['league'];?>

            </div>
            <div class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['key']->value['gospodarzNazwa'];?>
</div>
            <div class="col-md-2" >

                <label for="golGospodarz" ></label><input id="golGospodarz"  type="text" size="1"  name="<?php echo $_smarty_tpl->tpl_vars['key']->value['idMecz'];?>
Gospodarz" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['golGospodarz'];?>
" style="text-align: center"/>:<label for="golGosc"></label><input id="golGosc" type="text" size="1"  name="<?php echo $_smarty_tpl->tpl_vars['key']->value['idMecz'];?>
Gosc" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['golGosc'];?>
" style="text-align: center"/>

            </div>
            <div class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['key']->value['goscNazwa'];?>
</div>
            <div class="col-md-2" >

            </div>
            <div class="col-md-1" >

                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value['idMecz'], null, 0);?>
                <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/update/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Edytuj</a>
            </div>
            <div class="col-md-1" >

                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value['idMecz'], null, 0);?>
                <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/delete/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</a>
            </div>
            
            



        </div>

        <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
            <button type="submit" class="btn btn-default">Zapisz zmiany</button>
            </form>

    </div>


</div>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("logform.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>
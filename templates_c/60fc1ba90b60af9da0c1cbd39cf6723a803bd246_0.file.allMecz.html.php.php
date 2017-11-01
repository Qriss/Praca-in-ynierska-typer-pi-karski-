<?php /* Smarty version 3.1.27, created on 2017-04-25 00:11:19
         compiled from "C:\xampp\htdocs\typer\templates\allMecz.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:1816458fe78073b7a19_87221696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60fc1ba90b60af9da0c1cbd39cf6723a803bd246' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\allMecz.html.php',
      1 => 1493071876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1816458fe78073b7a19_87221696',
  'variables' => 
  array (
    'allMecz' => 0,
    'key' => 0,
    'subdir' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58fe78074bf040_41632775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58fe78074bf040_41632775')) {
function content_58fe78074bf040_41632775 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1816458fe78073b7a19_87221696';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


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

        <div class="row" >

            <div class="col-md-2" >

            </div>
            <div class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['key']->value['gospodarz'];?>
</div>
            <div class="col-md-2" >

                <label for="golGospodarz" ></label><input id="golGospodarz"  type="text" size="1"  name="vlala"/>:<label for="golGosc"></label><input id="golGosc" type="text" size="1"  name="vlala"/>

            </div>
            <div class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['key']->value['gosc'];?>
</div>
            <div class="col-md-2" >

            </div>
            <div class="col-md-1" >

                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value['idMecz'], null, 0);?>
                <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/update/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Edytuj</a>
            </div>
            <div class="col-md-1" >

                <?php $_smarty_tpl->tpl_vars["temp_id"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value['idMecz'], null, 0);?>
                <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Mecz/delete2/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Usun</a>
            </div>
            
            



        </div>
        <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
    </div>


</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>
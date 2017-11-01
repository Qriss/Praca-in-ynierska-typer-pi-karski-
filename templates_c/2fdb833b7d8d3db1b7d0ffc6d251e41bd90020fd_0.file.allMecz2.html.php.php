<?php /* Smarty version 3.1.27, created on 2017-05-15 14:47:29
         compiled from "C:\xampp\htdocs\typer\templates\allMecz2.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:173225919a361ef3a31_93063175%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fdb833b7d8d3db1b7d0ffc6d251e41bd90020fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\allMecz2.html.php',
      1 => 1494848898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173225919a361ef3a31_93063175',
  'variables' => 
  array (
    'allMecz' => 0,
    'key' => 0,
    'idMecz' => 0,
    'golGospodarz' => 0,
    'golGosc' => 0,
    'subdir' => 0,
    'temp_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5919a3620cfa20_39707030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5919a3620cfa20_39707030')) {
function content_5919a3620cfa20_39707030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '173225919a361ef3a31_93063175';
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
            </div>
            <div class="col-md-1" >
            </div>
            
            



        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-2" >

                <label for="golGospodarz" ></label><input id="golGospodarz"  type="text" size="1"  name="<?php echo $_smarty_tpl->tpl_vars['idMecz']->value;?>
Gospodarz" value="<?php echo $_smarty_tpl->tpl_vars['golGospodarz']->value;?>
" style="text-align: center"/>:<label for="golGosc"></label><input id="golGosc" type="text" size="1"  name="<?php echo $_smarty_tpl->tpl_vars['idMecz']->value;?>
Gosc" value="<?php echo $_smarty_tpl->tpl_vars['golGosc']->value;?>
"/>

            </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
    </div>
    <div >

        <a type="button" class="btn btn-default" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka/update/<?php echo $_smarty_tpl->tpl_vars['temp_id']->value;?>
">Zapisz</a>
    </div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>
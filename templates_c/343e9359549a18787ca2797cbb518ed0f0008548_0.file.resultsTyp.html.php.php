<?php /* Smarty version 3.1.27, created on 2017-06-02 15:21:50
         compiled from "C:\xampp\htdocs\typer\templates\resultsTyp.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:30175931666e1d8be7_76552496%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '343e9359549a18787ca2797cbb518ed0f0008548' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\resultsTyp.html.php',
      1 => 1496409652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30175931666e1d8be7_76552496',
  'variables' => 
  array (
    'login' => 0,
    'access' => 0,
    'allMecz' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5931666e2fe678_67127030',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5931666e2fe678_67127030')) {
function content_5931666e2fe678_67127030 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30175931666e1d8be7_76552496';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 1) {?>
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
                <?php echo $_smarty_tpl->tpl_vars['key']->value['league'];?>

            </div>
            <div class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['key']->value['gospodarzNazwa'];?>
</div>
            <div class="col-md-2" >

                <label for="typGospodarz" ></label><input id="typGospodarz"  type="text" size="1" disabled name="<?php echo $_smarty_tpl->tpl_vars['key']->value['idMecz'];?>
typGospodarz" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['typGospodarz'];?>
" style="text-align: center"/>:<label for="typGosc"></label><input id="typGosc" type="text" disabled size="1"  name="<?php echo $_smarty_tpl->tpl_vars['key']->value['idMecz'];?>
typGosc" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['typGosc'];?>
" style="text-align: center"/>

            </div>
            <div class="col-md-2" ><?php echo $_smarty_tpl->tpl_vars['key']->value['goscNazwa'];?>
</div>
            <div class="col-md-1" >
                <?php if ($_smarty_tpl->tpl_vars['key']->value['punkty'] == '') {?>
                0 pkt
                <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['key']->value['punkty'];?>
 pkt
                <?php }?>
            </div>
            <div class="col-md-1" >
            </div>
            <div class="col-md-2" >
            </div>
            
            



        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">Wynik spotkania</div>
            <div class="col-md-2" >

                <label for="golGospodarz" ></label><input id="golGospodarz"  type="text" size="1" readonly="readonly"  name="golGospodarz" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['golGospodarz'];?>
" disabled style="text-align: center"/>:<label for="golGosc"></label><input id="golGosc" type="text" disabled size="1"  name="golGosc" value="<?php echo $_smarty_tpl->tpl_vars['key']->value['golGosc'];?>
" style="text-align: center"/>

            </div>
        </div>
        <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>

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
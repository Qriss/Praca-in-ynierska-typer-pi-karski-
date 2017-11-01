<?php /* Smarty version 3.1.27, created on 2017-05-31 18:46:27
         compiled from "C:\xampp\htdocs\typer\templates\Home.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:9593592ef3636fd094_28207303%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c67fd35a498f32478663977dcf30e57db81808e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Home.html.php',
      1 => 1496249185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9593592ef3636fd094_28207303',
  'variables' => 
  array (
    'subdir' => 0,
    'kolejka' => 0,
    'sezon' => 0,
    'key' => 0,
    'temp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592ef3637f3734_02793778',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592ef3637f3734_02793778')) {
function content_592ef3637f3734_02793778 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9593592ef3636fd094_28207303';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <div class="jumbotron">
        <div class="container">
        <h1>Typer piłkarski</h1>
        <p>Typuj największe wydarzenia piłkarskie i zdobywaj punkty</p>
            <p><a class="btn btn-primary btn-lg" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Home/opis">Dowiedz sie więcej</a></p>
        </div>

    </div>

<div class="container">
    <div>
      <div class="col-md-3">
          <h3>Kontakt</h3>
          <p>Adres: qriss@wp.pl</p>
       </div>
       <div class="col-md-5">
           <h3>Typuj</h3>
           <?php if (count($_smarty_tpl->tpl_vars['kolejka']->value) === 0) {?>
           <p>Obecnie nie ma nowych kolejke do typowania</p>
           <?php } else { ?>
           <p>Właśnie wystartowała nowa kolejka do typowania</p>
           <?php }?>
       </div>
       <div class="col-md-4">
           <h3>Rozgrywka</h3>
           <?php
$_from = $_smarty_tpl->tpl_vars['sezon']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
?>
           <?php if ($_smarty_tpl->tpl_vars['key']->value['status'] == 1) {?>
           <?php $_smarty_tpl->tpl_vars["temp"] = new Smarty_Variable($_smarty_tpl->tpl_vars['key']->value['nazwaSezonu'], null, 0);?>
           <?php }?>
           <?php
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
?>
           <?php if (isset($_smarty_tpl->tpl_vars['temp']->value)) {?>
           <p>Obecnie trwa rozgrywka w sezonie <?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
</p>
           <?php } else { ?>
           <p>Niedługo rusza nowy sezon typera piłkarskiego</p>
           <?php }?>
       </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>
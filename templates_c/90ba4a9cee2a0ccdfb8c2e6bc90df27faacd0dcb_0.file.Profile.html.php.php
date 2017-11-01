<?php /* Smarty version 3.1.27, created on 2017-06-09 23:39:34
         compiled from "C:\xampp\htdocs\typer\templates\Profile.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:26402593b1596402a92_12139334%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90ba4a9cee2a0ccdfb8c2e6bc90df27faacd0dcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Profile.html.php',
      1 => 1497044363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26402593b1596402a92_12139334',
  'variables' => 
  array (
    'login' => 0,
    'Uzytkownik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_593b15964c17a9_66038788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_593b15964c17a9_66038788')) {
function content_593b15964c17a9_66038788 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26402593b1596402a92_12139334';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if (isset($_smarty_tpl->tpl_vars['login']->value)) {?>
<div class="container">

    <div class="page-header">
        <h1 class="text-center">Dane użytkownika</h1>
    </div>
   <form class="form-horizontal">
       <div class="form-group row">
           <label for="login" class="col-md-offset-3 col-md-1">Login:</label>
           <div class=" row col-md-5">

               <input type="text" class="form-control" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['Uzytkownik']->value['login'];?>
">
           </div>
       </div>
       <div class="form-group row">
           <label for="email" class="col-md-offset-3 col-md-1">email:</label>
           <div class=" row col-md-5">
               <input type="email" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['Uzytkownik']->value['email'];?>
" disabled="disabled">
           </div>
       </div>
       <div class="form-group row">
           <label for="haslo" class="col-md-offset-3 col-md-1">Hasło:</label>
           <div class=" row col-md-5">
               <input type="password" class="form-control" id="haslo" name="haslo">
           </div>
       </div>
       <div class="form-group row">
           <label for="haslo2" class="col-md-offset-3 col-md-1">Powtórz hasło:</label>
           <div class=" row col-md-5">
               <input type="password" class="form-control" id="haslo2" name="haslo2">
           </div>
       </div>

       <div class="form-group row">
           <div class="row col-md-offset-4">
               <button type="submit" class="btn btn-default">Zapisz zminay</button>
               <button type="submit" class="btn btn-default">Usun profil</button>
           </div>
       </div>

   </form>





</div>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("logform.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>
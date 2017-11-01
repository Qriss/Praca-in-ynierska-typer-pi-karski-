<?php /* Smarty version 3.1.27, created on 2017-05-31 20:43:39
         compiled from "C:\xampp\htdocs\typer\templates\Opis.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:21504592f0edbe39ab6_04445398%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '505eab300eb07f67e993e397a0992a524bbee930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\Opis.html.php',
      1 => 1496256216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21504592f0edbe39ab6_04445398',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592f0edbed2079_90254735',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592f0edbed2079_90254735')) {
function content_592f0edbed2079_90254735 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21504592f0edbe39ab6_04445398';
echo $_smarty_tpl->getSubTemplate ("header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="container">
    <div class="page-header">
        <h1 class="text-center">Zasady typera piłkarskiego</h1>
    </div>
    <div class="col-md-12">1.Aby wziąć udział w zabawie należy wypełnić formularz rejestracyjny:</div>
    <div class="col-md-12">2.Zasady zdobywania punktów:</div>
    <div class="col-md-12">- poprawne wytypowanie wyniku<kbd>20pkt</kbd> </div>
    <div class="col-md-12">- poprawne wytypowanie zwycięzcy, ale błędne wytypowanie wyniku spotkania<kbd>10pkt</kbd></div>
    <div class="col-md-12">- błędne wytypowanie wyniku<kbd>-1pkt</kbd></div>
    <div class="col-md-12">Przykład: w meczu Juventus - RealMadryt pada wynik <kbd>2:1</kbd></div>
    <div class="col-md-12">Wariant 1: Użytkownik typuj wynik <kbd>2:1</kbd> zdobywa  <kbd>20pkt</kbd></div>
    <div class="col-md-12">Wariant 2: Użytkownik typuj wynik <kbd>3:1</kbd> zdobywa  <kbd>10pkt</kbd></div>
    <div class="col-md-12">Wariant 3: Użytkownik typuj wynik <kbd>1:1</kbd> zdobywa  <kbd>-1pkt</kbd></div>
    <div class="col-md-12">Wygrywa osoba która zdbędzie największą liczbę punktów przez cały okres trwania zabawy</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>
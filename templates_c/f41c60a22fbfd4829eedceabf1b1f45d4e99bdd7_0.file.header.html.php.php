<?php /* Smarty version 3.1.27, created on 2017-05-31 12:01:55
         compiled from "C:\xampp\htdocs\typer\templates\header.html.php" */ ?>
<?php
/*%%SmartyHeaderCode:18883592e94938717e5_57446483%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41c60a22fbfd4829eedceabf1b1f45d4e99bdd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\typer\\templates\\header.html.php',
      1 => 1496224910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18883592e94938717e5_57446483',
  'variables' => 
  array (
    'subdir' => 0,
    'login' => 0,
    'access' => 0,
    'name' => 0,
    'Uzytkownik' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592e9494564254_51881782',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592e9494564254_51881782')) {
function content_592e9494564254_51881782 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18883592e94938717e5_57446483';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Typer pilkarski</title>
    <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/ramka.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/starter-template.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Home">Home</a></li>
                <?php if (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ustawienia<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Kolejka">Kolejki</a></li>
                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Sezon">Sezonu</a></li>
                    </ul>
                </li>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 1) {?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Typ">Typuj</a></li>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Typ/historia">Historia</a></li>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klasyfikacja">Klasyfikacja</a></li>
                <?php } else { ?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Uzytkownik/add">Zarejestruj</a></li>
                <?php }?>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if (!isset($_smarty_tpl->tpl_vars['login']->value)) {?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Access/logform">Zaloguj</a></li>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 2) {?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Uzytkownik/showone/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">Profil(Administrator)</a></li>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Access/logout">Wyloguj</a></li>
                <?php } elseif (isset($_smarty_tpl->tpl_vars['login']->value) && $_smarty_tpl->tpl_vars['access']->value == 1) {?>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Uzytkownik/showone/<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">Profil(<?php echo $_smarty_tpl->tpl_vars['Uzytkownik']->value['login'];?>
)</a></li>
                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Access/logout">Wyloguj</a></li>
                <?php }?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
</body>
</html>



<?php }
}
?>
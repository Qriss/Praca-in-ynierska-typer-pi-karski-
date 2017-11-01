
{include file="header.html.php"}
<div class="container">

    <div class="page-header">
        <h1>Panel logowania</h1>
    </div>

    <form id="logform" action="http://{$smarty.server.HTTP_HOST}{$subdir}Access/login" method="post" class="navbar-form navbar-left" role="form">

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="login" type="text" class="form-control" name="login" value="" placeholder="Login">
        </div>

        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" value="" placeholder="Hasło">
        </div>

        <div class="alert alert-danger collapse" role="alert"></div>
        {if isset($message)}
        <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}
        <button type="submit" class="btn btn-primary">Zaloguj</button>
    </form>
</div>
{include file="footer.html.php"}
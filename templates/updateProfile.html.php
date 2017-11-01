{include file="header.html.php"}
{if isset($login)}
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Edycja profilu</h1>
    </div>

    <form id="addpet" action="http://{$smarty.server.HTTP_HOST}{$subdir}Uzytkownik/insert" method="post">

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" value="{$User['login']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="haslo">Hasło</label>
            <input type="password" class="form-control" id="haslo" name="haslo" >
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="haslo2">Powtórz hasło</label>
            <input type="password" class="form-control" id="haslo2" name="haslo2" >
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{$User['email']}">
            </div>
        </div>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="alert alert-danger collapse" role="alert"></div>
        {if isset($message)}
        <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}
            </div>
        </div>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-default">Zapisz zmiany</button>
        <button type="reset" class="btn btn-default">Wyczysc</button>
            </div>
        </div>
    </form>


</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
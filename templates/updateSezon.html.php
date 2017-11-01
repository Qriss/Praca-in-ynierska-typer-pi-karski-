{include file="header.html.php"}
{if isset($login) and $access == 2}
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Edytuj Sezon</h1>
    </div>

    <form id="addpet" action="http://{$smarty.server.HTTP_HOST}{$subdir}Sezon/insert2" method="post">
        <div class="form-group">
            <label for="idSezon"></label>
            <input type="hidden" class="form-control" id="idSezon" readonly="readonly" name="idSezon" value="{$Sezon['idSezon']}">
        </div>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="nazwa">Nazwa sezonu</label>
            <input type="text" class="form-control" id="nazwa" name="nazwa" value="{$Sezon['nazwaSezonu']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="dataP">Data rozpoczecia</label>
            <input type="text" class="form-control" id="dataP" name="dataP" value="{$Sezon['dataRozpoczecia']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="dataZ">Data zakonczenia</label>
            <input type="text" class="form-control" id="dataZ" name="dataZ" value="{$Sezon['dataZakoncznia']}">
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
        <div class="alert alert-danger collapse" role="alert"></div>
        {if isset($message)}
        <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}
            </div>
        </div>
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
        <button type="submit" class="btn btn-default">Zapisz zmiany</button>
            </div>
        </div>
    </form>


</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
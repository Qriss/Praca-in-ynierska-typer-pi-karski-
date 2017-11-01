{include file="header.html.php"}
{if isset($login) and $access == 2}
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Edytuj Meczu</h1>
    </div>

    <form id="addpet" action="http://{$smarty.server.HTTP_HOST}{$subdir}Mecz/insert2" method="post">
        <datalist id="Druzyna">
            {foreach $allTeam as $key}
            <option value="{$key['nazwaDruzyny']}">
                {/foreach}
        </datalist>

        <datalist id="Liga">
            {foreach $allLeague as $key}
            <option value="{$key['nazwaLeague']}">
                {/foreach}
        </datalist>

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="data">Data rozpoczecia spotkania</label>
            <input type="date" class="form-control" id="data" name="data" value="{$Mecz['dataMeczu']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="time">Godzina rozpoczecia spotkania</label>
            <input type="text" class="form-control" id="time" name="time" value="{$Mecz['godzinaRozpoczecia']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gospodarz">Drużyna gospodarza</label>
            <input list="Druzyna" type="text" class="form-control" id="gospodarz" name="gospodarz" value="{$Mecz['gospodarzNazwa']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gosc">Drużyna gosci</label>
            <input list="Druzyny" type="text" class="form-control" id="gosc" name="gosc" value="{$Mecz['goscNazwa']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="league">Nazwa ligi</label>
            <input list="Liga" type="text" class="form-control" id="league" name="league" value="{$Mecz['league']}">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="idMecz"></label>
            <input type="hidden" class="form-control" id="idMecz" readonly="readonly" name="idMecz" value="{$Mecz['idMecz']}">
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
        <button type="submit" class="btn btn-default">Dodaj</button>
        <button type="reset" class="btn btn-default">Wyczysc</button>
            </div>
        </div>
    </form>


</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
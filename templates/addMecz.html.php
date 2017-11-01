{include file="header.html.php"}
{if isset($login) and $access == 2}
<div class="container">
    <div class="page-header col-centered">
        <h1 class="text-center">Dodaj Mecz</h1>
    </div>

    <form id="addpet" action="http://{$smarty.server.HTTP_HOST}{$subdir}Mecz/insert" method="post">
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
            <input type="date" class="form-control" id="data" name="data">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="time">Godzina rozpoczecia spotkania</label>
            <input type="time" class="form-control" id="time" name="time">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gospodarz ">Drużyna gospodarza</label>
            <input list="Druzyna" type="text" class="form-control" id="gospodarz" name="gospodarz">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="gosc">Drużyna gosci</label>
            <input list="Druzyna" type="text" class="form-control" id="gosc" name="gosc">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="league">Nazwa ligi</label>
            <input list="Liga" type="text" class="form-control" id="league" name="league">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="idKolejka"></label>
            <input type="hidden" class="form-control" id="idKolejka" readonly="readonly" name="idKolejka" value="{$idKolejka}">
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
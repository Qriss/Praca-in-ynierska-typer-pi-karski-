{include file="header.html.php"}
{if isset($login) and $access == 2}
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Dodaj Sezon</h1>
    </div>

    <form id="addpet" action="http://{$smarty.server.HTTP_HOST}{$subdir}Sezon/insert" method="post">

        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="nazwa">Nazwa sezonu</label>
            <input type="text" class="form-control" id="nazwa" name="nazwa">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="dataP">Data rozpoczecia</label>
            <input type="date" class="form-control" id="dataP" name="dataP">
            </div>
        </div>
        <div class="form-group row">
            <div class=" row col-md-offset-3 col-md-6 col-md-offset-3">
            <label for="dataZ">Data zakonczenia</label>
            <input type="date" class="form-control" id="dataZ" name="dataZ">
            </div>
        </div>

        <div class="alert alert-danger collapse" role="alert"></div>
        
        <div class="form-group row">
            <div class="row col-md-offset-3 col-md-6 col-md-offset-3">
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
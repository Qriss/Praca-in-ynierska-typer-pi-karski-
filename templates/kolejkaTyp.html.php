{include file="header.html.php"}
{if isset($login) and $access == 1}
<div class="container">

    {if $allKolejka|@count === 0}
    <div class="page-header">
        <h1>Brak dostępnych kolejke do typowania</h1>
    </div>
    {else}
    <div class="page-header">
        <h1>Dostępne kolejki do typowania </h1>
    </div>


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Numer kolejki</th>
                <th>Liczba meczy</th>
                <th>Typuj</th>
            </tr>
            </thead>
        <tbody>
            {foreach $allKolejka as $key => $Kolejka}
            <tr>
                {if $Kolejka['status'] == 1}
                <th scope="row">{$Kolejka['idKolejka']}</th>
                <td>{$Kolejka['ile']}</td>
                {assign var="temp_id" value=$Kolejka['idKolejka']}
                <td><a type="button" class="btn btn-primary" href="http://{$smarty.server.HTTP_HOST}{$subdir}Typ/showMecz/{$temp_id}">Wprowadź typ<a></td>
                {/if}
            </tr>


            {/foreach}
        </tbody>
        </table>
    {/if}
        <div class="alert alert-danger collapse" role="alert"></div>





</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
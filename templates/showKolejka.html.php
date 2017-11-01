{include file="header.html.php"}
{if isset($login) and $access == 2}
<div class="container">
    <div class="page-header">
        <h1>Lista kolejek</h1>
    </div>
    {if $allKolejka|@count === 0}
    <div class="alert alert-danger" role="alert">Brak kolejek w bazie!</div>
    {/if}
    <form id="addpet" action="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/insert" method="post">


        <table class="table table-striped">
            <thead>
            <tr>
                <th>Numer kolejki</th>
                <th>Status</th>
                <th>Liczba meczy</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            {foreach $allKolejka as $key => $Kolejka}
            <tr>
                <th scope="row">{$Kolejka['numerKolejki']}</th>
                {if $Kolejka['status'] == 1}
                <td>uruchomiona</td>
                {elseif $Kolejka['status'] == 2}
                <td>zakończona</td>
                {else}
                <td>nie uruchomiona</td>
                {/if}
                <td>{$Kolejka['ile']}</td>
                {assign var="temp_id" value=$Kolejka['idKolejka']}
                {if $Kolejka['status'] == 0}
                <td><a type="button" class="btn btn-success" href="http://{$smarty.server.HTTP_HOST}{$subdir}Mecz/add/{$temp_id}">Dodaj mecz<a></td>
                {else}
                <td><a type="button" class="btn btn-success disabled" href="http://{$smarty.server.HTTP_HOST}{$subdir}Mecz/add/{$temp_id}">Dodaj mecz<a></td>
                {/if}
                {if $Kolejka['status'] == 0}
                <td><a type="button" class="btn btn-danger" href="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/delete/{$temp_id}">Usun</td>
                {else}
                <td><a type="button" class="btn btn-danger disabled" href="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/delete/{$temp_id}">Usun</td>
                {/if}
                <td><a type="button" class="btn btn-info" href="http://{$smarty.server.HTTP_HOST}{$subdir}Mecz/index/{$temp_id}">Podglad </td>
                {if $Kolejka['status'] == 0}
                <td><a type="button" class="btn btn-warning" href="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/run/{$temp_id}">Uruchom</td>
                {else}
                <td><a type="button" class="btn btn-warning disabled" href="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/run/{$temp_id}">Uruchom</td>
                {/if}
                {if $Kolejka['status'] == 1}
                <td><a type="button" class="btn btn-primary" href="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/end/{$temp_id}">zakoncz</td>
                {else}
                <td><a type="button" class="btn btn-primary disabled" href="http://{$smarty.server.HTTP_HOST}{$subdir}Kolejka/end/{$temp_id}">zakoncz</td>
                {/if}
            </tr>


            {/foreach}
            </tbody>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>
        {if isset($message)}
        <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}
        <button type="submit" class="btn btn-default">Dodaj Kolejke</button>
        

    </form>

</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
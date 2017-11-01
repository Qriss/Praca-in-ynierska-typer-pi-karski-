{include file="header.html.php"}
{if isset($login) and $access == 2}
<div class="container">
    <div class="page-header">
        <h1>Lista sezonów</h1>
    </div>
    {if $allSezon|@count === 0}
    <div class="alert alert-danger" role="alert">Brak Sezonow w bazie!</div>
    {/if}




    <table class="table table-striped">
        <thead>
            <tr class="header">
                <th>Nazwa sezonu</th>
                <th>Data rozpoczecia</th>
                <th>Data zakonczenia</th>
                <th>Liczba kolejek</th>
                <th>Status</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach $allSezon as $key => $Sezon}
            <tr>

                <th scope="row">{$Sezon['nazwaSezonu']}</th>
                <td>{$Sezon['dataRozpoczecia']}</td>
                <td>{$Sezon['dataZakonczenia']}</td>
                <td>{$Sezon['ile']}</td>
                {if $Sezon['status'] == 1}
                <td>aktywny</td>
                {else}
                <td>nie aktywny</td>
                {/if}
                {assign var="temp_id" value=$Sezon['idSezon']}
                <td><a type="button" class="btn btn-primary" href="http://{$smarty.server.HTTP_HOST}{$subdir}Sezon/update/{$temp_id}">Edytuj</a></td>
                <td><a type="button" class="btn btn-danger" href="http://{$smarty.server.HTTP_HOST}{$subdir}Sezon/delete/{$temp_id}">Usun</a></td>
            </tr>


            {/foreach}
        </tbody>
        </table>

    <div class="alert alert-danger collapse" role="alert"></div>
    {if isset($message)}
    <div class="alert alert-danger" role="alert">{$message}</div>
    {/if}
        <a type="button" class="btn btn-default" href="http://{$smarty.server.HTTP_HOST}{$subdir}Sezon/add/">Nowy sezon</a>
        



</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
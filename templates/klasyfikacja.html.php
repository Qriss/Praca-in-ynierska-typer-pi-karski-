{include file="header.html.php"}
{if isset($login) and $access == 1}
<div class="container">
    <div class="page-header">
        <h1 class="text-center">Klasyfikacja generalna sezon: 2016/2017</h1>
    </div>
    {if $allPozycja|@count === 0}
    <div class="alert alert-danger" role="alert">Klasyfikacja nie jest jeszcze dostępna</div>
    {/if}



        <table class="table table-striped">
            <thead>
            <tr>
                <th>Pozycja</th>
                <th>Nick</th>
                <th>Liczba punktów</th>


            </tr>
            </thead>
            <tbody>
            {foreach $allPozycja as $key}
            <tr class="emp">
                <th scope="row">{$key['Miejsce']}</th>
                <td>{$key['login']}</td>
                <td>{$key['Punkty']}</td>



            </tr>


            {/foreach}
            </tbody>
        </table>

        <div class="alert alert-danger collapse" role="alert"></div>
        {if isset($message)}
        <div class="alert alert-danger" role="alert">{$message}</div>
        {/if}

        



</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
{include file="header.html.php"}


    <div class="jumbotron">
        <div class="container">
        <h1>Typer piłkarski</h1>
        <p>Typuj największe wydarzenia piłkarskie i zdobywaj punkty</p>
            <p><a class="btn btn-primary btn-lg" href="http://{$smarty.server.HTTP_HOST}{$subdir}Home/opis">Dowiedz sie więcej</a></p>
        </div>

    </div>

<div class="container">
    <div>
      <div class="col-md-3">
          <h3>Kontakt</h3>
          <p>Adres: qriss@wp.pl</p>
       </div>
       <div class="col-md-5">
           <h3>Typuj</h3>
           {if $kolejka|@count === 0}
           <p>Obecnie nie ma nowych kolejke do typowania</p>
           {else}
           <p>Właśnie wystartowała nowa kolejka do typowania</p>
           {/if}
       </div>
       <div class="col-md-4">
           <h3>Rozgrywka</h3>
           {foreach $sezon as $key}
           {if $key['status'] == 1}
           {assign var="temp" value=$key['nazwaSezonu']}
           {/if}
           {/foreach}
           {if isset($temp)}
           <p>Obecnie trwa rozgrywka w sezonie {$temp}</p>
           {else}
           <p>Niedługo rusza nowy sezon typera piłkarskiego</p>
           {/if}
       </div>
    </div>
</div>



{include file="footer.html.php"}


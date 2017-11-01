{include file="header.html.php"}
{if isset($login) and $access == 1}
<div class="container">
    <div class="panel-body">
        {if $allMecz|@count === 0}
        <div class="alert alert-danger" role="alert">Brak meczy w kolejce</div>
        {/if}
        {foreach $allMecz as $key}
        <div class="row">
            <div class="col-md-12">{$key['dataMeczu']} {$key['godzinaRozpoczecia']}</div>
        </div>
       
        <div class="row" >

            <div class="col-md-2" >
                {$key['league']}
            </div>
            <div class="col-md-2" >{$key['gospodarzNazwa']}</div>
            <div class="col-md-2" >

                <label for="typGospodarz" ></label><input id="typGospodarz"  type="text" size="1" disabled name="{$key['idMecz']}typGospodarz" value="{$key['typGospodarz']}" style="text-align: center"/>:<label for="typGosc"></label><input id="typGosc" type="text" disabled size="1"  name="{$key['idMecz']}typGosc" value="{$key['typGosc']}" style="text-align: center"/>

            </div>
            <div class="col-md-2" >{$key['goscNazwa']}</div>
            <div class="col-md-1" >
                {if $key['punkty'] == ""}
                0 pkt
                {else}
            {$key['punkty']} pkt
                {/if}
            </div>
            <div class="col-md-1" >
            </div>
            <div class="col-md-2" >
            </div>
            
            



        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2">Wynik spotkania</div>
            <div class="col-md-2" >

                <label for="golGospodarz" ></label><input id="golGospodarz"  type="text" size="1" readonly="readonly"  name="golGospodarz" value="{$key['golGospodarz']}" disabled style="text-align: center"/>:<label for="golGosc"></label><input id="golGosc" type="text" disabled size="1"  name="golGosc" value="{$key['golGosc']}" style="text-align: center"/>

            </div>
        </div>
        {/foreach}

    </div>


</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}


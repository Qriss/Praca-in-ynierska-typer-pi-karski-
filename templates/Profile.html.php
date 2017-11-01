{include file="header.html.php"}
{if isset($login)}
<div class="container">

    <div class="page-header">
        <h1 class="text-center">Dane użytkownika</h1>
    </div>
   <form class="form-horizontal">
       <div class="form-group row">
           <label for="login" class="col-md-offset-3 col-md-1">Login:</label>
           <div class=" row col-md-5">

               <input type="text" class="form-control" id="login" name="login" value="{$Uzytkownik['login']}">
           </div>
       </div>
       <div class="form-group row">
           <label for="email" class="col-md-offset-3 col-md-1">email:</label>
           <div class=" row col-md-5">
               <input type="email" class="form-control" id="email" name="email" value="{$Uzytkownik['email']}" disabled="disabled">
           </div>
       </div>
       <div class="form-group row">
           <label for="haslo" class="col-md-offset-3 col-md-1">Hasło:</label>
           <div class=" row col-md-5">
               <input type="password" class="form-control" id="haslo" name="haslo">
           </div>
       </div>
       <div class="form-group row">
           <label for="haslo2" class="col-md-offset-3 col-md-1">Powtórz hasło:</label>
           <div class=" row col-md-5">
               <input type="password" class="form-control" id="haslo2" name="haslo2">
           </div>
       </div>

       <div class="form-group row">
           <div class="row col-md-offset-4">
               <button type="submit" class="btn btn-default">Zapisz zminay</button>
               <button type="submit" class="btn btn-default">Usun profil</button>
           </div>
       </div>

   </form>





</div>
{else}
{include file="logform.html.php"}
{/if}
{include file="footer.html.php"}
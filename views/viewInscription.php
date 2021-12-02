<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
body {
    background:#C5D2EB
}

</style>
<body>
<?php
// require('Header.php');
?>
    



    <form action="<?=_BASE?>/controllerInscription/addOneClient" method="POST">
        <h1> Inscription </h1>
        
    <label> Email <label>
        <input type="email" id="email" name="email" placeholder="Email" required /> <br>
      <label> Password <label>
       <input type="password"  id="password" name="password"  placeholder="Mot de passe" required /><br>
       <label> Nom<label>
       <input type="text"  id="nom" name="nom" placeholder="Nom" required /><br>
       <label> Prénom <label>
       <input type="text"  id="prenom" name="prenom" placeholder="prenom" required /><br>
       <label> Téléphone <label>
       <input type="text"  id="tph" name="tph"  placeholder="téléphone" required /><br>
    
       <input type="hidden"  id="role" name="role" value="client" required /><br>



        <input type="submit" value="Valider l'inscrption" class="button-3">



        
    
</form>

<a href="connexion"> Déja inscrit(e)? Clique ici.</a>
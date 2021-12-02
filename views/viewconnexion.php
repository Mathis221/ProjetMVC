<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
        <!-- CSS only -->
        
        </head>
    
    <body>
    <div class="header">

<?php
    
    // include("Header.php"); 

    ?>

</div>

    
    <div id="container">

<h1> Connexion </h1>

<form action="<?=_BASE?>/controllerInscription/verifypassword" method="POST">

        <label><b>Email</b></label>
                <input type="text" placeholder="Entrer votre email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    
        <input type="submit" value="Se connecter" name="Se connecter" class="button-3">

        <a href="formInscription"> Pas encore inscrit(e)? Clique ici. </a>

        </form>
        </div>
    </body>
</html>
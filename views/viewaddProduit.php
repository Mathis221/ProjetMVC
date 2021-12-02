

<?php
include("header.php");
?>


<!DOCTYPE html>
 <html>
    <head>
        <style>
           .form-group{
              background-color: grey;
              

            }
        </style>
        
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     </head>
     <body>
         <div class="container">

         <form action="<?=_BASE?>/controllerProduit/addOneProduit" method="POST">
             <h1>Ajout d'un nouveau produit</h1>
             <form>
               <fieldset>
                 <legend>Nouveau produit</legend>
                 
                 <div class="form-group">
                   <label for="type">Nom du Produit</label>
                   <input type="text" id="type" name="type" placeholder="Type de produit" required /> <br>
                 </div>
                 
                 <div class="form-group">
                   <label for="prix">Prix en €</label>
                   <input type="text"  id="prix" name="prix"  placeholder="Prix du produit" required /><br>
                 </div>
                 <div class="form-group">
                   <label for="image">TVA produit</label>
                   <input type="text"  id="TVA" name="TVA"  placeholder="TVA produit en %" required /><br>
                 </div>
                 <div class="form-group">
                   <label for="image">STOCK DE BASE</label>
                   <input type="text"  id="STOCK" name="STOCK"  placeholder="STOCK de base" required /><br>
                 </div>
                 <div class="form-group">
                   <label for="image">Image produit</label>
                   <input type="file"  id="prix" name="image"  placeholder="Image produit(.jpg...)" required /><br>
                 </div>
               
                 <div class="form-group">
                   <label for="description">Description</label>
                   <textarea class="form-control" id="description" name="description"  rows="3"></textarea>

                   <input type="submit" value="Valider nouveau produit" class="button-3">
                 </div>
               </fieldset>
             </form>
         </div>
    </body>
</html>
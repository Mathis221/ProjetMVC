
<!DOCTYPE html>
<html>
    
<?php
 if ($_SESSION['role']=="admin") {
  require('header.php');
  
} else { 
  require('headerClient.php');
}


?>

    <body>
        
   <!-- <a href=logout.php> LOGOUT </a> -->

 <div>
   <?php
 if ($_SESSION['role']=="admin") {
   echo "<h1> Vue CLIENT </h1>";
 }
  
  ?>

 </div>
<a href="<?=_BASE?>/controllerProduit/affichecart" class="text-decoration-none">
                Voir mon panier
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="panier" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
</svg> </a>
               
 <div style=" display: flex; flex-direction: row; flex-wrap: wrap;" >
 <?php
foreach ($tab as $row){
?>

<div class="card" style="width: 18rem" >
<img src="<?=_BASE?>/<?=$row['image']?>" alt="" style="width:250px;height:200px" >
<div class="card-body">
  <h5 class="card-title"><?=$row['type']?></h5>
  <div class="card-text"><?=$row['description']?></div>
  <div class="card-price"><?=$row['prix']?> € HT</div>
  <div>Quantité</div>
  <form action='<?=_BASE?>/controllerProduit/addtocart' method='post' >
  <input type='text' name='qte'>
  <input type='hidden' name='id_produit' value='<?=$row["id_produit"]?>'>
  <input type="submit" value="Ajouter au panier"  class="btn btn-primary">
  </form>
  
</div>
</div>
<?php
}
?>

</div>





</body>
</html>

   
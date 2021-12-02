<?php

require_once("models/modelClient.php");

require_once("models/modelProduit.php");


function Home(){

    require_once ("views/viewHomeClient.php");
}


function afficheProduit(){
    
    $tab = getProduits();
   
   require_once('views/viewProduit.php');

}



function addtocart(){

if(!isset($_SESSION['id_commande'])) {
// insertion dans commande
  $tab=enregcommande();                                 
} 

    $produit = $_POST['id_produit'];
    $commande = $_SESSION['id_commande'];
    $qte = $_POST['qte'];
    // insertion dans contenu_commande
     insertcommande($produit,$commande,$qte);

    // header("Location:")
    
  } 

  function afficheCart(){


//  $resultat=selectidcommande();
 $result2=selectProduit();
    require_once('views/viewcart.php');
}

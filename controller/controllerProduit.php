<?php

require_once("models/modelProduit.php");

function formNewProduit(){
require_once('views/viewaddProduit.php') ;
}



function addOneProduit() {

$type = $_POST['type'];
$prix  = $_POST['prix'];
$img  = $_POST['image'];
$des = $_POST['description'];
$tva = $_POST['TVA'];
$stock = $_POST['STOCK'];
insertProduit($type,$prix,$img,$des,$tva,$stock);
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

function modifProduit($id){

 
  $tab = selectProduitId($id);

    require_once('views/viewUpdateProduit.php');
}

function listeProduit(){
    
  $tab= getProduits();
 
 require_once('views/viewListProduit.php');


}

function newUpdateProduit(){
  
  $type = $_POST['type'];
  $prix = $_POST['prix'];
  $des = $_POST['description'];
  $image = $_POST['image'];
  $tva= $_POST['TVA'];
  $stock = $_POST['STOCK'];
  $id = $_POST['id_produit'];
  
  updateProduit($type,$prix,$des,$image,$tva,$stock,$id);
}
  
  ?>

  

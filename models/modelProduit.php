
<?php

require_once('models/model.php');

function insertProduit($type,$prix,$img,$des,$tva,$stock){
$bddPDO = connexionBDD();
$requete= $bddPDO->prepare('INSERT INTO produit( type, prix, image, description,TVA,STOCK )
VALUES (:type,:prix,:image,:description,:TVA,:STOCK )');
$requete->bindvalue(':type', $type);
$requete->bindvalue(':prix', $prix);
$requete->bindvalue(':image', $img);
$requete->bindvalue(':description', $des);
$requete->bindvalue(':TVA', $tva);
$requete->bindvalue(':STOCK', $stock);
$resultAddproduct = $requete->execute();
return $resultAddproduct;

}

function getProduits(){

    $bddPDO = connexionBDD();
    $request = "SELECT * FROM produit";
    $tab = $bddPDO->query($request);
    return $tab;
}

function enregcommande(){
echo "ENREG";
$bddPDO = connexionBDD();
$sql= $bddPDO->prepare("INSERT INTO commande(id_user) VALUES ( ? )" );
 $sql->execute(array( $_SESSION['id_user']) );
 $_SESSION['id_commande'] = $bddPDO->lastInsertId();
// return $tab;
}

function insertcommande($prod,$commande,$qte) {
    try {
$bddPDO = connexionBDD();
$sql= $bddPDO->prepare("INSERT INTO contenu_commande(id_produit, id_commande , qte) VALUES ( ?, ?, ? );" );
$sql->execute(array($prod,$commande,$qte) );

    } catch (PDOException $e) {
        echo $e;
    }
}

function selectProduitId($id)
{
    $bddPDO = connexionBDD();
    $sql = "SELECT * FROM produit WHERE id_produit =".$id ;
    $tab = $bddPDO->query($sql);

   return $tab;
}


function selectProduit(){
$bddPDO = connexionBDD();

$result2 = $bddPDO->query("SELECT produit.id_produit,produit.type,produit.prix,produit.image,produit.TVA,produit.STOCK,contenu_commande.qte,contenu_commande.id_commande,contenu_commande.id_produit
FROM produit,contenu_commande WHERE contenu_commande.id_produit= produit.id_produit AND ".$_SESSION['id_commande']."=contenu_commande.id_commande");
return $result2;

}

function updateProduit($id,$type,$prix,$des,$image,$tva,$stock) { 
    $bddPDO = connexionBDD();
    $sql= 'UPDATE `produit` SET `type`= ? ,`prix`= ?,`description`= ? ,`image`= ? ,`TVA`= ? ,`STOCK`= ?    WHERE id_produit = ? ';
    $requete = $bddPDO->prepare($sql);
    $requete->execute(array($type,$prix,$des,$image,$tva,$stock,$id));

}

     

 ?>

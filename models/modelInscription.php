<?php
require_once('models/model.php');
function insertClient( $email,$hash,$nom,$prenom,$role,$tph){
 $bddPDO = connexionBDD();
 $requete = $bddPDO->prepare('INSERT INTO client(email, password, nom , prenom, role, tph)
 VALUES (:email,:password,:nom,:prenom,:role,:tph )');
 $requete->bindvalue(':email', $email);
 $requete->bindvalue(':password', $hash);
 $requete->bindvalue(':nom', $nom);
 $requete->bindvalue(':prenom', $prenom);
 $requete->bindvalue(':role', $role);
 $requete->bindvalue(':tph', $tph);
 $resultAddClient = $requete->execute();
 return $resultAddClient;
}


function getInscrit($email){
    
    $bddPDO = connexionBDD();
    $request = "SELECT * FROM client WHERE email=?";
    $result = $bddPDO->prepare($request);
    $result->execute([$email]);
    $row=$result->fetch();
return $row;
}




 ?>
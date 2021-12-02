
<?php

require_once("models/modelInscription.php");

function login (){
    require_once('views/viewlogin.php') ;
}

function formInscription(){
require_once('views/viewInscription.php') ;
}
function addOneClient() {

    $email = $_POST['email'];
    $pass  = $_POST['password'];
    $hash = password_hash ($pass, PASSWORD_DEFAULT);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $role = $_POST['role'];
    $tph = $_POST['tph'];
insertClient($email,$hash,$nom,$prenom,$role,$tph);
} 

function connexion(){
    require_once("views/viewconnexion.php");
}

function verifypassword(){
    
$email = $_POST['email'];
$password  = $_POST['password'];

$row=getInscrit($email);

$mailverif=$row['email'];
$passverif=$row['password'];

$passok=password_verify($password,$passverif);



if($email == $mailverif) {

    if($passok == true) {
        
        $_SESSION['id_user']=$row['id_user'];
        $_SESSION['role']=$row['role'];
        $_SESSION['nom']=$row['nom'];
        $_SESSION['prenom']=$row['prenom'];

        if ($_SESSION['role']=="admin") {
            header("Location:acceuiladmin");
        } else { 
            header("Location:/projetMVC/controllerClient/Home");
        }
        
    } else  {
    
    echo("votre email ou votre mdp est incorect");
       
     
        }

    }
}

function acceuiladmin(){

require_once("views/viewacceuiladmin.php");

}

function Home(){
    require_once("views/viewacceuiladmin.php");
}



?>
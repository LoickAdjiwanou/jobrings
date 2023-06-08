<?php
    require_once('bdd.php');
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    //chercheur
    $reqchercheur = $bdd -> prepare("SELECT * FROM chercheur WHERE email = :em AND motdepasse = :pass");
    $reqchercheur->execute(array(
        'em'=>$email,
        'pass'=>$pass
    ));        
    $ligne1 = $reqchercheur->rowCount();
    if($ligne1 != 0){
        while($res=$reqchercheur->fetch()){
            $_SESSION['nom'] = $res['nom'];
            $_SESSION['prenom'] = $res['prenom'];
            $_SESSION['email'] = $res['email'];
        }
        $reqchercheur->closeCursor();
        header("Location: accueil_chercheur.php");
    }

    //entreprise
    $reqentreprise = $bdd -> prepare('SELECT * FROM entreprise WHERE email = :em AND motdepasse = :pass');
    $reqentreprise->execute(array(
        'em'=>$email,
        'pass'=>$pass
    ));
    $ligne2 = $reqentreprise->rowCount();
    if($ligne2 != 0){
        while($res=$reqentreprise->fetch()){
            $_SESSION['nom'] = $res['nom'];
            $_SESSION['email'] = $res['email'];
        }
        $reqentreprise->closeCursor();
        header("Location: accueil_entreprise.php");
    }



?>
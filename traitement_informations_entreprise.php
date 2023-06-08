<?php
    require_once('bdd.php');
    $email = $_POST['email'];
    $nom=$_POST['nom'];
    $categorie=$_POST['categorie'];
    $ville=$_POST['ville'];
    $site=$_POST['site'];
    
    $request = $bdd -> prepare("INSERT INTO entreprise(nom, categorie, email, ville, site) VALUES(:nom, :categorie, :email, :ville, :site)");
    $request -> execute(array(
        'nom'=>$nom,
        'categorie'=>$categorie,
        'email'=>$email,
        'ville'=>$ville,
        'site'=>$site
    ));
    
    //session
    session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['email'] = $email;

    header("Location: creer_compte_entreprise.php");
?>
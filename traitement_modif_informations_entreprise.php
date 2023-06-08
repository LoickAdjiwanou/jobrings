<?php
    session_start();
    require_once('bdd.php');
    $email = htmlspecialchars($_GET['em']);
    $nom=$_POST['nom'];
    $categorie=$_POST['categorie'];
    $ville=$_POST['ville'];
    $site=$_POST['site'];    

    $request = $bdd -> query('UPDATE entreprise SET nom = "'.$nom.'", categorie = "'.$categorie.'", ville ="'.$ville.'", site ="'.$site.'" WHERE email ="'.$email.'"');

    $_SESSION['nom'] = $nom;
    $_SESSION['email'] = $email;

    header("Location: profil_entreprise.php");
?>
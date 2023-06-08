<?php
    //faire la condition pour && $_POST['pass'] == $_POST['pass2']
    require_once('bdd.php');
    session_start();
    if ($_POST['mode'] == "chercheur") {
        $email = $_SESSION['email'];
        $request = $bdd->prepare('UPDATE chercheur SET motdepasse = :mpd WHERE email = :email');
        $request->execute(array(
            'mpd' => $_POST['pass'],
            'email' => $email
        ));
        header("Location: accueil_chercheur.php");
    } else {
        if ($_POST['mode'] == "entreprise") {
            $email = $_SESSION['email'];
            $request = $bdd->prepare('UPDATE entreprise SET motdepasse = :mpd WHERE email = :email');
            $request->execute(array(
                'mpd' => $_POST['pass'],
                'email' => $email
            ));
            header("Location: accueil_entreprise.php");
        }
    }
?>

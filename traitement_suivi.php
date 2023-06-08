<?php
    session_start();
    $idsui = htmlspecialchars($_GET['idsuivi']);
    require_once('bdd.php');
    $suivi = $bdd -> prepare("INSERT INTO suivre VALUES(:nomcher, :job)");
    $suivi->execute(array(
        'nomcher'=>$_SESSION['nom'],
        'job'=>$idsui
    ));

    header("Location: details_chercheur.php?idposte=$idsui&svr=1");
?>
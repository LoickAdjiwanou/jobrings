<?php
    session_start();
    $idsui = htmlspecialchars($_GET['idpostuler']);
    require_once('bdd.php');
    $suivi = $bdd -> prepare("INSERT INTO suivre VALUES(:nomcher, :job)");
    $suivi->execute(array(
        'nomcher'=>$_SESSION['nom'],
        'job'=>$idsui
    ));

    header("Location: details_suivi.php?idposte=$idsui&sup=0");
?>
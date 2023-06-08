<?php
    session_start();
    $idposte_postuler = htmlspecialchars($_GET['idpostuler']);
    require_once('bdd.php');

    $postuler = $bdd -> query('DELETE FROM postuler WHERE id_job="'.$idposte_postuler.'"');

    header("Location: details_candidature.php?idposte=$idposte_postuler&sup=1");
?>
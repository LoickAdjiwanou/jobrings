<?php
    session_start();
    $idposte_postuler = htmlspecialchars($_GET['idpostuler']);
    require_once('bdd.php');

    $desuivre = $bdd -> query('DELETE FROM suivre WHERE id_job="'.$idposte_postuler.'"');

    header("Location: details_suivi.php?idposte=$idposte_postuler&sup=1");
?>
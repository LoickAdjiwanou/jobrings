<?php
    session_start();
    $idposte_postuler = htmlspecialchars($_GET['idpostuler']);
    require_once('bdd.php');
    $info = $bdd -> query('SELECT * FROM publications WHERE id = "'.$idposte_postuler.'"');
    while($inf=$info->fetch()){
        $entreprise = $inf['nomentreprise'];
        $intitule = $inf['nompublication'];
    }
    $info->closeCursor();

    $postuler = $bdd -> prepare("INSERT INTO postuler VALUES(:nomchercheur, :emailcandidat, :nomentreprise, :job, :idjob)");
    $postuler->execute(array(
        'nomchercheur'=>$_SESSION['nom'],
        'emailcandidat'=>$_SESSION['email'],
        'nomentreprise'=>$entreprise,
        'job'=>$intitule,
        'idjob'=>$idposte_postuler
    ));

    header("Location: details_chercheur.php?idposte=$idposte_postuler&svr=0");
?>
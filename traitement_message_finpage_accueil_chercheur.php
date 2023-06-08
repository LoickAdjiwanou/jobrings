
<?php
    require_once('bdd.php');
    $message = $bdd -> prepare("INSERT INTO messages(nom, email, textmessage) VALUES(:nn, :eml, :mes)");
    $message ->execute(array(
        'nn'=>$_POST['nommessage'],
        'eml'=>$_POST['emailmessage'],
        'mes'=>$_POST['message']
    ));
    header("Location: principal.php");
?>
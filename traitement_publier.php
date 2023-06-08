<?php
session_start();
require_once('bdd.php');
$email = htmlspecialchars($_GET['em']);

$nompub = $_POST['nompublication'];
$dure = $_POST['duree'];
$expe = $_POST['expe'];
$salaire = $_POST['salaire'];
$details = $_POST['details_job'];
$motcle = $_POST['motcle'];

$req = $bdd -> query('SELECT * FROM entreprise WHERE email = "'.$email.'"');
while($res=$req->fetch()){
    $nomentreprise = $res['nom'];
    $type = $res['categorie'];
}
$req->closeCursor();

$request = $bdd -> prepare('INSERT INTO publications(nompublication, motcle, nomentreprise, type, duree, experience, salaire, details_job) VALUES (:mp, :mc, :ne, :t, :d, :ex, :sa, :de)');
$request->execute(array(
    'mp'=>$nompub,
    'mc'=>$motcle,
    'ne'=>$nomentreprise,
    't'=>$type,
    'd'=>$dure,
    'ex'=>$expe,
    'sa'=>$salaire,
    'de'=>$details
));

header("Location: jobs_entreprise.php");
?>
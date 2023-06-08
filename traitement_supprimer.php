<?php
session_start();
require_once('bdd.php');
$id = htmlspecialchars($_GET['idposte']);
$req = $bdd -> query('DELETE FROM publications WHERE id = "'.$id.'"');

header("Location: jobs_entreprise.php");
?>
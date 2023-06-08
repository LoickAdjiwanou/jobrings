<?php
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=projetuteure','root','');
    }
    catch(Exception $e){
        die('Erreur: '.$e);
    }
?>
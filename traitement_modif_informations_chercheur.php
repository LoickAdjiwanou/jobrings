<?php
    session_start();
    require_once('bdd.php');
    $email = htmlspecialchars($_GET['em']);
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $sexe=$_POST['sexe'];
    $situation=$_POST['situation'];
    $telephone=$_POST['telephone'];
    //traitement image
    if(isset($_FILES['cv']) AND $_FILES['cv']['error']==0){
        if($_FILES['cv']['size']<=1000000){
            $infosfichier=pathinfo($_FILES['cv']['name']);
            $extention_upload=$infosfichier['extension'];
            if($extention_upload == 'pdf'){
                $titre = "cv";
                move_uploaded_file($_FILES['cv']['tmp_name'],'cvs/'.$titre.'_'.$nom.'.'.'pdf');
                //supprimer l'ancien
                $request = $bdd -> query('UPDATE chercheur SET nom = "'.$nom.'", prenom = "'.$prenom.'", age ="'.$age.'", sexe ="'.$sexe.'", situation ="'.$situation.'", telephone ="'.$telephone.'" WHERE email ="'.$email.'"');
            }
        }
    }
    else{
        $request = $bdd -> query('UPDATE chercheur SET nom = "'.$nom.'", prenom = "'.$prenom.'", age ="'.$age.'", sexe ="'.$sexe.'", situation ="'.$situation.'", telephone ="'.$telephone.'" WHERE email ="'.$email.'"');
        $fic = 'cvs/cv_'.$_SESSION['nn'].'.pdf';
        $newfic = 'cvs/cv_'.$nom.'.pdf';
        rename($fic,$newfic);
    }

    $_SESSION['nom'] = $nom;
    $_SESSION['email'] = $email;

    header("Location: profil_chercheur.php");
?>
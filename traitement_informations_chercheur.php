<?php
    require_once('bdd.php');
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
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
                $request = $bdd -> prepare("INSERT INTO chercheur(nom, prenom, email, age, sexe, situation, telephone) VALUES(:nom, :prenom,
                    :email, :age, :sexe, :situation, :telephone)");
                $request->execute(array(
                'nom'=>$nom,
                'prenom'=>$prenom,
                'email'=>$email,
                'age'=>$age,
                'sexe'=>$sexe,
                'situation'=>$situation,
                'telephone'=>$telephone
            ));
                
            }
        }
    }

    //session
    session_start();
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['email'] = $email;

    header("Location: creer_compte_chercheur.php");
?>
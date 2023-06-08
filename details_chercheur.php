<?php
    session_start();
    $d = htmlspecialchars($_GET['idposte']);
    $svr = htmlspecialchars($_GET['svr']);
    require_once('bdd.php');
?>
<!Doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>Home JoBrings</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar-collapse">
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>

    <div class="culmn">
        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
        
            <div class="container">    
                <div class="attr-nav">
                    
                </div>        

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="">
                        <strong><p style="color:initial; font-size: 25px;">
                        <?php
                            echo $_SESSION['prenom'].'<br/>'.$_SESSION['nom'].'<br/><font size="4px">Profil: Chercheur d\'emploi</font>';
                        ?>
                        </p></strong>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="accueil_chercheur.php" style="color:black;">Feed</a></li>
                        <li><a href="jobs_chercheur.php?nb=0" style="color:black;">Jobs</a></li>
                        <li><a href="candidatures.php?sup=0" style="color:black;">Candidatures</a></li>
                        <li><a href="suivis.php?svr=0" style="color:black;">Suivis</a></li>
                        <li><a href="profil_chercheur.php" style="color:black;">Profil</a></li>  
                    </ul>
                </div>
            </div>
        </nav>

        <section id="hello" class="home bg-mega">
            <div class="overlay"></div>
            <div class="container">

            </div>
        </section>
        <br/><br/><br/><br/>

        <!--Jobs Section-->
        <section id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="main_blog text-center roomy-100">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="head_title text-center">
                                <br/>
                                <h2>Détails Job</h2>
                                <?php
                                    $svr=0;
                                    $sv = $bdd -> query('SELECT * FROM suivre WHERE nomchercheur = "'.$_SESSION['nom'].'"');
                                    while($rs=$sv->fetch()){
                                        if($rs['id_job'] == $d){
                                            $svr++;
                                        }
                                    }
                                    $sv->closeCursor();

                                    $pos = 0;
                                    $po = $bdd -> query('SELECT * FROM postuler WHERE nomcandidat = "'.$_SESSION['nom'].'"');
                                    while($rss=$po->fetch()){
                                        if($rss['id_job'] == $d){
                                            $pos++;
                                        }
                                    }
                                    $sv->closeCursor();

                                    $reqs = $bdd ->query('SELECT * FROM publications WHERE id ="'.$d.'"');
                                    while($resultats=$reqs->fetch()){
                                ?>
                                <div class="separator_auto"></div>
                                <?php echo '<h5>'.$resultats['nompublication'].'</h5>'; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="blog_item m-top-20" style="border:1px solid lightgrey;box-shadow:3px 3px 3px 3px;padding-top:5px;padding-bottom:0px;padding-left:15px;background-color:white;">
                                <div class="blog_item_img" style="text-align: left;padding-right:200px;">
                                <?php
                                    echo '<h5><b>Entreprise:</b> '.$resultats['nomentreprise'].'</h5>';
                                    echo '<h5><b>Domaine:</b> '.$resultats['type'].'</h5>';
                                ?>
                                </div>
                                <div class="blog_text roomy-40" style="text-align: left; background-color:lightgrey;padding-left:15px;margin-bottom:6px;margin-left:-16px;padding-right:8px;">
                                <?php
                                    echo '<h5><b>Durée:</b> '.$resultats['duree'].'</h5>';
                                    echo '<h5><b>Expérience requise:</b> '.$resultats['experience'].'</h5>';
                                    echo '<h5><b>Salaire:</b> '.$resultats['salaire'].'</h5>';
                                    echo '<h5><b>Détails:</b> '.$resultats['details_job'].'</h5>';
                                ?>
                                </div>
                                <div style="padding-bottom: 6px;text-align:left;color:darkblue; display:flex; flex-direction:row; justify-content:space-between;">
                                    <?php
                                        if($svr == 0){
                                            echo '<b><li style="list-style-type:none;margin-right:12px;"><a href="traitement_suivi.php?idsuivi='.$d.'&svr=0">Suivre</a></li></b>';
                                        }
                                        if($pos == 0){     
                                            echo '<b><li style="list-style-type:none;margin-right:12px;"><a href="traitement_postuler.php?idpostuler='.$d.'&svr=0">Postuler</a></li></b>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            $reqs->closeCursor();
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!--Contact Us Section-->
        <section id="contact" class="contact bg-mega fix">
            <div class="container">
                <div class="row">
                    <div class="main_contact roomy-100 text-white">
                        <div class="col-md-4">
                            <div class="rage_widget">
                                <div class="widget_head">
                                    <h3 class="text-white">À propos</h3>
                                    <div class="separator_small"></div>
                                </div>
                                <p>JoBrings est un site concu pour aider les entreprises et surtout les
                                    chercheurs d'emploi à accéder à un emploi dans leur domaine
                                    d'études. Si vous avez des questions, n'hésitez pas 👉
                                </p>
                                <p>
                                    Ecrivez-nous: <b style="color: black;">jobringscomp@gmail.com</b>
                                </p>

                                <div class="widget_socail m-top-30">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="fa fa-instagram"></i></a></li>    
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 sm-m-top-30">
                            <form action="traitement_message_finpage_accueil_chercheur.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group"> 
                                            <input id="nommessage" name="nommessage" type="text" placeholder="Nom" class="form-control" required="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">  
                                            <input id="emailmessage" name="emailmessage" type="text" placeholder="E-mail" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">  
                                            <input class="form-control" placeholder="Message" name="message" style="padding-bottom: 150px; padding-top: 20px" required>
                                        </div>
                                        <div class="form-group text-center">
                                            <input type="submit" value="ENVOYER MESSAGE" id="barre" class="btn btn-primary"></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--button scroll-->
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <footer id="footer" class="footer bg-black">
            <div class="container">
                <div class="row">
                    <div class="main_footer text-center p-top-40 p-bottom-30">
                        <p class="wow fadeInRight" data-wow-duration="1s">
                            Made with 
                            <i class="fa fa-heart"></i>
                            2023, All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!--includes js-->
    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
<style>
    @media screen and (min-width: 800px) {
        .col-md-4{
            margin-left:35px;
            margin-right:-20px;
            width:1100px;
        }
    }
    
    @media screen and (max-width: 300px) {
        .col-md-4{
            margin-left:35px;
            margin-right:-20px;
            width:500px;
        }
    }
</style>
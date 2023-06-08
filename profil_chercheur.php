<?php
    session_start();
    $_SESSION['nn'] = $_SESSION['nom'];
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
        <br/>

        <!--Jobs Section-->
        <section id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <div class="main_blog text-center roomy-100">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="head_title text-center">
                                <br/><br/>
                                <h2>PROFIL</h2>
                                <div class="separator_auto"></div>
                                <p><?php echo $_SESSION['nom']; ?> - Chercheur d'emploi</p>
                            </div>
                        </div>

                        <?php
                            $request = $bdd ->query('SELECT * FROM chercheur WHERE email="'.$_SESSION['email'].'"');
                            while($rstats=$request->fetch()){
                        ?>
                        <div class="col-md-4">
                            <div class="blog_item m-top-20" style="border:1px solid lightgrey;box-shadow:3px 3px 3px 3px;padding-top:5px;padding-bottom:0px;padding-left:15px;background-color:white;">
                                <div class="blog_item_img" style="text-align: left;">
                                <?php
                                    echo '<h5><b>Nom:</b> '.$rstats['nom'].'</h5>';
                                    echo '<h5><b>Prénom:</b> '.$rstats['prenom'].'</h5>';
                                ?>
                                </div>
                                <div class="blog_text roomy-40" style="text-align: left; background-color:lightgrey;padding-left:15px;margin-bottom:6px;margin-left:-16px;padding-right:8px;">
                                <?php
                                    echo '<h5><b>Email:</b> '.$rstats['email'].'</h5>';
                                    echo '<h5><b>Age:</b> '.$rstats['age'].'</h5>';
                                    if($rstats['sexe'] == 'F'){echo '<h5><b>Sexe:</b> Féminin</h5>';}
                                    else{echo '<h5><b>Sexe:</b> Masculin</h5>';}
                                    
                                    if($rstats['situation'] == 'Celibataire'){echo '<h5><b>Situation:</b> Célibataire</h5>';}
                                    elseif($rstats['situation'] == 'Celibatairenfants'){echo '<h5><b>Situation:</b> Célibataire avec enfant(s)</h5>';}
                                    elseif($rstats['situation'] == 'Marie'){echo '<h5><b>Situation:</b> Marié(e)</h5>';}
                                    else{echo '<h5><b>Situation:</b> Marié(e) avec enfant(s)</h5>';}
                                    echo '<h5><b>Téléphone:</b> '.$rstats['telephone'].'</h5>';
                                    echo '<h5 style="font-size:15px;"><b><a href="cvs/cv_'.$_SESSION['nom'].'.pdf" style="color:orangered;">Visualiser mon cv</a></h5>';
                                ?>
                                </div>
                                <div style="padding-bottom: 6px;text-align:left;color:darkblue;">
                                <b><li style="list-style-type:none;"><a href="informations_chercheur_modifier.php?em=<?php echo $_SESSION['email']; ?>" style="color:orangered;">Modifier ses informations et son cv</a></li></b>
                                </div>
                            </div>
                        </div>
                        <?php   
                            }
                            $request->closeCursor();
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
            margin-left:335px;
            margin-right:-20px;
            width:500px;
        }
    }
    
    @media screen and (max-width: 300px) {
        .col-md-4{
            margin-left:35px;
            margin-right:-20px;
            width:500px;
        }
    }
    h5{
        margin-left: 10px;
    }
</style>
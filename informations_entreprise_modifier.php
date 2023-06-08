<?php
    session_start();
    require_once('bdd.php');
    $email = htmlspecialchars($_GET['em']);
?>
<head>
	<title>Enter your informations</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>
                <?php
                $req = $bdd->query('SELECT * FROM entreprise WHERE email = "'.$email.'"');
                while($res=$req->fetch()){
                ?>
				<form class="login100-form validate-form" action="traitement_modif_informations_entreprise.php?em=<?php echo $email; ?>" method="post" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        <img src="images/logo_blanc.png" width="180px" height="60px"/>
				    </span>
					<span class="login100-form-title">
						Member Informations
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter your company name">
						<input class="input100" type="text" name="nom" placeholder="Company name" value="<?php echo $res['nom']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Select your company domain">
						<select class="input100" name="categorie">
                        <option value="none" selected disabled hidden>Select a category</option>
                        <?php
                            if($res['categorie'] == 'ai'){echo '
                                <option value="ai" selected>Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_web'){echo '
                                <option value="ai" >Intelligence Artificielle</option>
                                <option value="dev_web" selected>Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_mobile'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile" selected>Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_logiciels'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels" selected>Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_web_mobile'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile" selected>Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_web_logiciels'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels" selected>Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_mobile_logiciels'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels" selected>Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_web_mobile_logiciels'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels" selected>Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'bigdata'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata" selected>Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'graphisme'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme" selected>Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_reseau'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_logiciels_embarques'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques" selected>Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'administration_bdd'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd" selected>Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'analyse_soc'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc" selected>Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'analyse_soc'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'analyse_soc'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'analyse_donnees'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees" selected>Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'design'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design" selected>Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_blockchain'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain" selected>Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'cybersecurite'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite" selected>Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'cloud'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud" selected>Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'telecommunications'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications" selected>Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce">Developpement e-Commerce</option>
                                ';}
                            else if($res['categorie'] == 'dev_ecommerce'){echo '
                                <option value="ai">Intelligence Artificielle</option>
                                <option value="dev_web">Developpement Web</option>
                                <option value="dev_mobile">Developpement mobile</option>
                                <option value="dev_logiciels">Developpement Lociciels</option>
                                <option value="dev_web_mobile">Developpement Web & Mobile</option>
                                <option value="dev_web_logiciels">Developpement Web & Logiciels</option>
                                <option value="dev_mobile_logiciels">Developpement Mobile & Logiciels</option>
                                <option value="dev_web_mobile_logiciels">Developpement Web, Mobile & Logiciels</option>
                                <option value="bigdata">Big Data</option>
                                <option value="graphisme">Graphisme</option>
                                <option value="dev_reseau">Developpement Réseau</option>
                                <option value="dev_logiciels_embarques">Logiciels Embarqués</option>
                                <option value="administration_bdd">Administration base de données</option>
                                <option value="analyse_soc">Analyse SOC</option>
                                <option value="analyse_donnees">Analyse de données</option>
                                <option value="design">Design UI-UX</option>
                                <option value="dev_blockchain">Developpement Blockchain</option>
                                <option value="cybersecurite">Expertise en CyberSécurité</option>
                                <option value="cloud">Ingénieurie Cloud</option>
                                <option value="telecommunications">Ingénieurie Télécommunication</option>
                                <option value="dev_ecommerce" selected>Developpement e-Commerce</option>
                                ';}
                            ?>
                        </select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Company location (town)">
						<input class="input100" type="text" name="ville" placeholder="Location (town)" value="<?php echo $res['ville']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-home" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Company's web site">
						<input class="input100" type="text" name="site" placeholder="Web Site" value="<?php echo $res['site']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-flag" aria-hidden="true"></i>
						</span>
					</div>

                    <?php } ?>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Enregistrer
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="src/js/main1.js"></script>
</body>
</html>

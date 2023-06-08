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
                $req = $bdd->query('SELECT * FROM chercheur WHERE email = "'.$email.'"');
                while($res=$req->fetch()){
                ?>
				<form class="login100-form validate-form" action="traitement_modif_informations_chercheur.php?em=<?php echo $email; ?>" method="post" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        <img src="images/logo_blanc.png" width="180px" height="60px"/>
				    </span>
					<span class="login100-form-title">
						Member Informations
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter your surname">
						<input class="input100" type="text" name="nom" placeholder="Surname" value="<?php echo $res['nom']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter your forename">
						<input class="input100" type="text" name="prenom" placeholder="Forename" value="<?php echo $res['prenom']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter your age">
						<input class="input100" type="number" name="age" placeholder="Age" value="<?php echo $res['age']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Select a gender">
						<select class="input100" name="sexe">
							<option value="none" selected disabled hidden>
                            <?php 
                            if($res['sexe'] == 'M'){echo '<option value="M" selected>Masculin</option><option value="F">Féminin</option>';}
                            elseif($res['sexe'] == 'F'){echo '<option value="F" selected>Féminin</option><option value="M">Masculin</option>';}
                            ?></option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Select a situation">
						<select class="input100" name="situation">
							<option value="none" selected disabled hidden>
                            <?php
                            if($res['situation'] == 'Celibataire'){echo '<option value="Celibataire" selected>Célibataire</option><option value="Celibatairenfants">Célibataire avec enfant(s)</option><option value="Marie">Marié</option><option value="Marienfants">Marié avec enfants(s)</option>';}
                            elseif($res['situation'] == 'Celibatairenfants'){echo '<option value="Celibataire">Célibataire</option><option value="Celibatairenfants" selected>Célibataire avec enfant(s)</option><option value="Marie">Marié</option><option value="Marienfants">Marié avec enfants(s)</option>';}
                            elseif($res['situation'] == 'Marie'){echo '<option value="Celibataire">Célibataire</option><option value="Celibatairenfants">Célibataire avec enfant(s)</option><option value="Marie" selected>Marié</option><option value="Marienfants">Marié avec enfants(s)</option>';}
                            else{echo '<option value="Celibataire">Célibataire</option><option value="Celibatairenfants">Célibataire avec enfant(s)</option><option value="Marie">Marié</option><option value="Marienfants" selected>Marié avec enfants(s)</option>';}
                            ?></option>
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter your phone number">
						<input class="input100" type="text" name="telephone" placeholder="Phone" value="<?php echo $res['telephone']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100" data-validate = "Upload your cv.pdf">
						<input class="input100" type="file" name="cv" style="padding-top: 10px; padding-bottom: 30px;">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    <center style="font-size: 10px;">Choisissez un autre fichier pour remplacer le cv existant</center><br/>
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

<?php
    session_start();
    require_once('bdd.php');
?>
<head>
	<title>Publier un Job</title>
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

				<form class="login100-form validate-form" action="traitement_publier.php?em=<?php echo $_SESSION['email']; ?>" method="post" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        <img src="images/logo_blanc.png" width="180px" height="60px"/>
				    </span>
					<span class="login100-form-title">
						Informations du Poste
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Intitulé publication">
						<input class="input100" type="text" name="nompublication" placeholder="Intitulé publication">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Durée">
						<input class="input100" type="text" name="duree" placeholder="Durée">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Expérience requise">
						<input class="input100" type="text" name="expe" placeholder="Expérience">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Salaire">
						<input class="input100" type="text" name="salaire" placeholder="Salaire">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Détails Job">
						<textarea class="input100" type="text" name="details_job" placeholder="Détails Job" style="padding-top: 14px;"></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Mot clé">
						<input class="input100" type="text" name="motcle" placeholder="Mot clé">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
                    <center style="font-size: 12px;">Par exemple 'front-end', 'design', 'python'...</center><br/>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Enregistrer
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="jobs_entreprise.php">
							Retourner à l'accueil
							<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						</a>
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

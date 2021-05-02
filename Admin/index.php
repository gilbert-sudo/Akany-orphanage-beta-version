<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion et Deconnexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<!-- <?php include 'php/connexion.php'; 
			include 'php/login.php'; ?> -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt align="center">
					<img src="images/logo.png" alt="IMG">

				</div>

				<form class="login100-form validate-form" method="POST" action="">
				<span class="login100-form-title">
						ATA Admin
					</span>

					<div class="wrap-input100 validate-input" data-validate = "nom d'utilisateur obligatoire" align="center">
						<input class="input100" type="text" name="usernameadmin" placeholder="Nom d'utilisateur">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Veuillez entrer votre mot de passe" align="center">
						<input class="input100 passadmin" type="password" name="passadmin" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span class="symbol-input100">
						<a href="#" class="fa fa-eye-slash symbolviewpass" aria-hidden="true"></a>
					
						</span>
					</div>
					<div class="symboleye">
							<a href="#" class="fa fa-square-o passview" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Afficher le mots de passe</a>
							<script> 
							var passview = document.querySelector(".passview"); 
							var passadmin = document.querySelector(".passadmin");
							var symbolviewpass = document.querySelector(".symbolviewpass");  
							passview.addEventListener("click", function(e) {
								e.preventDefault();
								
								if (passadmin.type == "password") {
								passview.className = "fa fa-check-square-o passview"
								passview.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;Cacher le mots de passe"
								passadmin.type = "text"
								symbolviewpass.className = "fa fa-eye symbolviewpass"
								}
								else {
								passview.className = "fa fa-square-o passview"
								passview.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;Afficher le mots de passe"
								passadmin.type = "password"
								symbolviewpass.className = "fa fa-eye-slash symbolviewpass"
								}
								
							});

							</script>
                   </div>
					
					<div class="container-login100-form-btn" align="center">
						<button class="login100-form-btn" name="connect">
							Se connecter
						</button>
						<?php include 'php/login.php'; 
						include 'php/error.php';

						?>
					
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Oublié
						</span>
						<a class="txt2" href="#">
							Nom d'utilisateur / Mot de passe?
						</a>
					</div>
					<br>
					<div align="center"><!-- <?php include 'php/error.php'; ?> --></div>
					 

					<div class="text-center p-t-50">
						<a class="txt2" href="../index.php">
							Aller à la page d'accueil
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>


	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body>
</html>
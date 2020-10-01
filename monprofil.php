<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Mon Profil</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="ressources/css/default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/fonts.css" rel="stylesheet" type="text/css" media="all" />
	<link href="ressources/css/monprofil.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<?php include "ressources/include/nav.txt";    ?>
	<div id="wrapper2">
		<div id="welcome" class="container">
			<div class="title">
				<h1>Mon Profil</h1>
			</div>
		</div>
	</div>
	<div id="wrapper3">
		<div class="register">
			<div class="row">
				<div class="col-md-3 register-left">
					<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
					<h3>Pour toute demande de changement d'informations, hormis le mot de passe et le numéro de teléphone <br>
						Merci de vous adresser à votre professeur principal.</h3>
					<input type="submit" name="" value="Changer mon mot de passe" /><br />
				</div>
				<div class="col-md-9 register-right">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<h3 class="register-heading">Mes informations</h3>
							<div class="row register-form">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" value=<?php echo "$prenom"; ?> readonly="true" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value=<?php echo "$nom"; ?> readonly="true" />
									</div>
									<div class="form-group">
										<input type="password" class="form-control" value="***********" readonly="true" />
									</div>
									<div class="form-group">
										<div class="maxl">
											<label class="radio inline">
												<input type="radio" name="gender" value="home" checked>
												<span> Homme </span>
											</label>
											<label class="radio inline">
												<input type="radio" name="gender" value="femme">
												<span> Femme </span>
											</label>
											<label class="radio inline">
												<input type="radio" name="gender" value="autre">
												<span> Autre </span>
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" value="<?php echo "$mail"; ?>" readonly="true" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo "$date_naiss"; ?>" readonly="true"/>
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo $adresse; ?>" readonly="true" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo "$dep"; ?>" readonly="true" />
									</div>
									<div class="form-group">
										<input type="text" class="form-control" value="<?php echo "$ville"; ?>" readonly="true" />
									</div>
									<input type="submit" class="btnRegister" value="Enregistrer les modifications" />
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<div style="background:#1B1B1B; padding-top:5px;"><?php include 'ressources/include/copyright.txt'; ?></div>

	<script src="ressources/js/Test.js"></script>
	<script src="ressources/js/dropdown.js"></script>
</body>

</html>

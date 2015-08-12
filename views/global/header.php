<?php
	require_once 'modeles/global/member.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atelier 801 Experiments</title>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/global/search.js"></script>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/global/connexion.js"></script>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/global/deconnexion.js"></script>

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans" />
	<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/ressources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/ressources/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/ressources/css/style.css">
	<link rel="shortcut icon" href="favicon.ico?v=2" />
</head>
<body>
	<div class="container">
		<?php
			if (!isset($_SESSION['member']))
			{
				?>
					<div class="modal fade" id="modal-formulaire">
						<div class="modal-dialog">
							<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Formulaire de connexion</h4>
									</div>
									<div class="modal-body">
										<div id="display-error"></div>
										<form id="form-connexion">
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3">
													<div class="form-group">
														<input type="text" id="input-login" class="form-control" placeholder="Pseudo" required/>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-lg-offset-3">
													<div class="form-group">
														<input type="password" id="input-password" class="form-control" placeholder="Mot de passe" required/>
													</div>
												</div>
											</div>
										</form>
									</div>
									<div class="modal-footer">
										<button class="btn btn-primary" id="button-inscription">Inscription</button>
										<button class="btn btn-primary" id="button-connexion">Connexion</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php
			}
		?>
		<div id="header" class="row text-center">
			<object data="/Atelier%20801%20Experiments/ressources/img/logo/logo_dark.svg" type="image/svg+xml" height="100"></object>
			<h1><a href="/Atelier%20801%20Experiments/">Atelier 801 Experiments</a></h1>
			<h4>We make science, not favoritism</h4>
		</div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			 		<ul class="nav navbar-nav">
			 			<li class="dropdown">
			 				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Classement <span class="caret"></span></a>
			 				<ul class="dropdown-menu" role="menu">
			 					<li><a href="#">Atelier 801</a></li>
			 					<li class="divider"></li>
			 					<li><a href="/Atelier%20801%20Experiments/leaderboard/Transformice/">Transformice</a></li>
			 					<li><a href="/Atelier%20801%20Experiments/leaderboard/Bouboum/">Bouboum</a></li>
			 					<li><a href="/Atelier%20801%20Experiments/leaderboard/Fortoresse/">Fortoresse</a></li>
			 					<li><a href="/Atelier%20801%20Experiments/leaderboard/Nekodancer/">Nekodancer</a></li>
			 				</ul>
			 			</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Experiments <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/Atelier%20801%20Experiments/lua">Modules Lua</a></li>
								<li><a href="#">Modules 801</a></li>
								<li><a href="/Atelier%20801%20Experiments/soundboard">Soundboard</a></li>
								<li><a href="https://github.com/Mcfloy/Atelier-801-Standalone/releases" target="_blank">Standalone</a></li>
								<li><a href="/Atelier%20801%20Experiments/smileys">Atelier 801 Smileys</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Rechercher <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<form class="navbar-form" role="search" id="formSearch">
									<li>
										<div class="form-group">
											<input id="player" type="text" class="form-control" placeholder="Joueur">
										</div>
										
									</li>
									<br>
									<li>
										<div class="form-group">
											<input id="tribe" type="text" class="form-control" placeholder="Tribu">
										</div>
									</li>
									<li class="divider"></li>
									<li>
										<button type="submit" class="btn btn-block btn-primary">Rechercher</button>
									</li>
								</form>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php
							if (!isset($_SESSION['member'])) {
								echo '<li><a href="#" data-toggle="modal" data-target="#modal-formulaire"><span class="fa fa-sign-in"></span> Connexion</a></li>';
							}
							else {
								?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['member']->getLogin(); ?> <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="/Atelier%20801%20Experiments/player/<?php echo $_SESSION['member']->getLogin();?>/"><i class="fa fa-user"></i> Mon profil</a></li>
										<li><a href="#" id="deconnexion"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
									</ul>
								</li>
								<?php
							}
						?>
						
					</ul>
				</div>
			</div>
		</nav>
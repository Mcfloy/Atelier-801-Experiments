<?php
	require_once 'modeles/global/member.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Atelier 801 Experiments</title>
	<script type="text/javascript" src="/resources/js/jquery.min.js"></script>
	<script type="text/javascript" src="/resources/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/resources/js/global/search.js"></script>
	<script type="text/javascript" src="/resources/js/global/connexion.js"></script>
	<script type="text/javascript" src="/resources/js/global/deconnexion.js"></script>

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT+Sans" />
	<link rel="stylesheet" type="text/css" href="/resources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/resources/css/style.css">
	<link rel="shortcut icon" href="favicon.ico?v=2" />

	<meta charset="utf-8"/>
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
			<object data="/resources/img/logo/logo_dark.svg" type="image/svg+xml" height="100"></object>
			<h1><a href="/">Atelier 801 Experiments</a></h1>
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
			 					<li><a href="/leaderboard/Transformice">Transformice</a></li>
			 					<li><a href="/leaderboard/Bouboum">Bouboum</a></li>
			 					<li><a href="/leaderboard/Fortoresse">Fortoresse</a></li>
			 					<li><a href="/leaderboard/Nekodancer">Nekodancer</a></li>
			 				</ul>
			 			</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Experiments <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/editor"><i class="material-icons md-18">code</i> Editeur de code</a></li>
								<li><a href="/modules-lua"><i class="material-icons md-18">apps</i> Modules Lua</a></li>
								<li><a href="/soundboard"><i class="material-icons md-18">music_note</i> Soundboard</a></li>
								<li><a href="/online"><i class="material-icons md-18">public</i> Qui est en ligne ?</a></li>
								<li><a href="https://github.com/Mcfloy/Atelier-801-Standalone/releases" target="_blank"><i class="material-icons md-18">laptop</i> Standalone</a></li>
								<li><a href="/smileys"><i class="material-icons md-18">insert_emoticon</i> Atelier 801 Smileys</a></li>
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
										<button type="submit" class="btn btn-block btn-primary">Rechercher <i class="pull-right material-icons md-18 md-light">search</i></button>
									</li>
								</form>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<?php
							if (!isset($_SESSION['member'])) {
								echo '<li><a href="#" data-toggle="modal" data-target="#modal-formulaire"><i class="material-icons md-18">power_settings_new</i> Connexion</a></li>';
							}
							else {
								?>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo ucfirst($_SESSION['member']->getLogin()); ?> <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="/player/<?php echo $_SESSION['member']->getLogin();?>/"><i class="material-icons md-18">account_box</i> Mon profil</a></li>
										<li><a href="#" id="deconnexion"><i class="material-icons md-18">exit_to_app</i> Déconnexion</a></li>
									</ul>
								</li>
								<?php
							}
						?>
						
					</ul>
				</div>
			</div>
		</nav>
<!DOCTYPE html>
<html>
<head>
	<title>Atelier 801 Experiments</title>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/bootstrap.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/ressources/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/ressources/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/Atelier%20801%20Experiments/ressources/css/style.css">
	<link href="favicon.ico?v=2" rel="shortcut icon" />

</head>
<body>
	<div class="container">
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
			 					<li><a href="/Atelier%20801%20Experiments/leaderboard/">Atelier 801</a></li>
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
								
								<li><a href="#">Modules Lua</a></li>
								<li><a href="#">Modules 801</a></li>
								<li><a href="/Atelier%20801%20Experiments/soundboard">Soundboard</a></li>
								<li><a href="https://github.com/Mcfloy/Atelier-801-Standalone/releases" target="_blank">Standalone</a>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chercher <span class="caret"></span></a>
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
						<li><a href="#">Connexion</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<script type="text/javascript" src="/Atelier%20801%20Experiments/ressources/js/global/search.js"></script>
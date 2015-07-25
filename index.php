<?php
	require_once __DIR__ . "/modeles/global/AltoRouter.php";

	$router = new AltoRouter();
	$router->setBasePath('/Atelier%20801%20Experiments/');

	$router->map('GET', '', function() {
		require_once __DIR__ . '/controllers/index/index.php';
	}, 'index');

	$router->map('GET', 'leaderboard/[a:game]/', function($game) {
		require_once __DIR__ . '/controllers/leaderboard/leaderboard.php';
	});

	$router->map('GET', 'player/[a:player]/', function($player) {
		require_once __DIR__ . '/controllers/player/player.php';
	});

	$router->map('GET', 'tribe/[i:tribe]/', function($tribe) {
		require_once __DIR__ . '/controllers/tribe/tribe.php';
	});


	$match = $router->match();

	if ($match && is_callable($match['target'])) {
		call_user_func_array($match['target'], $match['params']); 
	}
	else {
		$_GET['id'] = 404;
		require_once __DIR__ . '/controllers/global/error.php';
	}
?>
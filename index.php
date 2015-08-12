<?php
	require_once __DIR__ . "/modeles/global/AltoRouter.php";

	$router = new AltoRouter();
	$router->setBasePath('/Atelier%20801%20Experiments/');

	$router->map('GET', '', function() {
		require_once __DIR__ . '/controllers/index/index.php';
	});

	$router->map('GET', 'leaderboard/[a:game]/', function($game) {
		require_once __DIR__ . '/controllers/leaderboard/leaderboard.php';
	});

	$router->map('GET', 'search/p/[a:playerName]/', function($playerName) {
		require_once __DIR__ . '/controllers/search/player.php';
	});

	$router->map('GET', 'search/t/[*:tribeName]/', function($tribeName) {
		require_once __DIR__ . '/controllers/search/tribe.php';
	});

	$router->map('GET', 'player/[a:playerName]/', function($playerName) {
		require_once __DIR__ . '/controllers/player/player.php';
	});

	$router->map('GET', 'player/[a:playerName]/lua', function($playerName) {
		require_once __DIR__ . '/controllers/player/lua.php';
	});

	$router->map('GET', 'tribe/[*:tribeName]/', function($tribeName) {
		require_once __DIR__ . '/controllers/tribe/tribe.php';
	});

	$router->map('GET', 'soundboard', function() {
		require_once __DIR__ . '/controllers/soundboard/soundboard.php';
	});

	$router->map('GET', 'smileys', function() {
		require_once __DIR__ . '/controllers/smileys/smileys.php';
	});

	$router->map('GET', 'lua', function() {
		require_once __DIR__ . '/controllers/lua/list.php';
	});

	$router->map('GET', 'shop', function() {
		require_once __DIR__ . '/controllers/shop/shop.php';
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
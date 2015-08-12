<?php
	require_once 'views/global/header.php';

	require_once 'modeles/leaderboard/leaderboard.php';

	$authorized_games = ["atelier801", "transformice", "bouboum", "fortoresse", "nekodancer"];

	if (in_array(strtolower($game), $authorized_games))
	{
		require_once 'views/leaderboard/leaderboard.php';
	}
	else
	{
		$_GET['id'] = 404;
		require_once 'views/global/error.php';
	}

	require_once 'views/global/footer.php';
?>
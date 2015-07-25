<?php
	class leaderboard
	{
		function __construct__($game)
		{
			$allowed_game = ["Atelier 801", "Transformice", "Bouboum", "Fortoresse", "Nekodancer"];
			if (in_array($game, $allowed_game))
			{
				/*
				** require_once '../global/bdd.php';
				** $req = $bdd->query('SELECT * FROM leaderboard_transformice ORDER BY rank DESC LIMIT 10');
				** $fetch = $req->fetch();
				*/
			}
			else
			{
				return false;
			}
		}
	}
?>
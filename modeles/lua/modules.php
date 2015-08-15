<?php
	class luaModules
	{
		public function __construct()
		{
			require_once __DIR__ . "/../global/bdd.php";
			$req = $bdd->query('SELECT * FROM lua_scripts ORDER BY id DESC LIMIT 10');
			$fetch = $req->fetch();
			$req->closeCursor();
		}
	}
?>
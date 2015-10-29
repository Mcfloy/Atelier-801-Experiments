<?php
	class luaModules
	{
		private $results;

		public function __construct()
		{
			require_once __DIR__ . "/../global/bdd.php";
			$req = $bdd->query('SELECT lua_scripts.id, members.pseudo as author, lua_scripts.name, lua_scripts.description, lua_scripts.likes FROM lua_scripts INNER JOIN members WHERE lua_scripts.id_author = members.id ORDER BY id DESC LIMIT 10');
			$fetch = $req->fetchAll();
			$this->results = $fetch;
			$req->closeCursor();
		}

		public function getResults()
		{
			return $this->results;
		}
	}
?>
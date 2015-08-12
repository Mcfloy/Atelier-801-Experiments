<?php
	class Search
	{
		private $request;
		private $count;
		private $results;

		public function __construct($player)
		{
			require_once __DIR__ . "/../global/bdd.php";
			$req = $bdd->query("SELECT pseudo FROM members WHERE pseudo LIKE '" . $player . "%' ");
			
			$this->request = $player;
			$this->count = $req->rowCount();
			$this->results = $req->fetchAll();
			$req->closeCursor();
		}

		public function getCount()
		{
			return $this->count;
		}

		public function getResults()
		{
			return $this->results;
		}

		public function getRequest()
		{
			return $this->request;
		}
	}
?>
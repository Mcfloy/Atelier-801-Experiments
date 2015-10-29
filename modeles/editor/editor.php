<?php
	class editor
	{
		public function __construct()
		{
		}

		public function update($id, $editor)
		{
			require __DIR__ . "/../global/bdd.php";
			$req = $bdd->prepare('UPDATE members SET editor = :editor WHERE id = :id');
			$req->execute(array(
				'editor' => $editor,
				'id' => $id
			));
			return $req;
		}

		public function getCode($id)
		{
			require __DIR__ . "/../global/bdd.php";
			$req = $bdd->prepare('SELECT editor FROM members WHERE id = :id');
			$req->execute(array(
				'id' => $id
			));
			$fetch = $req->fetch();
			return $fetch['editor'];
		}
	}
?>
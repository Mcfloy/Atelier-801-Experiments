<?php
	class Member
	{
		private $initialized = false;
		private $id;
		private $login;
		private $password;

		public function __construct($login, $password)
		{
			require_once "bdd.php";
			$req = $bdd->prepare('SELECT * FROM members WHERE pseudo = :pseudo');
			$req->execute(array(
				'pseudo' => $login
			));
			$fetch = $req->fetch();

			if ($fetch != false)
			{
				$verify = password_verify($password, $fetch['password']);
				if ($verify !== false)
				{
					$this->id = $fetch['id'];
					$this->login = $login;
					$this->password = $password;
					$this->initialized = true;
				}
			}
		}

		public function initialized()
		{
			return $this->initialized;
		}

		public function getId()
		{
			return $this->login;
		}

		public function getLogin()
		{
			return $this->login;
		}
	}
?>
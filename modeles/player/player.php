<?php
	class Player
	{
		private $exist = false;
		private $pseudo;
		private $stats_atelier801;
		private $stats_transformice;
		private $stats_bouboum;
		private $stats_fortoresse;
		private $stats_nekodancer;

		// Main functions

		public function __construct($pseudo)
		{
			require_once __DIR__ . "/../global/bdd.php";
			$req = $bdd->prepare("SELECT * FROM members WHERE pseudo = :pseudo");
			$req->execute(array(
				"pseudo" => $pseudo
			));
			$fetch = $req->fetch();
			$req->closeCursor();

			if ($fetch != false)
			{
				$this->exist = true;
				$this->pseudo = $pseudo;
				$this->stats_atelier801 = json_decode($fetch['stats_atelier801']);
				$this->stats_transformice = json_decode($fetch['stats_transformice']);
				$this->stats_bouboum = json_decode($fetch['stats_bouboum']);
				$this->stats_fortoresse = json_decode($fetch['stats_fortoresse']);
				$this->stats_nekodancer = json_decode($fetch['stats_nekodancer']);
			}
		}

		public function exist()
		{
			return $this->exist;
		}

		public function getPseudo()
		{
			return $this->pseudo;
		}

		// Atelier 801 functions

		public function getIdA801()
		{
			return $this->stats_atelier801->id;
		}

		public function getAvatarURL()
		{
			$id = $this->getIdA801();
			return "http://avatars.atelier801.com/" . intval(substr($id, -4)) . "/" . $id . ".jpg";
		}

		public function getMessages()
		{
			return $this->stats_atelier801->messages;
		}

		public function getGender()
		{
			return $this->stats_atelier801->gender;
		}

		public function getRegisterDate()
		{
			return $this->stats_atelier801->registration;
		}

		public function getBirthdayDate()
		{
			return $this->stats_atelier801->birthday;
		}

		// Transformice functions

		public function getLevel()
		{
			return $this->stats_transformice->level;
		}

		public function getCurrentTitle()
		{
			return "&laquo;" . utf8_decode($this->stats_transformice->currentTitle) . "&raquo";
		}

		public function getTFMNormalSaves()
		{
			return number_format($this->stats_transformice->shaman->normalSaves, 0, '.', ' ');
		}

		public function getTFMHardSaves()
		{
			return number_format($this->stats_transformice->shaman->hardSaves, 0, '.', ' ');
		}

		public function getTFMDivineSaves()
		{
			return number_format($this->stats_transformice->shaman->divineSaves, 0, '.', ' ');
		}

		public function getTFMShamanCheeses()
		{
			return number_format($this->stats_transformice->shaman->cheeses, 0, '.', ' ');
		}

		public function getTFMFirsts()
		{
			return number_format($this->stats_transformice->mouse->firsts, 0, '.', ' ');
		}

		public function getTFMCheeses()
		{
			return number_format($this->stats_transformice->mouse->cheeses, 0, '.', ' ');
		}

		public function getTFMBootcamp()
		{
			return number_format($this->stats_transformice->mouse->bootcamp, 0, '.', ' ');
		}

		public function getTFMRounds()
		{
			return number_format($this->stats_transformice->mouse->rounds, 0, '.', ' ');
		}

		public function getTFMBadges()
		{
			return $this->stats_transformice->badges;
		}

		public function getTFMInventory()
		{
			return $this->stats_transformice->inventory;
		}

		public function getTFMRacingFirsts()
		{
			return $this->stats_transformice->racing->firsts;
		}

		public function getTFMRacingPodiums()
		{
			return $this->stats_transformice->racing->podiums;
		}

		public function getTFMRacingFinished()
		{
			return $this->stats_transformice->racing->finished;
		}

		public function getTFMRacingPlayed()
		{
			return $this->stats_transformice->racing->played;
		}

		public function getTFMSurvivorSurvived()
		{
			return $this->stats_transformice->survivor->survived;
		}

		public function getTFMSurvivorPlayed()
		{
			return $this->stats_transformice->survivor->played;
		}

		public function getTFMSurvivorKilled()
		{
			return $this->stats_transformice->survivor->killed;
		}

		public function getTFMSurvivorShaman()
		{
			return $this->stats_transformice->survivor->shaman;
		}

		// Bouboum functions

		public function getBouboumRank()
		{
			return number_format($this->stats_bouboum->rank, 0, '.', ' ');
		}

		public function getBouboumPlayed()
		{
			return number_format($this->stats_bouboum->roundsPlayed, 0, '.', ' ');
		}

		public function getBouboumKilled()
		{
			return number_format($this->stats_bouboum->killed, 0, '.', ' ');
		}

		public function getBouboumDead()
		{
			return number_format($this->stats_bouboum->dead, 0, '.', ' ');
		}

		public function getBouboumRoundsWon()
		{
			return number_format($this->stats_bouboum->roundsWon, 0, '.', ' ');
		}

		public function getBouboumLapsWon()
		{
			return number_format($this->stats_bouboum->lapsWon, 0, '.', ' ');
		}

		// Fortoresse functions

		public function getFortoPlayed()
		{
			return number_format($this->stats_fortoresse->roundsPlayed, 0, '.', ' ');;
		}

		public function getFortoWon()
		{
			return number_format($this->stats_fortoresse->roundsWon, 0, '.', ' ');;
		}

		public function getFortoKilled()
		{
			return number_format($this->stats_fortoresse->killed, 0, '.', ' ');;
		}

		public function getFortoDead()
		{
			return number_format($this->stats_fortoresse->dead, 0, '.', ' ');;
		}

		public function getFortoCaptured()
		{
			return number_format($this->stats_fortoresse->captured, 0, '.', ' ');;
		}

		public function getFortoAssassinated()
		{
			return number_format($this->stats_fortoresse->assassinated, 0, '.', ' ');;
		}

		public function getFortoHealed()
		{
			return number_format($this->stats_fortoresse->healed, 0, '.', ' ');;
		}

		public function getFortoDamages()
		{
			return number_format($this->stats_fortoresse->damages, 0, '.', ' ');;
		}

		// Nekodancer functions

		public function getNekoPlayed()
		{
			return number_format($this->stats_nekodancer->played, 0, '.', ' ');;
		}

		public function getNekoFinished()
		{
			return number_format($this->stats_nekodancer->finished, 0, '.', ' ');;
		}

		public function getNekoFinished98()
		{
			return number_format($this->stats_nekodancer->finished98, 0, '.', ' ');;
		}

		public function getNekoPodiums()
		{
			return number_format($this->stats_nekodancer->podiums, 0, '.', ' ');;
		}
	}
?>
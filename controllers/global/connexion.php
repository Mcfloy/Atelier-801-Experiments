<?php
	require_once '../../modeles/global/member.php';
	session_start();

	if (isset($_SESSION['member'])) {
		echo '{"Error" : "Vous êtes déjà connecté !"}';
	}
	else if (!isset($_POST['login']) || empty($_POST['login'])) {
		echo '{"Error" : "Le login n\'existe pas ou est vide."}';
	}
	else if (!isset($_POST['password']) || empty($_POST['password'])) {
		echo '{"Error" : "Le mot de passe n\'existe pas ou est vide."}';
	}
	else
	{
		$login = htmlspecialchars($_POST['login']);
		$password = htmlspecialchars($_POST['password']);
		$_SESSION['member'] = new Member($login, $password);
		if ($_SESSION['member']->initialized())
		{
			echo '{"Success": "Vous êtes maintenant connecté."}';
		}
		else
		{
			unset($_SESSION['member']);
			echo '{"Error": "Le pseudo et/ou le mot de passe sont incorrects."}';			
		}
	}
?>
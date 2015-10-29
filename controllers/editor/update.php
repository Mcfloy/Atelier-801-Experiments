<?php

	require_once 'modeles/global/member.php';
	session_start();

	if (isset($_SESSION['member']))
	{
		require_once 'modeles/editor/editor.php';

		$editor = new editor();
		if ($editor->update($_SESSION['member']->getId(), json_encode($_POST['code'])))
			echo '{"Success" : "Code saved"}';
		else
			echo '{"Error" : "Couldn\'t save this"}';
	}
	else
	{
		echo '{"Error" : "Vous n\'êtes pas connecté !"}';
	}
?>
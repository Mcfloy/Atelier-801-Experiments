<?php
	require_once 'views/global/header.php';

	require_once 'modeles/editor/editor.php';

	$editor = new editor();
	if (isset($_SESSION['member']))
	{
		$code = $editor->getCode($_SESSION['member']->getId());
	}
	else
	{
		$code = "";
	}

	require_once 'views/editor/editor.php';

	require_once 'views/global/footer.php';
?>
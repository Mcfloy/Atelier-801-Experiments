<?php
	require_once 'views/global/header.php';

	require_once 'modeles/lua/code.php';

	$luaCode = new luaCode(intval($id));

	if ($luaCode->getId() != -1)
	{
		require_once 'views/lua/code.php';
	}
	else
	{
		$error_id = 404;
		require_once 'views/lua/error.php';
	}

	require_once 'views/global/footer.php';
?>
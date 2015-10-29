<?php
	require_once 'views/global/header.php';

	require_once 'modeles/lua/modules.php';

	$luaModules = new luaModules();

	require_once 'views/lua/modules.php';

	require_once 'views/global/footer.php';
?>
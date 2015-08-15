<?php
	require_once 'views/global/header.php';

	require_once 'modeles/lua/code.php';

	$luaCode = new luaCode($id);

	require_once 'views/lua/code.php';

	require_once 'views/global/footer.php';
?>
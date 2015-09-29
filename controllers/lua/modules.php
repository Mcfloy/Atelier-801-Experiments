<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'views/global/header.php';

require_once 'modeles/lua/modules.php';

if (!isset($page))
  $page = 1;
$luaModules = new luaModules($page);

require_once 'views/lua/modules.php';

require_once 'views/global/footer.php';
?>
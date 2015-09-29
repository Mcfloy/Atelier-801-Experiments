<?php
require_once 'views/global/header.php';

require_once 'modeles/player/lua.php';

$playerName = ucfirst(strtolower($playerName));
$luaHistoric = new luaHistoric($playerName);

if ($luaHistoric->exist())
{
  require_once 'views/player/lua.php';
}
else
{
  require_once 'views/global/header.php';
  require_once 'views/player/error.php';
}

require_once 'views/global/footer.php';
?>
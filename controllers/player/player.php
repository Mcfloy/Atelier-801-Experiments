<?php
require_once 'views/global/header.php';

require_once 'modeles/player/player.php';

$playerName = ucfirst(strtolower($playerName));
$player = new Player($playerName);

if ($player->exist())
{
  require_once 'views/player/player.php';
}
else
{
  require_once 'views/global/header.php';
  require_once 'views/player/error.php';
}

require_once 'views/global/footer.php';
?>
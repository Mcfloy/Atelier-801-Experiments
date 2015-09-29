<?php

require_once 'modeles/search/player.php';

$search = new Search(htmlspecialchars($playerName));

if ($search->getCount() < 1)
{
  $type = "player";
  require_once 'views/global/header.php';
  require_once 'views/search/error.php';
}
else if ($search->getCount() == 1)
{
  $player = $search->getResults()[0]['pseudo'];
  header('location: /Atelier%20801%20Experiments/player/' . $player . '/');
}
else if ($search->getCount() > 1)
{
  require_once 'views/global/header.php';
  require_once 'views/search/player.php';
}

require_once 'views/global/footer.php';
?>
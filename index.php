<?php
require_once __DIR__ . "/modeles/global/AltoRouter.php";

$router = new AltoRouter();
$router->setBasePath('/');

$router->map('GET', '', function() {
  require_once __DIR__ . '/controllers/index/index.php';
});

$router->map('GET', 'leaderboard/[a:game]', function($game) {
  require_once __DIR__ . '/controllers/leaderboard/leaderboard.php';
});

$router->map('GET', 'search/p/[a:playerName]/', function($playerName) {
  require_once __DIR__ . '/controllers/search/player.php';
});

$router->map('GET', 'search/t/[*:tribeName]/', function($tribeName) {
  require_once __DIR__ . '/controllers/search/tribe.php';
});

$router->map('GET', 'player/[a:playerName]/', function($playerName) {
  require_once __DIR__ . '/controllers/player/player.php';
});

$router->map('GET', 'tribe/[*:tribeName]/', function($tribeName) {
  require_once __DIR__ . '/controllers/tribe/tribe.php';
});

$router->map('GET', 'online/[a:name]', function($name) {
  require_once __DIR__ . '/controllers/online/online.php';
});

$router->map('GET', 'online', function() {
  require_once __DIR__ . '/controllers/online/online.php';
});

$router->map('GET', 'soundboard', function() {
  require_once __DIR__ . '/controllers/soundboard/soundboard.php';
});

$router->map('GET', 'smileys', function() {
  require_once __DIR__ . '/controllers/smileys/smileys.php';
});

$router->map('GET', 'modules-lua/author/[*:author]/[i:page]', function($author, $page) {
  require_once __DIR__ . '/controllers/lua/author.php';
});

$router->map('GET', 'modules-lua/author/[*:author]', function($author) {
  require_once __DIR__ . '/controllers/lua/author.php';
});

$router->map('GET', 'modules-lua/[i:page]', function($page) {
  require_once __DIR__ . '/controllers/lua/modules.php';
});

$router->map('GET', 'modules-lua', function() {
  require_once __DIR__ . '/controllers/lua/modules.php';
});

$router->map('GET', 'code-lua/[i:id]/avis/[i:page]', function($id, $page) {
  require_once __DIR__ . '/controllers/lua/avis.php';
});

$router->map('GET', 'code-lua/[i:id]/avis', function($id) {
  require_once __DIR__ . '/controllers/lua/avis.php';
});

$router->map('GET', 'code-lua/[i:id]', function($id) {
  require_once __DIR__ . '/controllers/lua/code.php';
});

$router->map('GET', 'editor', function() {
  require_once __DIR__ . '/controllers/editor/editor.php';
});

$router->map('GET', 'shop', function() {
  require_once __DIR__ . '/controllers/shop/shop.php';
});

$router->map('GET', 'test', function() {
  require_once __DIR__ . '/controllers/test/test.php';
});

$match = $router->match();

if ($match && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
}
else {
  $_GET['id'] = 404;
  require_once __DIR__ . '/controllers/global/error.php';
}
?>
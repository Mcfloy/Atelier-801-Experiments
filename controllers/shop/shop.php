<?php
require_once 'views/global/header.php';

if (isset($_SESSION['member']))
{
  require_once 'views/shop/shop.php';
}
else
{
  require_once 'views/global/header.php';
  require_once 'views/global/error.php';
}

require_once 'views/global/footer.php';
?>
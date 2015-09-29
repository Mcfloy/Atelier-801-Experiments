<?php
class luaModules
{
  private $results;

  public function __construct($page)
  {
    require_once __DIR__ . "/../global/bdd.php";
    $req = $bdd->query('SELECT lua_scripts.*, members.pseudo AS author FROM lua_scripts INNER JOIN members WHERE lua_scripts.id_author = members.id ORDER BY lua_scripts.id DESC LIMIT 10');
    $this->results = $req->fetchAll();
    $req->closeCursor();
  }

  public function getModules()
  {
    return $this->results;
  }
}
?>
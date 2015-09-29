<?php
class luaHistoric
{
  private $exist = false;
  private $pseudo;
  private $list;

  public function __construct($pseudo)
  {
    require_once __DIR__ . "/../global/bdd.php";
    $req = $bdd->prepare("SELECT lua_scripts FROM members WHERE pseudo = :pseudo");
    $req->execute(array(
                    "pseudo" => $pseudo
                  ));
    $fetch = $req->fetch();
    $req->closeCursor();

    if ($fetch != false)
    {
      $this->exist = true;
      $this->pseudo = $pseudo;
      $this->list = json_decode($fetch['lua_scripts']);
    }
  }

  public function exist()
  {
    return $this->exist;
  }

  public function getPseudo()
  {
    return $this->pseudo;
  }
}
?>
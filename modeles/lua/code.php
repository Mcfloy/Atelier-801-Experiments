<?php
class luaCode
{
  private $id = -1;
  private $name;
  private $author;
  private $description;
  private $version;
  private $status;
  private $script;
  private $likes;
  private $date_creation;
  private $date_update;

  public function __construct($id)
  {
    require __DIR__ . "/../global/bdd.php";
    $req = $bdd->prepare('SELECT *, members.pseudo AS author FROM lua_scripts INNER JOIN members WHERE lua_scripts.id = :id AND lua_scripts.id_author = members.id');
    $req->execute(array(
                    'id' => $id
                  ));
    $fetch = $req->fetch();
    $req->closeCursor();

    if ($fetch != false)
    {
      $this->id = $id;
      $this->name = $fetch['name'];
      $this->author = $fetch['author'];
      $this->description = $fetch['description'];
      $this->version = $fetch['version'];
      $this->status = $fetch['status'];
      $this->script = $fetch['script'];
      $this->likes = $fetch['likes'];
      $this->date_creation = $fetch['date_creation'];
      $this->date_update = $fetch['date_update'];
    }
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return utf8_encode($this->name);
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function getDescription()
  {
    return utf8_encode($this->description);
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function getStatus()
  {
    if ($this->status == 1)
      return '<span class="label label-danger">Non fonctionnel</span>';
    else if ($this->status == 2)
      return '<span class="label label-warning">Instable</span>';
    else if ($this->status == 3)
      return '<span class="label label-success">Fonctionnel</span>';
  }

  public function getScript()
  {
    return htmlspecialchars(json_decode($this->script));
  }

  public function getLikes()
  {
    return $this->likes;
  }

  public function getCreationDate()
  {
    return $this->date_creation;
  }

  public function getUpdateDate()
  {
    return $this->date_update;
  }

  public function getTopComments()
  {
    require __DIR__ . "/../global/bdd.php";
    $req = $bdd->prepare('SELECT c.*, m.pseudo AS pseudo FROM lua_comments AS c INNER JOIN lua_scripts AS s ON c.id_script = s.id AND s.id = :id INNER JOIN members AS m ON c.id_pseudo = m.id');
    $req->execute(array(
                    'id' => $this->id
                  ));
    $fetchAll = $req->fetchAll();
    $req->closeCursor();

    return $fetchAll;
  }
}
?>
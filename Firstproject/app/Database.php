<?php
namespace App;

use \PDO;

class Database
{

  private $db_name;
  private $db_user;
  private $db_pass;
  private $db_host;
  private $pdo;

  public function __construct($db_name, $db_user = 'root', $db_pass = 'iamj', $db_host='localhost')
  {
    $this->$db_name = $db_name;
    $this->$db_user = $db_user;
    $this->$db_pass = $db_pass;
    $this->$db_host = $db_host;
  }

  private function getPDO()
  {
    if($this->pdo === null)
    {
      $pdo = new PDO('mysql:dbname=blog;host=localhost', 'root', 'iamj');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo = $pdo;
    }
    return $this->pdo;
  }

  public function query($stat, $class)
  {
    $req = $this->getPDO()->query($stat);
    $datas = $req->fetchAll(PDO::FETCH_CLASS, $class);
    return $datas;
  }

  public function prepare($stat, $attr, $class, $one=false)
  {
    $req = $this->getPDO()->prepare($stat);
    $req->execute($attr);
    $req->setFetchMode(PDO::FETCH_CLASS, $class);
    if($one)
    {
      $datas = $req->fetch();
    }
    else
    {
      $datas = $req->fetchAll();
    }
    return $datas;
  }
}

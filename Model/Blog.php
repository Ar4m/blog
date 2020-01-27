<?php

namespace BlogPhp\Model;

class Blog
{
  protected $oDb;

  public function __construct()
  {
    $this->oDb = new \BlogPhp\Engine\Db;
  }

  public function get($iOffset, $iLimit)
  {
    $oStmt = $this->oDb->prepare('SELECT * FROM Posts ORDER BY createdDate DESC LIMIT :offset, :limit');
    $oStmt->bindParam(':offset', $iOffset, \PDO::PARAM_INT);
    $oStmt->bindParam(':limit', $iLimit, \PDO::PARAM_INT);
    $oStmt->execute();
    return $oStmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function getById($iId)
  {
    $oStmt = $this->oDb->prepare('SELECT * FROM Posts WHERE id = :postId LIMIT 1');
    $oStmt->bindParam(':postId', $iId, \PDO::PARAM_INT);
    $oStmt->execute();
    return $oStmt->fetch(\PDO::FETCH_OBJ);
  }

  public function getAll()
  {
    $oStmt = $this->oDb->query('SELECT * FROM Posts ORDER BY createdDate DESC');
    return $oStmt->fetchAll(\PDO::FETCH_OBJ);
  }

  public function isAdmin($sEmail)
  {
    $oStmt = $this->oDb->prepare('SELECT * FROM Users WHERE email = :email LIMIT 1');
    $oStmt->bindValue(':email', $sEmail, \PDO::PARAM_STR);
    $oStmt->execute();
    return $oStmt->fetch(\PDO::FETCH_OBJ);
  }

  public function login($sEmail, $sPassword)
  {
    $a = [
      'email' 	  => $sEmail,
      'password' 	=> sha1($sPassword)
    ];
    $sSql = "SELECT * FROM Users WHERE email = :email AND password = :password";
    $oStmt = $this->oDb->prepare($sSql);
    $oStmt->execute($a);
    $exist = $oStmt->rowCount($sSql);

    return $exist;
  }

  public function pseudoTaken($pseudo)
  {
    $oStmt = $this->oDb->prepare('SELECT * FROM Users WHERE pseudo = :pseudo');
    $oStmt->bindParam(':pseudo', $pseudo, \PDO::PARAM_STR);
    $oStmt->execute();
    return $oStmt->rowCount();
  }

  public function emailTaken($sEmail)
  {
    $oStmt = $this->oDb->prepare('SELECT * FROM Users WHERE email = :email');
    $oStmt->bindParam(':email', $sEmail, \PDO::PARAM_STR);
    $oStmt->execute();
    return $oStmt->rowCount();
  }

  public function getUserId($userId)
  {
    $oStmt = $this->oDb->prepare('SELECT id FROM Users WHERE pseudo = :pseudo');
    $oStmt->bindParam(':pseudo', $userId, \PDO::PARAM_STR);
    $oStmt->execute();
    return $oStmt->fetch(\PDO::FETCH_OBJ);
  }


  public function addUser($aData)
  {
    $oStmt = $this->oDb->prepare('INSERT INTO Users (email, pseudo, password) VALUES(:email, :pseudo, :password)');
    return $oStmt->execute($aData);
  }


}

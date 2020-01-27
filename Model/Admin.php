<?php

namespace BlogPhp\Model;

class Admin extends Blog
{

  public function inTable($sTable)
  {
    $oStmt = $this->oDb->query("SELECT COUNT(id) FROM $sTable");
    return $oStmt->fetch();
  }


    public function update(array $aData)
    {
      $oStmt = $this->oDb->prepare('UPDATE Posts SET title = :title, body = :body WHERE id = :postId LIMIT 1');
      $oStmt->bindValue(':postId', $aData['post_id'], \PDO::PARAM_INT);
      $oStmt->bindValue(':title', $aData['title'], \PDO::PARAM_STR);
      $oStmt->bindValue(':body', $aData['body'], \PDO::PARAM_LOB);
      return $oStmt->execute();
    }


    public function delete($iId)
    {
      $oStmt = $this->oDb->prepare('DELETE FROM Posts WHERE id = :postId LIMIT 1');
      $oStmt->bindParam(':postId', $iId, \PDO::PARAM_INT);
      return $oStmt->execute();
    }


    public function add(array $aData)
    {
      $oStmt = $this->oDb->prepare('INSERT INTO Posts (title, body, createdDate) VALUES(:title, :body, :created_date)');
      $oStmt->bindValue(':title', $aData['title'], \PDO::PARAM_STR);
      $oStmt->bindValue(':body', $aData['body'], \PDO::PARAM_LOB);
      $oStmt->bindValue(':createdDate', $aData['created_date'], \PDO::PARAM_STR);
      return $oStmt->execute();
    }

}

<?php

class Likes 
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }
 /**
  * Gets rowcount for selected post for user.
  *
  * @param int selected post id and user id
  */
public function getPostLikes($postId,$uid){
   $sql=$this->pdo->prepare("SELECT * FROM Likes WHERE postId=? and userId=?");
    $sql->execute(array($postId, $uid));
return $sql->rowCount();


}

 /**
  * Inserts like for post from user.
  *
  * @param int selected post id and user id
  */
public function insertLikes($postId, $uid){

 $sql=$this->pdo->prepare("INSERT INTO Likes (postId, userId) VALUES(?, ?)");

 $sql->execute(array($postId, $uid));

}
 /**
  * Deletes like for post from user.
  *
  * @param int selected post id and user id
  */
public function deleteLikes($postId, $uid){
   $sql=$this->pdo->prepare("DELETE FROM Likes WHERE postId=? AND userId=?");
 $sql->execute(array($postId, $uid));


}

}
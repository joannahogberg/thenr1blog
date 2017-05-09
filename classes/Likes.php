<?php

class Likes 
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

public static function getPostLikes($postId,$uid){


    $options = [ 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];

$pdo = new PDO(
  "mysql:host=localhost:8889;dbname=thenr1blog;charset=utf8",
  "root",
  "root", $options);

   $sql=$pdo->prepare("SELECT * FROM Likes WHERE postId=? and userId=?");
    // var_dump($sql);
    $sql->execute(array($postId, $uid));
//  $sql=$pdo->prepare("SELECT * FROM Likes WHERE postId=? and userId=?");
//  $sql->execute(array($postId,$userId));

return $sql->rowCount();


}

public static function insertLikes($postId, $uid){
echo "like";
        $options = [ 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];

$pdo = new PDO(
  "mysql:host=localhost:8889;dbname=thenr1blog;charset=utf8",
  "root",
  "root", $options);

 $sql=$pdo->prepare("INSERT INTO Likes (postId, userId) VALUES(?, ?)");
 $sql->execute(array($postId, $uid));

}

public static function deleteLikes($postId, $uid){

    echo"hello";
        $options = [ 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];

$pdo = new PDO(
  "mysql:host=localhost:8889;dbname=thenr1blog;charset=utf8",
  "root",
  "root", $options);

  $sql=$pdo->prepare("DELETE FROM Likes WHERE postId=? AND userId=?");
  $sql->execute(array($postId, $uid));


}

}
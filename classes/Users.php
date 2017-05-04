<?php

class Users
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }


public function getUser($user){

//     $options = [ 
//   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//   PDO::ATTR_EMULATE_PREPARES   => false
// ];

// $pdo = new PDO(
//   "mysql:host=localhost:8889;dbname=thenr1blog;charset=utf8",
//   "root",
//   "root", $options);
  
    $st = $this->pdo->prepare("
    SELECT * FROM Users 
    WHERE username = :username");
     $st->execute([
    ":username" => $_POST['username']]);
    $user = $st->fetch();

    return $user;

}

public function newUser($userInfo){

$pass = password_hash($userInfo['password'], PASSWORD_DEFAULT);

// $options = [ 
//   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//   PDO::ATTR_EMULATE_PREPARES   => false
// ];

// $pdo = new PDO(
//   "mysql:host=localhost:8889;dbname=thenr1blog;charset=utf8",
//   "root",
//   "root", $options);


    $st = $this->pdo->prepare("
  INSERT INTO Users (userEmail, username, password, role)
  VALUES (:userEmail, :username, :password, :role)");
    $st->execute([
        ":userEmail" => $userInfo['email'],
  ":username" => $userInfo['username'],
  ":password" => $pass,
  ":role" => 'user'
]);



}



}
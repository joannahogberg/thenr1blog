<?php

class Users
{
  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

/**
  * Returns user with username of param
  * @param string username provided by register form input field
  */
public function getUser($user){

    $st = $this->pdo->prepare("
    SELECT * FROM Users 
    WHERE username = :username");
     $st->execute([
    ":username" => $_POST['username']]);
    $user = $st->fetch();

    return $user;

}

/**
  * Inserts and creates a new user
  *
  * @param Array userinfo provided by register form 
  */
public function newUser($userInfo){

$pass = password_hash($userInfo['password'], PASSWORD_DEFAULT);

    $st = $this->pdo->prepare("
  INSERT INTO Users (userEmail, username, password, role)
  VALUES (:userEmail, :username, :password, :role)");
    $st->execute([
        ":userEmail" => $userInfo['email'],
  ":username" => $userInfo['username'],
  ":password" => $pass,
  ":role" => 'viewer'
]);

}

}

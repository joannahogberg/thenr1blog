<?php


class Database
{

  public static function connect()
  {
      $options = [ 
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false
];
 try{
    $pdo = new PDO(
  "mysql:host=localhost:8889;dbname=thenr1blog;charset=utf8",
  "root",
  "root", $options);
  }	  
  catch(PDOException $e){
            $error = $e->getMessage();
		    echo $error;
        }
  return $pdo;
  }
}

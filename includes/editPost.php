<?php
session_start();

require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';


// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if ( isset($_POST['saveChanges'] ) ) {
  $pdo = Database::connect();
  $postEdited = new Blogpost($pdo);
 $postEdited -> storeFormValues($_POST);
 $postEdited -> update($pdo);
 
  } 
  else if(isset($_POST['newBlogpost'])){
      $pdo = Database::connect();
      $blogpost = new Blogpost($pdo);    
      $blogpost->insert($_POST['userId']);
  
}
}




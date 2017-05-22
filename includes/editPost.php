<?php
session_start();

require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';


// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

//Get action from ajax post() call
if ( isset($_POST['saveChanges'] ) ) {
 //Call editPost function
   editPost();
 
  } 
  else if(isset($_POST['newBlogpost'])){
    //Call newPost function
     newPost();
  
}
}

 /**
  * Function that calls class Blogpost function insert to create new post
  * 
  */

function newPost() {
   $pdo = Database::connect();
      $blogpost = new Blogpost($pdo);    
      $blogpost->insert($_POST['userId']);
}
 
  /**
  * Function that calls class Blogpost function update to update selected post
  * 
  */
function editPost() {
    $pdo = Database::connect();
  $postEdited = new Blogpost($pdo);
 $postEdited -> storeFormValues($_POST);
 $postEdited -> update($pdo);

  }



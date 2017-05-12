<?php
session_start();

// require '../errors.php';
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
 checkUserRole();

 
  } 
  else if (isset( $_POST['cancel'] ) ) {
  checkUserRole();
 
 
  }
  else if(isset($_POST['newBlogpost'])){
    var_dump($_POST);
      $pdo = Database::connect();
    $blogpost = new Blogpost($pdo);    
    $blogpost->insert($_POST['userId']);
    checkUserRole();
     
  
}
}

function checkUserRole(){	
	
	if($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'admin'){
  
  		$pdo = Database::connect();
   		$posts = new Blogpost($pdo);
  		$data = $posts->getPosts();
		include 'adminPage.php';
    exit;
 
	}elseif($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'user')
	{
		
		$pdo = Database::connect();
   		$posts = new Blogpost($pdo);
  		$data = $posts->getPosts();
		include 'userPage.php';
		exit;
	}
	
} 



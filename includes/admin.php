<?php
session_start();
require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';
require '../classes/Likes.php';

// get action from button onclick actions
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";


switch ( $action ) {
  case 'editPost':
    editPost();
    break;
  case 'listMyPosts':
    myPosts();
    break;
  case 'deletePost':
    deletePost();
    break;
  case 'readPost':
    readPost();
    break;
  default:
    checkUserRole();
}
 

  /**
  * Function to list all blogposts crated by $_SESSION['userId']
  * Sets header to All my posts
  */
function myPosts(){
    $pdo = Database::connect();
    $posts = new Blogpost($pdo);
    $data = $posts->getMyPosts($_SESSION['userId']);
    $header = "All my Posts";

 require("userPage.php" );

}

  /**
  * Function to insert selected post to edit into editForm
  *
  */
function editPost() {
    $id = $_GET['postId'];
    $pdo = Database::connect();
    $postToEdit = new Blogpost($pdo);
    $post = $postToEdit->getById($id);
  include 'editForm.php';

 

  }
 /**
  * Function to open selected post in new template selected post to edit into editForm
  * Get rowcount for likes for blogpost and user
  *
  */
  function readPost(){
  $id = $_GET['postId'];
  $pdo = Database::connect();
  $postToRead = new Blogpost($pdo);
  $post = $postToRead->getById($id);
  $getLikes= new Likes($pdo);
  $rowcount = $getLikes->getPostLikes($id,$_SESSION['userId']);
  include 'readPost.php';

  }
 
  /**
  * Function to delete selected post 
  * after post is deleted go to checkUserRole() function
  */
 
function deletePost() {
  $id = $_GET['postId'];
  $pdo = Database::connect();
  $post = new Blogpost($pdo);
  $delPost = $post->getById($id);
  $post->delete($delPost);
  checkUserRole();
}
  
 /**
  * Function that checks see if user is logged in and what role user has to direct user to right template
  * Sets header to All blogposts
  */

function checkUserRole(){	
	
	if($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'admin'){
  
  		$pdo = Database::connect();
   		$posts = new Blogpost($pdo);
  		$data = $posts->getPosts();
        $header = "All BlogPosts";
		include 'adminPage.php';
 
	}elseif($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'user')
	{
		
		$pdo = Database::connect();
   		$posts = new Blogpost($pdo);
  		$data = $posts->getPosts();
      $header = "All BlogPosts";
		include 'viewerPage.php';
		
	}
  else{
    include 'loginForm.php';
  }
	
} 

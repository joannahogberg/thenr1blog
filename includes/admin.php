<?php
session_start();

require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';
require '../classes/Likes.php';


$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'newBlogpost':
    newPost();
    break;
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
    test();
}
 
function myPosts(){
    $pdo = Database::connect();
    $posts = new Blogpost($pdo);
    $data = $posts->getMyPosts($_SESSION['userId']);
    $header = "All my Posts";

 require("userPage.php" );

}
 
function newPost() {
    $pdo = Database::connect();
    $blogpost = new Blogpost($pdo);    
    $blogpost->insert($_SESSION['userId']);
    checkUserRole();
}
 
 
function editPost() {
  
if ( isset( $_POST['saveChanges'] ) ) {
  $pdo = Database::connect();
  $postEdited = new Blogpost($pdo);
  $postEdited -> storeFormValues($_POST);
  $postEdited -> update($pdo);
  checkUserRole();
 
  } 
  else if ( isset( $_POST['cancel'] ) ) {
    checkUserRole();
 
  } 
  else {
    $id = $_GET['postId'];
    $pdo = Database::connect();
    $postToEdit = new Blogpost($pdo);
    $post = $postToEdit->getById($id);
  
  include 'editForm.php';
  }
 

  }

  function readPost(){

  $id = $_GET['postId'];
  $pdo = Database::connect();
  $postToRead = new Blogpost($pdo);
  $post = $postToRead->getById($id);
  $getLikes= new Likes($pdo);
  $rowcount = $getLikes->getPostLikes($id,$_SESSION['userId']);
  include 'readPost.php';

  }
 
 
function deletePost() {
  $id = $_GET['postId'];
  $pdo = Database::connect();
  $post = new Blogpost($pdo);
  $delPost = $post->getById($id);
  $post->delete($delPost);
  checkUserRole();
}
  


function checkUserRole(){	
	
	if($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'admin'){
  
  		$pdo = Database::connect();
   		$posts = new Blogpost($pdo);
  		$data = $posts->getPosts();
		include 'adminPage.php';
 
	}elseif($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'user')
	{
		
		$pdo = Database::connect();
   		$posts = new Blogpost($pdo);
  		$data = $posts->getPosts();
      $header = "All BlogPosts";
		include 'userPage.php';
		
	}
	
} 

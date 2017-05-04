<?php
session_start();

require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';


$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'newBlogpost':
    newPost();
    break;
  case 'editPost':
 
    editPost();
    break;
  case 'deletePost':
    deletePost();
    break;
  default:
    login();
}
 

 
function newPost() {
  $pdo = Database::connect();
    $blogpost = new Blogpost($pdo);    
    $blogpost->insert($_SESSION['userId']);
}
 
 
function editPost() {
  
if ( isset( $_POST['saveChanges'] ) ) {
  $pdo = Database::connect();
  $postEdited = new Blogpost($pdo);
 $postEdited -> storeFormValues($_POST);
 $postEdited -> update($pdo);
  
  } 
  else if ( isset( $_POST['cancel'] ) ) {
  include 'firstPage.php';
 
  } 
  else {
  $id = $_GET['postId'];
$pdo = Database::connect();

  $postToEdit = new Blogpost($pdo);
  $post = $postToEdit->getById($id);
  
  include 'editPost.php';
  }
 

  }
 
 
function deletePost() {
 $id = $_GET['postId'];
 $pdo = Database::connect();
$post = new Blogpost($pdo);
  $delPost = $post->getById($id);
  $post->delete($delPost);
}
  
?>
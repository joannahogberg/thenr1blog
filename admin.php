<?php
session_start();
require 'db.php';
require 'classes/Users.php';
require 'classes/Blogpost.php';

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
    $blogpost = new Blogpost();    
    $blogpost->insert($_SESSION['userId']);
}
 
 
function editPost() {

//  $results = array();
// $pagetitle  = "Edit Blogpost";
$pagetitle  = "Edit Blogpost";
  
if ( isset( $_POST['saveChanges'] ) ) {
  $postEdited = new Blogpost;
 $postEdited -> storeFormValues($_POST);
 $postEdited -> update();
  
  } 
  elseif ( isset( $_POST['cancel'] ) ) {
  include 'adminPage.php';
 
  } 
  else {
  $id = $_GET['postId'];

  $post = Blogpost::getById($id);
  
  include 'editPost.php';
  }
 

  }
 
 
function deletePost() {
 $id = $_GET['postId'];
$post = new Blogpost;
  $delPost = Blogpost::getById($id);
  $post->delete($delPost);
}
  
?>
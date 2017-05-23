<?php
session_start();
include '../error.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';

// get action from button onclick actions
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'login':
    login();
    break;
 case 'logout':
    logout();
    break;
  default:
   listBlogposts();
}



function login(){
    $pdo = Database::connect();
    $users = new Users($pdo);
    $user = $users->getUser($_POST['username']);

    if ( $user['role'] == 'admin') {
    // User has posted the login form: attempt to log the user in
    if ( $_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])) {
    //   Login successful: Create a session and redirect to the admin homepage
    $_SESSION['loggedIn'] = true;
    $_SESSION['userId'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['myPosts'] = true;
    setcookie('userId',$user['id'],time()+60*60*24*365);
    $_COOKIE['userId'] = $user['id'];
  
   adminPage();
  
    } else {
    //   Login failed: display an error message to the user
       $errorMessage= "Incorrect username or password <span class='glyphicon glyphicon-thumbs-down'></span> Please try again.";
      require 'loginForm.php';
   
    }

  } else if ($user['role'] == 'viewer'){
        if ( $_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])) {
    //   Login successful: Create a session and redirect to the viewer homepage
    $_SESSION['loggedIn'] = true;
    $_SESSION['myPosts'] = false;
    $_SESSION['userId'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    setcookie('userId',$user['id'],time()+60*60*24*365);
    $_COOKIE['userId'] = $user['id'];
     $_SESSION['role'] = $user['role'];
    viewPosts();
  
    } else {
    //   Login failed: display an error message to the user
      $errorMessage= "Incorrect username or password <span class='glyphicon glyphicon-thumbs-down'></span> Please try again.";
    require 'loginForm.php';
    }
  }
  else if ($user['role'] == 'user'){
     if ( $_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])) {
    //   Login successful: Create a session and redirect to the viewer homepage
    $_SESSION['loggedIn'] = true;
    $_SESSION['myPosts'] = true;
    $_SESSION['userId'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    setcookie('userId',$user['id'],time()+60*60*24*365);
    $_COOKIE['userId'] = $user['id'];
    $_SESSION['role'] = $user['role'];
   viewPosts();
  
    } else {
    //   Login failed: display an error message to the user
     $errorMessage= "Incorrect username or password <span class='glyphicon glyphicon-thumbs-down'></span> Please try again.";
    require 'loginForm.php';
    }
  }
  else{
    listBlogposts();
  }
}

 /**
  * Function to unset $_SESSION['values']
  *
  */
function logout() {
 unset( $_SESSION['username']);
 unset( $_SESSION['loggedIn']);
 unset( $_SESSION['role']);
unset( $_SESSION['userId']);
require 'loginForm.php';
}


 /**
  * Function that lists all blogposts in viewerPage template 
  * Sets header to All Blogposts
  */
function viewPosts(){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();
$header = "All BlogPosts";
  require("viewerPage.php" );
  
}

 /**
  * Function that lists all blogposts in admin template
  * Sets header to All Blogposts
  */
function adminPage(){
  
   $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();
 $header = "All BlogPosts";
  require("adminPage.php" );

}
 /**
  * Function that lists 5 latest blogposts in firstPage template
  *
  */
function listPosts() {

    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listLatestPost();
  include 'includes/firstPage.php';
}



function listBlogposts(){

 if($_SESSION['loggedIn'] &&  $_SESSION['role'] == 'admin'){

  adminPage();
 
}else if ($_SESSION['loggedIn'] &&  $_SESSION['role'] != 'admin') {
  $header = "All BlogPosts";
  viewPosts();
}
else{
  require("loginForm.php" );
 
}

}
  

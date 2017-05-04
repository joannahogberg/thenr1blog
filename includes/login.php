<?php
session_start();

include '../error.php';


require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';




$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'login':
    login();
    // listPosts();
    break;
 case 'logout':
    logout();
    // listPosts();
    break;
  case 'register':
    // register();
    userExists();
    break;
  default:
    // firstPage();
    listPosts();
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
   adminPage();
  
    } else {
    //   Login failed: display an error message to the user
      echo "Incorrect username or password. Please try again.", $user['password'];
     
   require 'loginForm.php';
   
    }

  } else if ($user['role'] == 'viewer'){
        if ( $_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])) {
    //   Login successful: Create a session and redirect to the viewer homepage
    $_SESSION['loggedIn'] = true;
    $_SESSION['userId'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    viewPosts();
  
    } else {
    //   Login failed: display an error message to the user
      echo "Incorrect username or password. Please try again.";
    require 'loginForm.php';
    }
  }
  else if ($user['role'] == 'user'){
     if ( $_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])) {
    //   Login successful: Create a session and redirect to the user homepage
    $_SESSION['loggedIn'] = true;
    $_SESSION['userId'] = $user['id'];
    $_SESSION['username'] = $user['username'];
   userPage();
  
    } else {
    //   Login failed: display an error message to the user
      echo "Incorrect username or password. Please try again.";
    require 'loginForm.php';
    }
  }
  else{
    viewPosts();
  }
}

function logout() {
 unset( $_SESSION['username'] );

  require 'firstPage.php';
}

function userExists(){
$user = Users::getUser($_POST['username']);

if($user){
    echo "Username already exists, please select a new username.";
    require 'loginForm.php';
}
else{
register();
require 'loginForm.php';
}
}

function register(){
$pdo = Database::connect();
$user = new Users($pdo);
$user->newUser($_POST);

require("loginForm.php" );
}

function userPage() {
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();
  
  require("userPage.php" );
}


function viewPosts(){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();
  require("viewerPage.php" );

}
function adminPage(){
  echo"hello";
   $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();
  require("adminPage.php" );

}

function firstPage(){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listLatestPost();
  include 'firstPage.php';
}

function listPosts() {

    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listLatestPost();
  include 'includes/firstPage.php';
}
  
 
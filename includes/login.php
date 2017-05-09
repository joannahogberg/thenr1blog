<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
    firstPage();
    // listPosts();
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

  setcookie('userId',$user['id'],time()+60*60*24*365);
    $_COOKIE['userId'] = $user['id'];
  
   adminPage();
  
    } else {
    //   Login failed: display an error message to the user
      echo "Incorrect username or password. Please try again.";
     
   require 'loginForm.php';
   
    }

  } else if ($user['role'] == 'viewer'){
        if ( $_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password'])) {
    //   Login successful: Create a session and redirect to the viewer homepage
    $_SESSION['loggedIn'] = true;
    $_SESSION['userId'] = $user['id'];
   
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    setcookie('userId',$user['id'],time()+60*60*24*365);
    $_COOKIE['userId'] = $user['id'];
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
    $_SESSION['role'] = $user['role'];
    setcookie('userId',$user['id'],time()+60*60*24*365);
    $_COOKIE['userId'] = $user['id'];
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

  require 'loginForm.php';
}

function userExists(){

//   $pdo = Database::connect();
// $user = new Users($pdo);
// $exUser = $user->getUser($_POST['username']);


$email = $_POST['email'];


$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo $email, " is a valid email address";
      $pdo = Database::connect();
$user = new Users($pdo);
$exUser = $user->getUser($_POST['username']);
   if($exUser){
    echo "Username already exists, please select a new username.";
    require 'loginForm.php';
}
else{
register();
require 'loginForm.php';
}
} else {
   echo $email, "is not a valid email address";
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
  //  header('Location: ../getLikes.php');
  require("userPage.php" );
}


function viewPosts(){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();

  require("viewerPage.php" );
    // header('Location: ../getLikes.php');

}
function adminPage(){
  
   $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->getPosts();
  //  header('Location: ../getLikes.php');
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
  
  
 
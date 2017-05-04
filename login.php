<?php
session_start();

include 'error.php';
include 'db.php';

include 'classes/Users.php';
require 'classes/Blogpost.php';


//  $nameErr = $emailErr = $pswErr = "";
// $name = $email = $psw = "";


//   if (empty($_POST["username"]) || empty($_POST["email"])) {
  
//   if (empty($_POST["username"])) {
//     $nameErr = "Name is required";
//     require 'includes/loginForm.php'; 
//   } else {
//     $name = test_input($_POST["username"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//       $nameErr = "Only letters and white space allowed"; 
//       require 'includes/loginForm.php'; 
//     }
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//     require 'includes/loginForm.php'; 
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format"; 
//       require 'includes/loginForm.php'; 
//     }
//   }
//      header('LOCATION: includes/loginForm.php');
      
// }else{

// $action = isset( $_GET['action'] ) ? $_GET['action'] : "";
// switch ( $action ) {
//   case 'login':
//     login();
//     // listPosts();
//     break;
//  case 'logout':
//     logout();
//     // listPosts();
//     break;
//   case 'register':
//     // register();
//     userExists();
//     break;
//   default:
//     firstPage();

// }


// function test_input($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }


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
}



function login(){

    $user = Users::getUser($_POST['username']);

    if ( $user['role'] == 'admin') {
    // User has posted the login form: attempt to log the user in
    // if ( $_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
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
    // if ( $_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
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

  require 'loginForm.php';


  
 
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
  echo "register";
$user = new Users($pdo);
$user->newUser($_POST);
// require 'includes/loginForm.php';
require("loginForm.php" );
}

function userPage() {
  $data = Blogpost::getPosts();
  
  require("userPage.php" );
}


function viewPosts(){
  $data = Blogpost::getPosts();

  require("viewerPage.php" );

}
function adminPage(){
  $data = Blogpost::getPosts();
  require("adminPage.php" );

}

function firstPage(){
  $data = Blogpost::listLatestPost();
  include 'firstPage.php';
}

// include 'includes/footer.php';
  
 
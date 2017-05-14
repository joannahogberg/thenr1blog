<?php
session_start();
require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $email = $pass = "";
$error = false;
 if ( isset($_POST['register']) ) {
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $name = trim($_POST['username']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
 
  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // basic name validation
  if (empty($name)) {
    $error = true;
   echo " Please enter your full name.<br>";
  } else if (strlen($name) < 3) {
   $error = true;
   echo " Name must have atleat 3 characters. <br>";
  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
   $error = true;
  echo " Name must contain alphabets A-Z and/or space. <br>";
  }
  else{
    //check if username is already taken
    $pdo = Database::connect();
    $user = new Users($pdo);
    $exUser = $user->getUser($_POST['username']);
    if($exUser){
    $error = true;
    echo " Provided name is already in use, selesct another name. <br>";
    }

  }
  if (empty($email)) {
   echo " Email is required";
  } else {
   
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $error = true;
   echo " Please enter valid email address. <br>";
    }
  }

  // password validation
  if (empty($pass)){
   $error = true;
   echo " Please enter password.<br>";
  } else if(strlen($pass) < 6) {
   $error = true;
  echo " Password must have atleast 6 characters.";
  }
//if no errors insert new user and return success
 if(!$error) {
 $pdo = Database::connect();
 $user = new Users($pdo);
 $user->newUser($_POST);
 echo "success";
 }

 }

}


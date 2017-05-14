<?php
session_start();
require 'errors.php';
require 'classes/Blogpost.php';
require 'classes/Database.php';


//Unset session values to make sure navigation will work
 unset( $_SESSION['username']);
 unset( $_SESSION['loggedIn']);
 unset( $_SESSION['role']);
 unset( $_SESSION['userId']);


function listPosts() {
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listLatestPost();
  include 'includes/firstPage.php';
}

listPosts();







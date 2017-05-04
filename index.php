<?php
// include 'includes/header.php';
require 'errors.php';


require 'classes/Blogpost.php';
require 'classes/Database.php';

// include 'includes/admin/loginForm.php';

// echo "<div><a href='includes/loginForm.php'>Login</a></div>";

function listPosts() {

    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listLatestPost();
  include 'includes/firstPage.php';
}

listPosts();
// require 'includes/login.php';


// include 'includes/footer.php';






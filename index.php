<?php
// session_start();
require 'errors.php';
require 'classes/Blogpost.php';
require 'classes/Database.php';


(function(){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listLatestPost();
 
  include 'includes/firstPage.php';
})();






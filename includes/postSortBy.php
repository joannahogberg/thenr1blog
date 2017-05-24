<?php
session_start();
require '../errors.php';
require '../classes/Users.php';
require '../classes/Blogpost.php';
require '../classes/Database.php';

//Get action from ajax post() call
$action=$_POST['action'];

if($action == 'topPosts'){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listByLikes();
// sortPosts($data);
// json_encode() to convert objects in PHP into JSON format 
echo json_encode($data);
}
elseif ($action == 'lastPosted'){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listById();
// sortPosts($data);
// json_encode() to convert objects in PHP into JSON format 
echo json_encode($data);
}
elseif ($action == 'postedByA'){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listByPublisherASC();
// sortPosts($data);
// json_encode() to convert objects in PHP into JSON format 
echo json_encode($data);
}
elseif ($action == 'postedByZ'){
    $pdo = Database::connect();
   $posts = new Blogpost($pdo);
  $data = $posts->listByPublisherDESC();
// sortPosts($data);
// json_encode() to convert objects in PHP into JSON format 
echo json_encode($data);
}


// function sortPosts($data){

// foreach($data as $row) {
//     echo "<article class='col-sm-10 col-md-10 col-lg-8 p-1 thumbnail'>";
//     echo "<h4 class='mb-1'>" . ucfirst($row['title']) . "</td>";
//     echo "<h6 class='text-muted'> Posted by " . ucfirst($row['username']) . " | " . $row['datePosted'] . " | <span class='glyphicon glyphicon-heart'></span> " . $row['likes'] . "</h6>";
//     echo "<p> <a href='admin.php?action=readPost&amp;postId=" . $row['id'] . "'> Read BlogPost<span class='glyphicon glyphicon-eye-open'></span></a></p>";
//     echo "</article>";
// }



// }


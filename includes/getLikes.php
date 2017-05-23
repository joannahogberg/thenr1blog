<?php
session_start();
require '../errors.php';
require '../classes/Database.php';
require '../classes/Likes.php';
require '../classes/Blogpost.php';

//Get action from ajax post() call
$action=$_POST['action'];

if ($action=='like'){
    likePost();
 }
else{
    unlikePost();
 }

 /**
  * Function to insert new like and update selected blogpost likes
  * 
  */

function likePost(){
    $pdo = Database::connect();
    $like = new Likes($pdo);
    $like->insertLikes($_POST['postId'],$_COOKIE['userId']);
    $blogpost = new Blogpost($pdo);
    $blogpost->setLike($_POST['postId']);
}

 /**
  * Function to delete new like and update selected blogpost likes
  * 
  */
function unlikePost(){
    $pdo = Database::connect();
    $unlike = new Likes($pdo);
    $unlike->deleteLikes($_POST['postId'],$_COOKIE['userId']);
    $blogpost = new Blogpost($pdo);
    $blogpost->removeLike($_POST['postId']);

}

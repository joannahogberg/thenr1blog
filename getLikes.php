<?php
session_start();
require 'errors.php';

require 'classes/Likes.php';
require 'classes/Blogpost.php';

$action=$_POST['action'];

if ($action=='like'){
$rowcount = Likes::getPostLikes($_POST['postId'],$_SESSION['userId']);
 if($rowcount==0){
Likes::insertLikes($_POST['postId'],$_SESSION['userId']);
Blogposts::setLike($_POST['postId']);
 }else{  
 die("There is No Post With That ID");
 }
}
if ($action=='unlike'){
$rowcount = Likes::getPostLikes($_POST['postId'],$_SESSION['userId']);
 if ($rowcount != 0){
Likes::deleteLikes($_POST['postId'],$_SESSION['userId']);
Blogposts::removeLike($_POST['postId']);

 }
}
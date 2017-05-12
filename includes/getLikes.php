<?php
session_start();
require '../errors.php';
require '../classes/Database.php';
require '../classes/Likes.php';
require '../classes/Blogpost.php';


$action=$_POST['action'];

if ($action=='like'){
    $pdo = Database::connect();
    $like = new Likes($pdo);
    $like->insertLikes($_POST['postId'],$_COOKIE['userId']);
// Likes::insertLikes($_POST['postId'],$_COOKIE['userId']);
$pdo = Database::connect();
    $blogpost = new Blogpost($pdo);
    $blogpost->setLike($_POST['postId']);
 }


if ($action=='unlike'){
$pdo = Database::connect();
$unlike = new Likes($pdo);
$unlike->deleteLikes($_POST['postId'],$_COOKIE['userId']);
// Likes::deleteLikes($_POST['postId'],$_COOKIE['userId']);
$pdo = Database::connect();
    $blogpost = new Blogpost($pdo);
$blogpost->removeLike($_POST['postId']);

 }



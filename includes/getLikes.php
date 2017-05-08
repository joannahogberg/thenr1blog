<?php
session_start();
require '../errors.php';
require '../classes/Database.php';
require '../classes/Likes.php';
require '../classes/Blogpost.php';


$action=$_POST['action'];

if ($action=='like'){

Likes::insertLikes($_POST['postId'],$_COOKIE['userId']);
$pdo = Database::connect();
    $blogpost = new Blogpost($pdo);
    $blogpost->setLike($_POST['postId']);
 }


if ($action=='unlike'){

Likes::deleteLikes($_POST['postId'],$_COOKIE['userId']);
$pdo = Database::connect();
    $blogpost = new Blogpost($pdo);
$blogpost->removeLike($_POST['postId']);

 }

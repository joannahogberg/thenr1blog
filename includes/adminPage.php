<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require 'header.php';
  require '../errors.php';
require '../classes/Likes.php';
?>

<div class="container flex-items-xs-center mt-5">
 <header class="container flex-items-xs-center my-2">
 <h1 class="text-uppercase text-xs-center">All blogposts</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo $_COOKIE['userId'], htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>

<div class="row flex-items-xs-center my-2">
<a href='blogForm.php'><span class="badge badge-info text-uppercase p-1">Make a new post</span></a>
</div>
<div class="row flex-items-xs-center m-1">
<?php foreach ( $data as $row ) { ?>   
<article class="col-sm-10 col-md-10 col-lg-10 p-1">
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
          <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | #likes:  ", $row["likes"];?></h6>
          <p ><?php echo $row["content"] ;?></p>

               <button class="btn btn-warning mb-1" onclick="location='admin.php?action=editPost&amp;postId=<?php echo $row["id"]?>'">Edit this post</button>
                <button class="btn btn-danger mb-1" onclick="location='admin.php?action=deletePost&amp;postId=<?php echo $row["id"]?>'">Delete this post</button>
                
    </article>
       
<?php } ?>
 </div>
 
 

 </div>
      <?php 
 
 require 'footer.php'; ?>

 
    
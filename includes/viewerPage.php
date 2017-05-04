  <?php session_start();
require '../classes/Likes.php';
include 'header.php';

  ?>


<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center mb-2">
 <h1 class="text-uppercase text-xs-center">All blogposts</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>
<div class="row">
<?php foreach ( $data as $row ) { ?>
   <article class="col-sm-10 col-md-10 col-lg-8 p-1">
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
          <h6 class="text-muted"><?php echo $row["datePosted"]," | ", ucfirst($row["username"]);?></h6>
          <p ><?php echo $row["content"] ;?></p>
           <?php 
   $rowcount = Likes::getPostLikes($row["id"],$_SESSION['userId']);
      if($rowcount==1){
    echo '<span class="badge badge-default text-uppercase"><a href="#" class="like" id="'.$row["id"].'" title="Unlike">Unlike</a></span>';
    }else{ 
    echo '<span class="badge badge-success text-uppercase"><a href="#" class="like" id="'.$row["id"].'" title="Like">Like</a></span>';
    }
          ?>
          
        </article>
<?php } ?>

 </div>
 </div>

 <?php include 'footer.php'; ?>
  <?php 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
  // session_start();
  include 'header.php';
  include 'navbar.php';
  require '../errors.php';
  // require '../classes/Likes.php';
  ?>
<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center my-2">
<h2 class="text-uppercase text-xs-center"><?php echo $header;?></h2>
 <!--<p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>-->
</header>
<div class="row flex-items-xs-center m-1">
<?php foreach ( $data as $row ) : ?>
<article class="col-sm-10 col-md-10 col-lg-8 p-1 thumbnail">
    <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
         <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | <span class='glyphicon glyphicon-heart'></span> ", $row["likes"];?></h6>
           <p> <a href="admin.php?action=readPost&amp;postId=<?php echo $row["id"]?>">Read BlogPost <span class="glyphicon glyphicon-eye-open"></span></a></p>
    </article>
<?php endforeach; ?>
 </div>
 </div>

 <?php include 'footer.php'; ?>
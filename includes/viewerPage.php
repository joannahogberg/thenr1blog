  <?php 
  session_start();
  include 'header.php';
  require '../errors.php';
  require '../classes/Likes.php';
  ?>
<div class="container flex-items-xs-center mt-5">
 <header class="container flex-items-xs-center my-2">
 <h1 class="text-uppercase text-xs-center">All blogposts</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo $_COOKIE['userId'], htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>
<div class="row flex-items-xs-center m-1">
<?php foreach ( $data as $row ) { ?>
   <article class="col-sm-10 col-md-10 col-lg-8 p-1">
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
                   <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | #likes:  ", $row["likes"];?></h6>
          <p ><?php echo $row["content"] ;?></p>
           <?php 
    $rowcount = Likes::getPostLikes($row["id"],$_SESSION['userId']);
    if($rowcount==1){
    echo '<span class="badge badge-pill badge-default text-uppercase"><a href="#" class="like" id="'.$row["id"].'" title="Unlike">Unlike</a></span>';
    
    }else{ 
    echo '<span class="badge  badge-pill badge-success text-uppercase"><a href="#" class="like" id="'.$row["id"].'" title="Like">Like</a></span>';
    } 
    ?>
    </article>
<?php } ?>
 </div>
 </div>

 <?php include 'footer.php'; ?>
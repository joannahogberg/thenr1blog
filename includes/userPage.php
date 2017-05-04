<?php session_start();
require '../errors.php';
require '../classes/Likes.php';
include 'header.php';
?>

<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center mb-2">
 <h1 class="text-uppercase text-xs-center">All blogposts</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>

<div class="row flex-items-xs-center">
<a href='blogForm.php'><span class="badge badge-info text-uppercase p-1">Make a new post</span></a>
     <!--<a href='includes/blogForm.php'>Make a new post</a>-->
</div>
<div class="row">
<?php foreach ( $data as $row ) { ?>


        
<article class="col-sm-10 col-md-10 col-lg-8 p-1">
      
       
          
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
          <h6 class="text-muted"><?php echo $row["datePosted"]," | ", ucfirst($row["username"]);?></h6>
          <p ><?php echo $row["content"] ;?></p>
                   <?php 
    $rowcount = Likes::getPostLikes($row["id"],$_SESSION['userId']);
      if($rowcount==1){
    echo '<span class="badge badge-pill badge-default text-uppercase"><a href="#" class="like" id="'.$row["id"].'" title="Unlike">Unlike</a></span>';
    }else{ 
    echo '<span class="badge  badge-pill badge-success text-uppercase"><a href="#" class="like" id="'.$row["id"].'" title="Like">Like</a></span>';
    } 
          ?>
                  <?php 
         if($_SESSION['userId']== $row["userId"]){ ?>
         <div class="buttons mt-1">
               <button class="btn btn-warning" onclick="location='admin.php?action=editPost&amp;postId=<?php echo $row["id"]?>'">Edit this post</button>
                <button class="btn btn-danger" onclick="location='admin.php?action=deletePost&amp;postId=<?php echo $row["id"]?>'">Delete this post</button>
 </div>
         <?php }?>
       
    </article>
       
<?php } ?>
 </div>
 
 
 </div>

  <?php include 'footer.php'; ?>
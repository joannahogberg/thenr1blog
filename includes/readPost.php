<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../header.php';
require 'navbar.php';

?>

<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center">
  <p><a href="login.php"><span class="glyphicon glyphicon-menu-left"></span> Back to list</a></p>
</header>
   
<div class="row flex-items-xs-center m-1">
<?php foreach ( $post as $row ) : ?>   
<article class="col-sm-10 col-md-10 col-lg-10 p-1">
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
          <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"];?></h6>
          <p ><?php echo $row["content"] ;?></p>  
             <?php 
        if($rowcount==1){ ?>
    <a href="#" class="like" id="<?php echo $row['id']?>" title="Unlike"><span class="glyphicon glyphicon-heart"></span></a>
    
     <?php }
     else{ ?> 
    </span><a href="#" class="like" id="<?php echo $row['id']?>" title="Like"><span class="glyphicon glyphicon-heart-empty"></span></a>
    
   <?php }?> 
             <?php 
         if($_SESSION['userId']== $row["userId"] || $_SESSION['role'] == 'admin'){ ?>
         <div class="buttons mt-1">
               <button class="btn btn-warning" onclick="location='admin.php?action=editPost&amp;postId=<?php echo $row["id"]?>'"><span class="glyphicon glyphicon-edit"></span> Edit this post</button>
                <button class="btn btn-danger" onclick="location='admin.php?action=deletePost&amp;postId=<?php echo $row["id"]?>'"><span class="glyphicon glyphicon-trash"></span> Delete this post</button>
        </div>
         <?php }
         else if($_SESSION['role'] == 'user' && $_SESSION['userId']== $row["userId"]){?> 
                <div class="buttons mt-1">
                <button class="btn btn-warning" onclick="location='admin.php?action=editPost&amp;postId=<?php echo $row["id"]?>'">Edit this post</button>
                <button class="btn btn-danger" onclick="location='admin.php?action=deletePost&amp;postId=<?php echo $row["id"]?>'">Delete this post</button>
                </div>
          <?php }?> 
    </article>   
<?php endforeach; ?>
 </div>
 
 </div>
      <?php 
 
 require '../footer.php'; ?>
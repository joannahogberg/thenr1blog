<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../errors.php';
require '../header.php';
include 'navbar.php';


?>

<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center my-2">
 <h2 class="text-uppercase text-xs-center"><?php echo $header;?></h2>
</header>
<div class="row flex-items-xs-center my-2">


 <a href='blogForm.php' class="btn btn-info btn-lg text-uppercase">
          <span class="glyphicon glyphicon-pencil"></span> &nbsp;Make a new BlogPost
        </a>
</div>
<div class="row flex-items-xs-center m-1">
<?php foreach ( $data as $row ) : ?>  

 <article class="col-sm-10 col-md-10 col-lg-8 p-1 thumbnail">
    <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
    <p> <a href="admin.php?action=readPost&amp;postId=<?php echo $row["id"]?>">Read BlogPost <span class="glyphicon glyphicon-eye-open"></span></a></p>
         <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | <span class='glyphicon glyphicon-heart'></span> ", $row["likes"];?></h6>
                  <button class="btn btn-warning my-1" onclick="location='admin.php?action=editPost&amp;postId=<?php echo $row["id"]?>'"><span class="glyphicon glyphicon-edit"></span> Edit this post</button>
                <button class="btn btn-danger my-1" onclick="location='admin.php?action=deletePost&amp;postId=<?php echo $row["id"]?>'"><span class="glyphicon glyphicon-trash"></span> Delete this post</button>
    </article>


 
<?php endforeach; ?>
 </div>
 </div>
      <?php 
 
 require '../footer.php'; ?>

 
    
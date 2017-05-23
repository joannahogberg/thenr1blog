<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../errors.php';
include '../header.php';
include 'navbar.php';
?>

<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center">
 <h1 class="text-uppercase text-xs-center">Add a new BlogPost</h1>
</header>
 <div id="message" class="row flex-items-xs-center m-1">
 <p><a href="login.php"><span class="glyphicon glyphicon-menu-left"></span> Back to list</a></p>
 </div>
   <div class="row flex-items-xs-center m-1">
     <div id="form-messages"></div>
   <form id="blogFormId" action="editPost.php" method="POST" class="col-sm-10 col-md-10 col-lg-8 p-1">
      <!--<form id="editForm" action="admin.php?action=newBlogpost" method="post" class="col-sm-10 col-md-10 col-lg-8 p-1">-->
  <input type="hidden" name="userId" value="<?php echo $_SESSION['userId']?>" placeholder="<?php echo $_SESSION['userId']?>"/>
  <input type="hidden" name="newBlogpost" value="newBlogpost" placeholder="newBlogpost"/>
  <div class="form-group">
  <label for="title">Blog title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="Name of the blogpost" class="form-control">
    </div>
     
      <div class="form-group">
     <label for="content">Blog post</label>
      <textarea type="text" name="content" id="content" class="form-control" rows="8" placeholder="The HTML content of the blogpost"></textarea> 
       </div>
   <div class="buttons">
     <!--<input type="submit" name="newBlogpost" value="Post" />-->
      <button type="submit" class="btn btn-info">Add post <span class="glyphicon glyphicon-ok"></span></button>
    
    </div>
  </form>
</div>
</div>
<?php include '../footer.php'; ?>
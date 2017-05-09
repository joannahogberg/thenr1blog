<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require '../errors.php';
include 'header.php';
?>

<div class="container flex-items-xs-center mt-5">
 <header class="container flex-items-xs-center my-2">
 <h1 class="text-uppercase text-xs-center">Add a new BlogPost</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>
 
   <div class="row flex-items-xs-center m-1">

  <form action="admin.php?action=newBlogpost" method="POST" class="col-sm-10 col-md-10 col-lg-8 p-1">
  <div class="form-group">
  <label for="title">Blog title</label>
    <input type="text" name="title" class="form-control" placeholder="Name of the blogpost" class="form-control">
    </div>
     
      <div class="form-group">
     <label for="content">Blog post</label>
      <textarea type="text" name="content" class="form-control" rows="8" placeholder="The HTML content of the blogpost"></textarea> 
       </div>
   <div class="buttons">
    <button type="submit" class="btn btn-info">Submit</button>
    
    </div>
  </form>
</div>
</div>
<?php include 'footer.php'; ?>
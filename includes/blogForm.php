<?php session_start();
require '../errors.php';
include 'header.php';
?>

 <div class="container">

 <div>
  <p>You are logged in as <b><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="../login.php?action=logout"?>Log out</a></p>
</div>
 
   

  <form action="admin.php?action=newBlogpost" method="POST">
  <h2>Add new BlogPost</h2>
  <div class="form-group">
  <label for="title">Blog title</label>
    <input type="text" name="title" placeholder="Name of the blogpost" class="form-control">
    </div>
     
      <div class="form-group">
     <label for="content">Blog post</label>
      <textarea type="text" name="content" class="form-control" rows="8" col="30" placeholder="The HTML content of the blogpost"></textarea> 
       </div>
  
    <button type="submit" class="btn btn-info">Submit</button>
    
    
  </form>
</div>

<?php include 'footer.php'; ?>
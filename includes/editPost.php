<?php
include 'header.php';
?> 
<div class="container flex-items-xs-center mt-5">
 <header class="container flex-items-xs-center my-2">
 <h1 class="text-uppercase text-xs-center">Edit Post</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>

<div class="row flex-items-xs-center m-1">
<?php foreach ( $post as $row ) { ?>
      <form id="editPost" action="admin.php?action=editPost" method="post" class="col-sm-10 col-md-10 col-lg-8 p-1">
        <input type="hidden" name="blogpostId" value="<?php echo $row["id"]?>" placeholder="<?php echo $row["id"]?>"/>
       <div class="form-group">
            <label for="title">Blog Post Title</label>
            <input type="text" name="title" id="title" placeholder="Post title" required autofocus maxlength="255" class="form-control" value="<?php echo $row["title"];?>" />
     </div>
      <div class="form-group">
            <label for="content">Blog Post Content</label>
            <textarea name="content" id="content" placeholder="The HTML content of the blogpost" required maxlength="100000" class="form-control" rows="8"><?php echo htmlspecialchars( $row["content"] )?></textarea>
       </div>
        <div class="form-group">
            <label for="datePosted">Date Posted</label>
            <input type="date" name="datePosted" id="datePosted" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $row["datePosted"];?>" />
     
 </div>
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" name="cancel" value="Cancel" />
        </div>
 
      </form>
      <?php } ?>
  </div>
</div>
  <?php include 'footer.php'; ?>


<?php
include 'header.php';
?> 
<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center mb-2">
 <h1 class="text-uppercase text-xs-center">Edit Post</h1>
 <p class="text-xs-center">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars( $_SESSION['username']) ?></b>. <a href="login.php?action=logout"?>Log out</a></p>
</header>
<?php foreach ( $post as $row ) { ?>
      <form action="admin.php?action=editPost" method="post">
      <h2>Edit BlogPost</h2>
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
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
 
      </form>
      <?php } ?>
  </div>

  <?php include 'footer.php'; ?>


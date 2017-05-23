  <?php 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

 require '../errors.php';
  require '../header.php';
  require 'navbar.php';
  ?>
<div class="container flex-items-xs-center">
 <header class="container flex-items-xs-center mb-2">
<h2 id="header" class="text-uppercase text-xs-center"><?php echo $header;?></h2>
<p id="header2" class="text-uppercase text-xs-center"></p>
</header>

<div class="row flex-items-xs-center">
<div class="col-sm-12 col-md-3 flex-items-xs-center mb-1">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sort blogPosts By</a>
    <div class="dropdown-menu">
      <a id="topPosts" class="dropdown-item" href="#">Most Likes</a>
      <a id="lastPosted" class="dropdown-item" href="#">Last Posts</a>
      <a id="postedByA" class="dropdown-item" href="#">Publisher A-Ö</a>
      <a id="postedByZ" class="dropdown-item" href="#">Publisher Ö-A</a>
    </div>
  </li>
</div>
<div id="articles" class="col-sm-12 col-md-9 flex-items-xs-center">
<?php 
 
foreach ( $data as $row ) : ?>
<article class="col-sm-10 col-md-10 col-lg-8 p-1 thumbnail">
    <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
         <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | <span class='glyphicon glyphicon-heart'></span> ", $row["likes"];?></h6>
           <p> <a href="admin.php?action=readPost&amp;postId=<?php echo $row["id"]?>">Read BlogPost <span class="glyphicon glyphicon-eye-open"></span></a></p>
    </article>
<?php endforeach; ?>
 </div>
 </div>
 </div>

 <?php include '../footer.php'; ?>
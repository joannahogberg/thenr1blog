  <?php 
 require 'header.php'; 
 require 'navbar.php';?>

<div class="container mt-3">
<header class="row  m-1">
 <h1 class="text-uppercase">Welcome to thenr1blog</h1>
</header>

<div class="row m-1">

<?php foreach ( $data as $row ) { ?>
   <article class="col-sm-10 col-md-10 col-lg-10 p-1">
          
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
                   <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | <span class='glyphicon glyphicon-heart'></span>  ", $row["likes"];?></h6>
          <p><?php echo $row["content"] ;?></p>
         </article>
<?php } ?>

 
 </div>
 </div>
  <?php 
 
 require 'footer.php'; ?>
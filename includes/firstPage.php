<?php 
require 'header.php'; ?>

<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
       <a class="nav-link" href='includes/loginForm.php'>Login</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container flex-items-xs-center mt-5">
<header class="container flex-items-xs-center my-5">
 <h1 class="text-uppercase text-xs-center">Welcome to thenr1blog</h1>
</header>



<div class="row flex-items-xs-center m-1">

<?php foreach ( $data as $row ) { ?>
   <article class="col-sm-10 col-md-10 col-lg-10 p-1">
          
          <h4 class="mb-1"><?php echo ucfirst($row["title"]);?></h4>
                   <h6 class="text-muted"><?php echo "Posted by ", ucfirst($row["username"]), " | ", $row["datePosted"], " | #likes:  ", $row["likes"];?></h6>
          <p><?php echo $row["content"] ;?></p>
         </article>
<?php } ?>

 
 </div>

 
   
 </div>

  <?php 
 
 require 'footer.php'; ?>
 
   
 </div>

  <?php 
 
 require 'footer.php'; ?>
<nav class="navbar navbar-light bg-faded">
  <div class="container">
          <?php 
          if(isset($_SESSION['username'])){ 
            if($_SESSION['myPosts'] == true){;
            ?> 
        <p class="navbar-text navbar-left mr-auto">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars($_SESSION['username']) ?></b></p>
         <p class="navbar-text navbar-left mr-auto"> <a class="navbar-link" href="admin.php?action=listMyPosts&amp;userId=<?php echo htmlspecialchars($_SESSION['userId'])?>">My posts <span class="glyphicon glyphicon-user"></span></a></p>
        <p class="navbar-text navbar-right ml-auto"> <a class="navbar-link" href="login.php?action=logout"?>Log out <span class="glyphicon glyphicon-log-out"></span></a></p>
         <?php }
         else {?> 
        <p class="navbar-text navbar-left mr-auto">You are logged in as <b class="text-uppercase"><?php echo htmlspecialchars($_SESSION['username']) ?></b></p>
        <p class="navbar-text navbar-right ml-auto"> <a class="navbar-link" href="login.php?action=logout"?>Log out <span class="glyphicon glyphicon-log-out"></span></a></p>      
  <?php }?>
         <?php }
          else if (!isset($_SESSION['username'])){     ?> 
            <p class="nav navbar-text navbar-left"> <a class="navbar-link" href='includes/loginForm.php'>Login <span class="glyphicon glyphicon-log-in"></span></a></p>              
  <?php }?>
  
</div>

</nav>




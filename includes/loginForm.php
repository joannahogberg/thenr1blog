<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require '../header.php';

?>
 <div "container">
   
<div class="container flex-items-xs-center">
<header class="container flex-items-xs-center mt-3">
 <h1 class="text-uppercase text-xs-center">Welcome to thenr1blog</h1>
 <p class="text-xs-center">Login or register now</p>
</header>
 <div class="row flex-items-xs-center">
  
      <form id="loginForm" action="login.php?action=login" method="post" class="col-sm-10 col-md-10 col-lg-5 m-1">
        <!--<form id="loginForm" action="postLogReg.php" method="post" class="col-sm-10 col-md-10 col-lg-5 m-1">-->
          <?php if ( isset( $errorMessage ) ) { ?>
        <div class="errorMessage"><?php echo $errorMessage; ?></div>
<?php } ?>
         <span id="messLog" class="text-uppercase text-xs-center"></span>
        <input type="hidden" name="login" value="true" /> 
         <fieldset class="scheduler-border">
    <legend class="scheduler-border">Login:</legend>
        <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <div class="col-sm-8">
            <input type="text" name="username" id="username" placeholder="Your Username" required autofocus maxlength="20" />
         </div>
 </div>
        <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
            <input type="password" name="password" id="pass1" placeholder="Your password" required maxlength="20" />
        </div>
 </div>
        <div class="buttons">
         
          <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> Login</button>
        </div>
  </fieldset>
      </form>

  <form id="regForm" action="postLogReg.php" method="post" class="col-sm-10 col-md-10 col-lg-5 m-1" autocomplete="off">

  <div id="messReg" class="form-group row"></div>
        <input type="hidden" name="register" value="true" /> 
         <fieldset class="scheduler-border">
    <legend class="scheduler-border">Register:</legend>
       <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-8">
            <input type="email" name="email" id="email" placeholder="Enter valid email" required maxlength="20" /> 
         </div>
 </div>
         <div class="form-group row">
            <label for="username" class="col-sm-3 col-form-label has-danger">Username</label>
            <div class="col-sm-8">
                             
            <input type="text" name="username" id="username2" placeholder="Enter username" required autofocus maxlength="20" />
         </div>
 </div>
         <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
                              
            <input type="password" name="password" id="pass2" placeholder="Select password" required maxlength="20" />
       </div>
 </div>
        <div class="buttons">
         
          <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> Register</button>
        </div>
  </fieldset>
      </form>


</div>
</div>
</div>

 <?php 
 
 require '../footer.php'; ?>
 

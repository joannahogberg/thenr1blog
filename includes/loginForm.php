<?php 
session_start();

include 'header.php';
?>
 <div "container">
   
<div class="container flex-items-xs-center">
 
      <form action="login.php?action=login" method="post">
        <input type="hidden" name="login" value="true" /> 
         <fieldset class="scheduler-border">
    <legend class="scheduler-border">Login:</legend>
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" name="username" placeholder="Your admin username" required autofocus maxlength="20" />
         </div>
 </div>
        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" name="password" placeholder="Your admin password" required maxlength="20" />
        </div>
 </div>
        <div class="buttons">
         
          <button type="submit" class="btn btn-success">Login</button>
        </div>
  </fieldset>
      </form>

<form action="login.php?action=register" method="post">
        <input type="hidden" name="register" value="true" /> 
         <fieldset class="scheduler-border">
    <legend class="scheduler-border">Register:</legend>
       <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email"  placeholder="Enter email" required maxlength="20" />
         </div>
 </div>
         <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label has-danger">Username</label>
            <div class="col-sm-10">
            <input type="text" name="username"  placeholder="Select username" required autofocus maxlength="20" />
         </div>
 </div>
         <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" name="password"  placeholder="Select password" required maxlength="20" />
       </div>
 </div>
        <div class="buttons">
         
          <button type="submit" class="btn btn-info">Register</button>
        </div>
  </fieldset>
      </form>



</div>
</div>

 <?php 
 
 require 'footer.php'; ?>
 

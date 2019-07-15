<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
   body
{

 font-family: "Times New Roman", Times, serif;
  font-size:18px;
}
  </style>
  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
<script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
<script src='<?php echo base_url(); ?>assets/js/bootstrap.min.js'></script>
<style>
body 
{
  
  background-image:url("<?php echo base_url(); ?>assets/images/login2.jpg");  
}
.wrapper {  
  margin-top: 100px;
  margin-bottom: 80px;
}
.form-signin {
  max-width: 380px;
  padding: 15px 35px 20px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
   {
    margin-bottom: 30px;
  }

  .checkbox {
    font-weight: normal;
  }

  .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    @include box-sizing(border-box);

    &:focus {
      z-index: 2;
    }
  }
  input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}
</style>
<title>Login</title>
</head>
<body>
  <?php if(isset($_SESSION['success']))
{
  ?>
  <?php  $_SESSION['success']; ?>
  <?php
}
?>
<div class="container">
 <div class="wrapper">
  <form action="" class="form-signin" method="post">
    <h2 class="form-signin-heading">Please login here!!</h2>

    <input type="text" class="form-control"  name="email" placeholder="Enter EmailId"  autofocus="" value="<?php if(isset($_POST['submit'])) { echo $_POST['email']; }?>">
    <br>

    <input type="password" class="form-control"  name="password" placeholder="Enter Password" ><br> 


    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" >Login</button>  
    <p style="color:red">If you are not register then please register first</p> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="security_form"><u>Send Request</u></a>
</form>
  </div>
  </div>
  </body>
  </html>
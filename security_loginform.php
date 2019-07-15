<?php
if(isset($_SESSION['admin_name']))
{
?>
<?php
include 'admin_dashboard.php';
?>

<!DOCTYPE html>
<html>
<style>
  body
{
  margin: 0;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/b4.jpg");
}
.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
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
</head>
<body><br><br>
<div class="container">
 <div class="wrapper">
  <form action="" class="form-signin" method="post">
    <h3 class="form-signin-heading">Security login!!</h3><br>

    <input type="email" class="form-control"  name="security_id" placeholder="Enter EmailId"  autofocus="" >
    <br>

    <input type="password" class="form-control"  name="security_password" placeholder="Enter Password" ><br> 


    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="submit" >Login</button>  
</form>
  </div>
  </div>
  </body>
  </html>

  <?php
}
else
{
  redirect("admin/admin_login");
}
?>
<?php
include 'footer_fixed.php';
?>

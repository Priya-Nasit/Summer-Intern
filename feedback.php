<?php if(isset($_SESSION['email']))
{
?>
<?php
include 'user_dashboard.php';
?>
<style type="text/css">
  body
{
  margin: 0;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/feedback1.jpg");
}

.form-contact 
{
  width: 450px;
  height:480px; 
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color:#2773c140;
  border: 1px solid rgba(0,0,0,0.1);  
      color:#fff;
  .form-signin-heading
   {
     padding-top: 10px;
   }
 }

  .checkbox 
  {
    font-weight: normal;
  }

  .form-control 
  {
    position: relative;
    font-size: 14x;
    height: auto;
    padding: 6px;
    @include box-sizing(border-box);

    &:focus
     {
      z-index: 2;
    }
  }
  input[type="text"] 
  {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  input[type="password"] 
  {
    margin-bottom: 20px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

</style>

<div class="container">
  <!--<ol class="breadcrumb" style="background-color:#f6f6f6;">
  <li class="breadcrumb-item"><a href="home.php">Home</a></li>
  <li class="breadcrumb-item active">Contact us</li>
  </ol>-->
    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

  <div class="wrapper">
  <form action="" class="form-contact" method="post">
    <h2 class="form-contact-heading" style="color:white;"><u><b>Feedback!!</b></u></h2><hr>
      
     <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['firstname']; }?>"/><br>

      <input type="text" name="email" class="form-control" placeholder="Enter Email Address" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?>"/><br>

       <input type="text" name="contact" class="form-control" placeholder="Enter Contact No." value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['contact']; }?>"/><br>
    
      <textarea class="form-control" name="feedback" rows="5" id="comment" placeholder="Enter Your Feedback" value="<?php if(isset($_POST['submit'])) { echo $_POST['feedback']; }?>"></textarea><br>
     
      <div class="container-login100-form-btn" align="center" >
            <button class="btn btn-primary" name="submit">
              Submit
            </button>
          </div></form>
  </div>
  </div>


</div>
</div>
</body>
</html>

<?php
}
else
{
  redirect("User/user_login");
}
?>
<?php
include 'footer.php';
?>
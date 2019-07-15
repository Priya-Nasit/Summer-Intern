<?php
include 'user_dashboard.php';

/*$error="";
  $error_match="";
  $error_email="";
  $newrecord="";
  $err_image="";
  $err_imagesize="";
  $err_imagetype="";
   
    
  if(isset($_POST['submit']))
  {
    $flag=1;
    if($_POST['firstname'] == '' && empty($_POST['firstname']))
    {
    $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Firstname!!.
                  </div>';
            
            $flag=0;    
    }


    if($flag == 1)
    {
   if(!preg_match("/^[a-zA-Z ]*$/",$firstname))
   {
   $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Firstname contain alphabetetic character only!!.
                  </div>';
          $flag=0;      
     
    }
  }
  $firstname= mysqli_real_escape_string($con,$_POST['firstname']);

  if($firstname)
  {
  if($_POST['lastname'] == '' && empty($_POST['lastname']))
    {
    $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Lastname!!.
                  </div>';
            
            $flag=0;    
    }
  }
  $lastname= mysqli_real_escape_string($con,$_POST['lastname']);

    if($flag == 1)
    {
   if(!preg_match("/^[a-zA-Z ]*$/",$lastname))
   {
   $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Lastname contain alphabetetic character only!!.
                  </div>';
          $flag=0;      
     
    }
  }
 
  if($firstname && $lastname  )
    {
       if($_POST['email'] == '' && empty($_POST['email']))
       {
$error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter emailid!!.
                  </div>';
         
         $flag=0;
       }
     }
    
    $emailid= mysqli_real_escape_string($con,$_POST['emailid']);
   
    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $emailid))
  //if(!preg_match('^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$',$emailid))
  {
   if($emailid!="")
   {
   $error_email= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  invalid email address.....please enter valid email address!!.
                  </div>';
              $flag=0;
   }
 }

    if($firstname && $lastname && $emailid )
  {
    if($_POST['contact'] == '' && empty($_POST['contact']))
     {
        $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter contact!!.
                  </div>';
         
         $flag=0;
       }
     }  
    $contact= mysqli_real_escape_string($con,$_POST['contact']);

    if(strlen($contact)!=10)
    {
      $error_match= '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter contact number properly only 10 digit allow!!.
                  </div>';
          $flag=0;   
    }
  /*  if($flag==1)
    {
    if(!preg_match("/^[a-zA-Z ]*$/",$city))
   {
     $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter City Name Properly!!.
                  </div>';
          $flag=0;      
     }
    }*/
  
  
  /*if($firstname && $lastname && $emailid && $contact)
  {
    if($_POST['request_no'] == '' && empty($_POST['request_no']))
     {
        $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Request Number!!.
                  </div>';
         
         $flag=0;
       }
     }  
    $request_no= mysqli_real_escape_string($con,$_POST['request_no']);
    if($flag==1)
    {
    if(!preg_match("/^[0-9]*$/",$request_no))
   {
     $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please Enter Request Number Properly!!.
                  </div>';
          $flag=0;      
     }
    }
  

  if($firstname && $lastname && $emailid && $contact && $request_no)
  {
    if($_POST['adhar_licenses_no'] == '' && empty($_POST['adhar_licenses_no ']))
     {
        $error = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Adhar or Licenses number!!.
                  </div>';
         
         $flag=0;
       }
     }  
    $adhar_licenses_no= mysqli_real_escape_string($con,$_POST['adhar_licenses_no']);
    if($flag==1)
    {
    if(!preg_match("/^[0-9]*$/",$adhar_licenses_no ))
   {
     $error_match = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Please enter Adhar or Licenses number Properly!!.
                  </div>';
          $flag=0;      
     }
    }
  
   if(isset($_POST['gender']))
    {
    $gender= mysqli_real_escape_string($con,$_POST['gender']);
    }

     $file=$_FILES['fileupload'];
     $target_dir="<?php echo base_url(); ?>assets/images/image";
   $target_path=basename($_FILES["fileupload"]["name"]);
   $imagetype = strtolower(pathinfo($target_path,PATHINFO_EXTENSION));
     $uploadOk = 1;


if($firstname && $lastname && $college_id && $emailid && $password && $contact && $city && $pincode && $department && $branch && $address)
{
  if(file_exists($target_path))
  {
    
    $err_image = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  file is already exist!!.
                  </div>';
       $flag = 0;
   }

    if($_FILES["fileupload"]["size"]>100000)
   {
  
    $err_imagesize = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  file is larger than requirement!!.
                  </div>';
        $flag = 0;
   }

   if($imagetype!="jpg" && $imagetype!="jpeg" && $imagetype!="png")
   {
    
    $err_imagetype = '<div class="alert alert-warning alert-dismissible fade-in">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  only jpg,png or jpeg files are allowed!!.
                  </div>';
        $flag = 0;
   }
 }
  
}*/
?>
<style type="text/css">
  body
{
  margin: 0;
  color: white;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/back2.jpg");
}
</style>
<div class="container">
  <h4 style="text-align:center"><u><b>Deatils For Temporary Pass</b></u></h4>
 <div class="row"><br>

<form method="post" action="">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
</div> 
<!-- content area -->
  <div class="panel-heading">
        <h3 class="panel-title" >Personal Details</h3>     
      </div><br>
    <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control"  />
                
              </div>
              <div class="col-md-6">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" >
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" />
                
              </div>
              <div class="col-md-6">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" class="form-control" >
              </div>
            </div>  
          </div>
          

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="request_no">Request No.</label>
                <input type="text" name="request_no" id="request_no" class="form-control" >
              </div>

              <div class="col-md-6">
               <br><label for="gender">Gender</label>
                <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
        <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
              </div>
              
              
            </div>  
          </div>

        <div class="panel-heading">
          <h3 class="panel-title" >Other Deatils</h3>     
        </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="adhar_licenses_no ">Adharcard No./Licenses No.</label>
                <input type="text" name="adhar_licenses_no" id="adhar_licenses_no" class="form-control"/>
              </div>

              <div class="col-md-6">
                <label for="fileupload">Upload Adharcard Upload/Licenses No.</label>
                <input type="file" name="fileupload" id="fileupload" class="form-control" placeholder="choose image" value="<?php if(isset($_POST['submit'])) { echo $_POST['fileupload']; }?>"/>
              </div>
            </div>  
          </div><br>

          <div class="container-login100-form-btn" align="center">
            <button class ="btn btn-primary"  name="submit">
              Submit
            </button>
          </div>
          <!-- Trigger the modal with a button -->
     </form>
      </div>
      </div>
    </div>
  </div>
</div>
</div>

      </div>

    </div>
</body><br>
</html>
<?php
include 'footer.php';
?>
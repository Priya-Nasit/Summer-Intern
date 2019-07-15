<?php if(isset($_SESSION['email']))
{
  if(!isset($_SESSION['plant']) && !isset($_SESSION['mentor']))
  {
?>
<?php
include 'user_dashboard.php';
?>
<style type="text/css">
  body
{
  margin: 0;
  color:white;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/form_back1.jpg");
}
</style>
<div class="container">
  <h4 style="text-align:center"><u><b>Internship Deatils </b></u></h4>
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
                <input type="text" name="firstname" id="firstname" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['firstname']; }?>" />
                
              </div>
              <div class="col-md-6">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['lastname']; }?>"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?>"/>
                
              </div>
              <div class="col-md-6">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['contact']; }?>"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="Ep_no">Ep No:</label>
                <input type="text" name="Ep_no" id="Ep_no" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['Ep_no']; }?>"/>
              </div>
            </div>  
          </div>
          <br>


          
      <div class="panel-heading">
        <h3 class="panel-title" >College Details</h3>     
      </div><br>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="college_name">College Name</label>
                <input type="text" name="college_name" id="college_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['college_name']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="college_address">College Address</label>
                <input type="text" name="college_address" id="college_address" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['college_address']; }?>"/>
              </div>
            </div>  
          </div><br>

             <div class="panel-heading">
        <h3 class="panel-title" >Education</h3>     
      </div><br>
      
          <div class ="form-group">
            <div class="row">

              <div class="col-md-6">
                <label for="field">Field</label>
     <select name="field" class="form-control">
            <option>Btech-IT</option>
            <option>Btech-CE</option>
            <option>Btech-EC</option>
            <option>Btech-EE</option>
            <option>Btech-ME</option>
            <option>Btech-CIVIL</option>
            <option>Mtech-IT</option>
            <option>Mtech-CE</option>
            <option>Mtech-EC</option>
            <option>Mtech-EE</option>
            <option>Mtech-ME</option>
            <option>Mtech-CIVIL</option>
             <option>Other</option>
   </select>
</div>

              <div class="col-md-6">
                <label for="education">Sem</label>
     <select name="education" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
             <option>Other</option>
   </select>
</div>
              
            </div>  
          </div>

         
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="year_completed">Year Completed</label>
     <select name="year_completed" class="form-control">
            <option>Btech-1st</option>
            <option>Btech-2nd</option>
            <option>Btech-3rd</option>
            <option>Btech-4th</option>
            <option>Mtech-1st</option>
            <option>Mtech-2nd</option>
            <option>Other</option>
   </select>
</div>

              <div class="col-md-6">
                <label for="passing_year">Passing Year</label>
     <select name="passing year" class="form-control">
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
            <option>Other</option>
   </select>
</div>
            </div>  
          </div><br>   

        <div class="panel-heading">
          <h3 class="panel-title" >Other Deatils</h3>     
        </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="internship_period">Internship Period</label>
                <input type="text" name="internship_period" id="internship_period" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['internship_period']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="training_start_date">Training Start Date</label>
                <input type="date" name="training_start_date" id="training_start_date" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['training_start_date']; }?>"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="training_end_date">Training End Date</label>
                <input type="date" name="training_end_date" id="training_end_date" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['training_end_date']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="discipline">Discipline</label>
                <input type="text" name="discipline" id="discipline" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['discipline']; }?>"/>
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="mentor_name">Mentor's Name</label>
                <input type="text" name="mentor_name" id="mentor_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['mentor_name']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="Hod_name">HOD Name</label>
                <input type="text" name="Hod_name" id="Hod_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['Hod_name']; }?>"/>
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="plant">Plant</label>
     <select name="plant" class="form-control">
            <option>SSO</option>
            <option>DTA</option>
            <option>C2-Complex</option>
            <option>SEZ</option>
            <option>Other</option>
            <option></option>
           
   </select>
</div>
     
      <div class="col-md-6">
                <label for="Hod_name">Project Title</label>
                <input type="text" name="project_title" id="Hod_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['project_title']; }?>"/>
              </div>
            </div>
          </div><br>

          <div class="container-login100-form-btn" align="center">
            <button class ="btn btn-primary"   name="submit">
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

    </div><br><br><br>
</body>
</html> 
<?php
}
else
{
  redirect('User/user_index');
}
}
else
{
 redirect("User/user_login");
}
?>
<?php
include 'footer.php';
?>
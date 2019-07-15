<?php
if(isset($_SESSION['admin_name']))
{
   if(isset($_SESSION['lc_id']))
  {
?>
<?php
include'admin_dashboard.php';
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
  <h4 style="text-align:center"><u><b>Vocational Trainee Attendance Sheet</b></u></h4>
 <div class="row"><br>

<form method="post" action="">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
</div> 
<!-- content area -->
  <div class="panel-heading">
        <h3 class="panel-title" >Trainee Detail</h3>     
      </div><br>
    <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="Ep_no">Ep No.</label>
                <input type="text" name="Ep_no" id="Ep_no" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['Ep_no']; }?>" />
                
              </div>
              <div class="col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['name']; }?>"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['email']; }?>"/>
                
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
                <input type="text" name="mentor_name" id="method" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['mentor_name']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="hod_name">HOD Name</label>
                <input type="text" name="hod_name" id="hod_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['hod_name']; }?>"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="project_title">Project Title</label>
                <input type="text" name="project_title" id="project_title" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['project_title']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="plant">Plant</label>
                <input type="text" name="plant" id="plant" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['plant']; }?>"/>
              </div>
            </div>  
          </div>
          <br>


          
      <div class="panel-heading">
        <h3 class="panel-title" >Attendance Details</h3>     
      </div><br>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['date']; }?>"/>
              </div>
              
            <div class="col-md-6">
                <label for="field">Attendance</label>
     <select name="attendance" id="attendance" class="form-control">
            <option>Present</option>
            <option>Absent</option>
            <option>Half Day Present</option>
            <option>3/4 th Day Present</option>
   </select>
</div>



            </div>  
          </div>
      
          
         <div class ="form-group">
            <div class="row">
             
                <div class="col-md-6">
                <label for="in_time">In-Time</label>
                <input type="time" name="in_time" id="in_time" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['in_time']; }?>"/>
              </div>
               <div class="col-md-6">
                <label for="out_time">Out Time</label>
                <input type="time" name="out_time" id="out_time" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['out_time']; }?>"/>
              </div>

              
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="remark">Remark</label>
                <input type="tetx" name="remark" id="remark" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['remark']; }?>"/>
              </div>
            </div>  
          </div>

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

    </div><br>
</body>
</html> 
<?php
}
else
{
  redirect("admin/lc_login");
}
}
else
{
  redirect("admin/admin_login");
}
?>
<?php
include 'footer.php';
?>
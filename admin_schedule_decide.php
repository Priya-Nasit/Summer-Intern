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
  <h4 style="text-align:center"><u><b>Training Schedule</b></u></h4>
 <div class="row"><br>

<form method="post" action="">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
</div> 
<!-- content area -->
<div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                 <label for="from"><h5>Mentor Name</h5></label>
                <input type="text" name="mentor_name" id="mentor_name" class="form-control" placeholder="Enter Mentor Name" value="<?php if(isset($_POST['submit'])) { echo $_POST['mentor_name']; }?>" />
              </div>
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
            </div>  
          </div>

 <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                 <label for="from"><h5>From</h5></label>
                <input type="date" name="date_from" id="date_from" class="form-control" placeholder="Enter date from which schedule is follow" value="<?php if(isset($_POST['submit'])) { echo $_POST['date_from']; }?>" />
              </div>
              <div class="col-md-6">
                <label for="to"><h5>To</h5></label>
                <input type="date" name="date_to" id="date_to" class="form-control" placeholder="Upto this date schedule is follow" value="<?php if(isset($_POST['submit'])) { echo $_POST['date_to']; }?>" />
              </div>
            </div>  
          </div>

    <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>9:00 am to 10:00 am</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m1" id="m1" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m1']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t1" id="t1" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t1']; }?>" />
                </div>
              <div class="col-md-2">
                <input type="text" name="w1" id="w1" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w1']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th1" id="th1" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th1']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f1" id="f1" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f1']; }?>" />
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>10:00 am to 11:00 am</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m2" id="m2" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m2']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t2" id="t2" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t2']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w2" id="w2" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w2']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th2" id="th2" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th2']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f2" id="f2" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f2']; }?>" />
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>11:00 am to 12:00 </h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m3" id="m3" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m3']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t3" id="t3" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t3']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w3" id="w3" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w3']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th3" id="th3" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th3']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f3" id="f3" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f3']; }?>" />
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>12:01 pm to 1:00 pm</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m4" id="m4" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m4']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t4" id="t4" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t4']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w4" id="w4" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w4']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th4" id="th4" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th4']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f4" id="f4" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f4']; }?>" />
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>1:00 pm to 2:00 pm</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m5" id="m5" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m5']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t5" id="t5" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t5']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w5" id="w5" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w5']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th5" id="th5" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th5']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f5" id="f5" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f5']; }?>" />
              </div>
            </div>  
          </div>
          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>2:00 pm to 3:00 pm</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m6" id="m6" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m6']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t6" id="t6" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t6']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w6" id="w6" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w6']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th6" id="th6" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th6']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f6" id="f6" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f6']; }?>" />
              </div>
            </div>  
          </div>
          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>3:00 pm to 4:00 am</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m7" id="m7" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m7']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t7" id="t7" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t7']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w7" id="w7" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w7']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th7" id="th7" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th7']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f7" id="f7" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f7']; }?>" />
              </div>
            </div>  
          </div>
          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>4:00 am to 5:00 am</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m8" id="m8" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m8']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t8" id="t8" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t8']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w8" id="w8" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w8']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th8" id="th8" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th8']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f8" id="f8" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f8']; }?>" />
              </div>
            </div>  
          </div>
          <div class ="form-group">
            <div class="row">
              <div class="col-md-2">
               <label for="Ep_no"><h5>5:00 am to 6:00 am</h5></label>
              </div>
              <div class="col-md-2">
                <input type="text" name="m9" id="m9" class="form-control" placeholder="Monday" value="<?php if(isset($_POST['submit'])) { echo $_POST['m9']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="t9" id="t9" class="form-control" placeholder="Tuesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['t9']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="w9" id="w9" class="form-control" placeholder="Wednesday" value="<?php if(isset($_POST['submit'])) { echo $_POST['w9']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="th9" id="th9" class="form-control" placeholder="Thursday" value="<?php if(isset($_POST['submit'])) { echo $_POST['th9']; }?>" />
              </div>
              <div class="col-md-2">
                <input type="text" name="f9" id="f9" class="form-control" placeholder="Friday" value="<?php if(isset($_POST['submit'])) { echo $_POST['f9']; }?>" />
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

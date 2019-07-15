<?php if(isset($_SESSION['email']))
{
  if(!isset($_SESSION['Ep_no']))
  {
?>
<?php
include 'user_dashboard.php';
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
 background-image: url("<?php echo base_url(); ?>assets/images/form_back5.jpg");
}
</style>
<div class="container">
  <h4 style="text-align:center"><u><b>Intern Deatils </b></u></h4>
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
                <input type="text" name="lastname" id="lastname" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['lastname']; }?>" >
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email']; }?>"/>
                
              </div>
              <div class="col-md-6">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" class="form-control" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['contact']; }?>" >
              </div>
            </div>  
          </div>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="birth_date">Birth-Date</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['birth_date']; }?>"/>               
              </div>

              <div class="col-md-6">
                <label for="height">Height</label>
                <input type="text" name="height" id="height" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['height']; }?>" />
              </div>
            </div> 
         </div>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="weight">Weight</label>
                <input type="text" name="weight" id="weight" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['weight']; }?>"/>               
              </div>

              <div class="col-md-6">
                <label for="identification_mark">Identification Mark</label>
                <input type="text" name="identification_mark" id="identification_mark" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['identification_mark']; }?>"/>
              </div>
            </div> 
         </div>

          <br>

        <div class="panel-heading">
          <h3 class="panel-title" >Other Deatils</h3>     
        </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="father_name">Father name</label>
                <input type="text" name="father_name" id="father_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['father_name']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="mother_name">Mother Name</label>
                <input type="text" name="mother_name" id="mother_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['mother_name']; }?>"/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="nationality">Nationality</label>
     <select name="nationality" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['nationality']; }?>">
           <option>China</option>
            <option>India</option>
            <option>Pakistan</option>
            <option>Indonesia</option>
            <option>Japan</option>
            <option>Bangladesh</option>
            <option>PhilippinesVietnam</option>
            <option>Vietnam</option>
            <option>Turkey</option>
            <option>Iran</option>
            <option>Thailand</option>
            <option>Myanmar</option>
            <option>South Korea</option>
            <option>Iraq</option>
            <option>Afghanistan</option>
            <option>Saudi Arabia</option>
            <option>Uzbekistan</option>
            <option>Malaysia</option>
            <option>Nepal</option>
            <option>Yemen</option>
            <option>North Korea</option>
            <option>Sri Lanka</option>
            <option>Kazakhstan</option>
            <option>Syria</option>
            <option>Cambodia</option>
            <option>Jordan</option>
            <option>Azerbaijan</option>
            <option>United Arab Emirates</option>
            <option>Tajikistan</option>
            <option>Israel</option>
            <option>Laos</option>
            <option>Kyrgyzstan</option>
            <option>Lebanon</option>
            <option>Turkmenistan</option>
            <option>Singapore</option>
            <option>State of Palestine</option>
            <option>Oman</option>
            <option>Georgia</option>
            <option>Kuwait</option>
            <option>Mongolia</option>
            <option>Armenia</option>
            <option>Qatar</option>
            <option>Bahrain</option>
            <option>Timor-Leste</option>
            <option>Cyprus</option>
            <option>Bhutan</option>
            <option>Maldives</option>
            <option>Brunei</option>
            <option>Other</option>
   </select>
</div>

              <div class="col-md-6">
                <label for="religion">Religion</label>
     <select name="religion" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['religion']; }?>">
            <option>Hinduism</option>
            <option>Buddhism</option>
            <option>Jainism</option>
            <option>Sikhism</option>
            <option>Other</option>
            
   </select>
</div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
             <div class="col-md-6">
                <label for="cast">Cast</label>
     <select name="cast" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['cast']; }?>">
            <option>Dalit</option>
            <option>Rajput</option>
            <option>Nai</option>
            <option>Gurjar</option>
            <option>Iyer</option>
            <option>Chettiar</option>
            <option>Bhishti</option>
            <option>Kayastha</option>
            <option>Sansi People</option>
            <option>Khatri</option>
            <option>Mahar</option>
            <option>Nair</option>
            <option>Kewat</option>
            <option>Jogi Faqir</option>
            <option>Labbay</option>
            <option>Narikurava</option>
            <option>Rayee</option>
            <option>Bharbhunja</option>
            <option>Qalandar</option>
            <option>Ahirwar</option>
            <option>Ezhava</option>
            <option>Devadiga</option>
            <option>Kaniyar</option>
            <option>Mirshikar</option>
            <option>Bhandari caste</option>
            <option>Soni</option>
            <option>Deshstha Brahmin</option>
            <option>Nagarathar</option>
            <option>Qassab</option>
            <option>Kuravar</option>
            <option>Patel</option>
            <option>Adaviyar</option>
            <option>Raut</option>
            <option>Agrawal</option>
            <option>Chhparband</option>
            <option>Muslim Dhobi</option>
            <option>Chik</option>
            <option>Devanga</option>
            <option>Mukkulathor</option>
            <option>Saliya</option>
            <option>Konar</option>
            <option>Elur Chetty</option>
            <option>Arora</option>
            <option>Salvi</option>
            <option>Halba</option>
            <option>Kalwar</option>
            <option>Kirar</option>
            <option>Lakhera</option>
            <option>Madiga</option>
            <option>Rayeen</option>
            <option>Other</option>
   </select>
</div>

              <div class="col-md-6">
               <br><label for="gender">Gender</label>
                <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
        <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="adhar_no">Adhar No.</label>
                <input type="text" name="adhar_no" id="adhar_no" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['adhar_no']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="licenses_no">License No.</label>
                <input type="text" name="licenses_no" id="licenses_no" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['licenses_no']; }?>"/>
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
             <div class="col-md-6">
                <label for="state">State</label>
     <select name="state" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['state']; }?>">
            <option>Delhi</option>
            <option>Uttar Pradesh</option>
            <option>Haryana</option>
            <option>Odisha</option>
            <option>Uttarakhand</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Bihar</option>
            <option>Kerala</option>
            <option>Andhra Pradesh</option>
            <option>Madhya Pradesh</option>
            <option>Gujarat</option>
            <option>West Bengal</option>
            <option>Karnataka</option>
            <option>Maharashtra</option>
            <option>Rajasthan</option>
            <option>Punjab</option>
            <option>Assam</option>
            <option>Himachal Pradesh</option>
            <option>Jharkhand</option>
            <option>Jammu and Kashmir</option>
            <option>Chhattisgarh</option>
            <option>Goa</option>
            <option>Manipur</option>
            <option>Mizoram</option>
            <option>Tripura</option>
            <option>Meghalaya</option>
            <option>Nagaland</option>
            <option>Telangana</option>
            <option>Arunachal Pradesh</option>
   </select>
</div>

              <div class="col-md-6">
                <label for="city">City</label>
     <select name="country" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['city']; }?>">
            <option>Ahmedabad</option>
            <option>Bhuj</option>
            <option>Patan</option>
            <option>Little Rann of Kutch</option>
            <option>Porbandar</option>
            <option>Somnath</option>
            <option>Gandhinagar</option>
            <option>Rajkot</option>
            <option>Lothal</option>
            <option>Uteliya</option>
            <option>Dwarka</option>
            <option>Junagadh</option>
            <option>Bharuch</option>
            <option>Mandvi</option>
            <option>Veraval</option>
            <option>Sasangir</option>
            <option>Bhavnagar</option>
            <option>Gondal</option>
            <option>Modhera</option>
            <option>Champaner and Pavagadh</option>
            <option>Surat</option>
            <option>Vadodara</option>
            <option>Jamnagar</option>
            <option>Palitana</option>
            <option>Zainabad</option>
            <option>Other</option>
   </select>
</div>

              
            </div>
          </div>

              <div class ="form-group">
                <div class="row">
              <div class="col-md-6">
                <label for="address">Current Address</label>
                <input type="text" name="address" id="address" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['address']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="pincode">Pincode</label>
                <input type="text" name="pincode" id="pincode" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['pincode']; }?>"/>
              </div>
            </div>  
          </div><br>
          
          <div class="panel-heading">
            <h3 class="panel-title" >Reference Details(Relative Working in this site)</h3>     
          </div><br>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="ref1_name">Reference-1 Name</label>
                <input type="text" name="ref1_name" id="ref1_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ref1_name']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="ref1_address">Reference-1 Address</label>
                <input type="text" name="ref1_address" id="ref1_address" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ref1_address']; }?>"/>
              </div>
            </div>
          </div>
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="ref1_contact">Reference-1 Contact</label>
                <input type="text" name="ref1_contact" id="ref1_contact" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ref1_contact']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="ref2_name">Reference-2 Name</label>
                <input type="text" name="ref2_name" id="ref2_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ref2_name']; }?>"/>
              </div>
            </div>
          </div>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="ref2_address">Reference-2 Address</label>
                <input type="text" name="ref2_address" id="ref2_address" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ref2_address']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="ref2_contact">Reference-2 Contact</label>
                <input type="text" name="ref2_contact" id="ref2_contact" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ref2_contact']; }?>"/>
              </div>
            </div>
          </div>
          <br>

          
        
          <div class="container-login100-form-btn" align="center">
          <input type="submit" value="submit" name="submit" class="btn btn-primary" id="show_div">
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
 redirect("User/user_index");
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
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
  color: white;
 background-size: 100%;
 background-size: cover;
 background-repeat: no-repeat;
 background-position: fixed;
 background-image: url("<?php echo base_url(); ?>assets/images/form_back5.jpg");
}
</style>
<div class="container">
  <h4 style="text-align:center"><u><b>APPLICATION FORM FOR LAPTOP ENTRY PERMIT</b></u></h4>
 <div class="row"><br>

<form method="post" action="">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
</div> 
<!-- content area -->
  <div class="panel-heading">
        <h3 class="panel-title" >Laptop Details</h3>     
      </div><br>
    <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="make">Make</label>
                <input type="text" name="make" id="make" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['make']; }?>" required/>
                
              </div>
              <div class="col-md-6">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['model']; }?>" required/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="serial_no">Serial Number</label>
                <input type="text" name="serial_no" id="serial_no" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['serial_no']; }?>" required/>
                
              </div>
              <div class="col-md-6">
                <label for="colour_laptop">Colour of Body</label>
                <input type="text" name="colour_laptop" id="colour_laptop" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['colour_laptop']; }?>" required/>
              </div>
            </div>  
          </div><br>

        <div class="panel-heading">
          <h3 class="panel-title" >Hardware Configuration</h3>     
        </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="processor">Processor</label>
                <input type="text" name="processor" id="father_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['processor']; }?>" required/>
              </div>

              <div class="col-md-6">
                <label for="hard_disk">Hard Disk</label>
                <input type="text" name="hard_disk" id="hard_disk" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['hard_disk']; }?>" required/>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="ram">RAM</label>
                <input type="text" name="ram" id="ram" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['ram']; }?>" required/>
              </div>

              <div class="col-md-6">
                <label for="os">Operating System</label>
                <input type="text" name="os" id="os" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['os']; }?>" required/>
              </div>
            </div>
          </div><br>

           <div class="panel-heading">
            <h3 class="panel-title" >Accessories</h3>     
          </div><br>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="acces_1">Accessories 1</label>
                <input type="text" name="acces_1" id="acces_1" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['acces_1']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="acces_2">Accessories 2</label>
                <input type="text" name="acces_2" id="acces_2" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['acces_2']; }?>"/>
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="acces_3">Accessories 3</label>
                <input type="text" name="acces_3" id="acces_3" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['acces_3']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="acces_4">Accessories 4</label>
                <input type="text" name="acces_4" id="acces_4" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['acces_4']; }?>"/>
              </div>
            </div>
          </div><br>

          <div class="panel-heading">
            <h3 class="panel-title" >Other Details</h3>     
          </div><br>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6"><br>
                <h4><label for="purpose">Purpose :-</label>
                 <label for="firstname"><?php echo "Internship Purpose"; ?></label></h4>
              </div>

              <div class="col-md-6"><br>
                <h4><label for="firstname">Name of Owner :-</label>
                <label for="firstname"><?php if(isset($_SESSION['email'])) { echo $_SESSION['firstname'];echo" ". $_SESSION['lastname']; }?></label></h4>
               
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="signature">Signature</label>
                <input type="text" name="signature" id="signature" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['signature']; }?>"/>
              </div>

              <div class="col-md-6">
                <label for="dept">Department</label>
                <input type="text" name="dept" id="dept" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['dept']; }?>"required/>
              </div>
            </div>
          </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="company">Company</label>
                <input type="text" name="company" id="company" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['company']; }?>"required/>
              </div>

              <div class="col-md-6"><br>
                <h4><label for="Ep_no">Ep No. / Ec No. :</label>
                <label for="Ep_no"><?php if(isset($_SESSION['email'])) { echo $_SESSION['Ep_no'];}?></label></h4>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="hod_name">Name of HOD </label>
                <input type="text" name="hod_name" id="hod_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['hod_name']; }?>" required/>
              </div>

              <div class="col-md-6">
                <label for="hod_sign">Signature of HOD</label>
                <input type="text" name="hod_sign" id="hod_sign" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['hod_sign']; }?>"/>
              </div>
            </div>
          </div><br>

          <div class="panel-heading">
            <h4 class="panel-title" style="text-align:center"><u>FOR USE OF SECURITY</u></h4>     
          </div><br>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="sticker_name">Sticker No.</label>
                <input type="text" name="sticker_name" id="sticker_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['sticker_name']; }?>" />
              </div>

              <div class="col-md-6">
                <label for="valid_upto">Valid Upto</label>
                <input type="text" name="valid_upto" id="valid_upto" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['valid_upto']; }?>" />
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="security_sign">Security Signature</label>
                <input type="text" name="security_sign" id="security_sign" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['security_sign']; }?>" />
              </div>

              <div class="col-md-6">
                <label for="security_name">Name of Duty Officer</label>
                <input type="text" name="security_name" id="security_name" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['security_name']; }?>" />
              </div>
            </div>
          </div><br>
        
          <div class="container-login100-form-btn" align="center">
          <input type="submit" value="submit" name="submit" class="btn btn-primary" >
          </div>
          <!-- Trigger the modal with a button -->
    </form>




 <?php 
     if(isset($_POST['submit']))
      {
      if($_POST['make']!=NULL&&$_POST['model']!=NULL&&$_POST['serial_no']!=NULL&&$_POST['colour_laptop']!=NULL&&$_POST['processor']!=NULL&&$_POST['hard_disk']!=NULL&&$_POST['ram']!=NULL&&$_POST['os']!=NULL&&$_POST['dept']!=NULL&&$_POST['company']!=NULL&&$_POST['hod_name']!=NULL)
      {  
      ?>      
  <button type="button" align="center" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Show Details</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" id="modal-dialog">
      <div class="modal-content">
        <div class="modal-header"></div>
        <div class="modal-body">
         
         <title>Tax calculation</title>
<style type="text/css">
  body{
  font-family: "Lato",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.72222;
  }

  .tax-data {
    background: #F7F7F7;
    padding: 20px;
    font-size: 18px;
    margin-left: 90px;
  }

    .tax-data .sub-title {
    text-align: center;
    font-size: 30px;
  margin:auto;    
  }

  p {
    margin: 0;
    padding: 0;
    font-weight: normal;
    line-height: normal;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
  }

  .tax-data .left {
    padding: 10px;
    display: inline-block;
  } 

  .tax-data .right {
    padding: 10px;
    display: inline-block;
    float: right;
    color: #38acc9;
    position: absolute;
    right: 32px;
}

  .data-btn{
  text-align:center;
  }
</style>

<div class="tax-data col-md-10 "><br><br>
            <p class="sub-title">APPLICATION FORM FOR LAPTOP ENTRY PERMIT</p>
            <div>
               <h4 style="text-align: center;">Laptop Details</h4>
                <p><span class="left">Make</span> <span class="right"><span id="company"><?php echo $_POST['make']?></span></span></p>
                <p><span class="left">Model</span> <span class="right"><span id="company"><?php echo $_POST['model']?></span></span></p>
                <p><span class="left">Serial Number</span> <span class="right"><span id="company"><?php echo $_POST['serial_no']?></span></span></p>
                <p><span class="left">Colour Of Body</span> <span class="right"><span id="company"><?php echo $_POST['colour_laptop']?></span></span></p>
                
                <h4 style="text-align: center;">Hardware Configuration</h4>
                <p><span class="left">Processor</span> <span class="right"><span id="company"><?php echo $_POST['processor']?></span></span></p>
                <p><span class="left">Hard Dik</span> <span class="right"><span id="company"><?php echo $_POST['hard_disk']?></span></span></p>
                <p><span class="left">RAM</span> <span class="right"><span id="company"><?php echo $_POST['ram']?></span></span></p>
                <p><span class="left">Operating System</span> <span class="right"><span id="company"><?php echo $_POST['os']?></span></span></p>

               <h4 style="text-align: center;">Accessories</h4>
                <p><span class="left">Accessories 1</span> <span class="right"><span id="acces_1"><?php echo $_POST['acces_1']?></span></span></p>
                <p><span class="left">Accessories 2</span> <span class="right"><span id="acces_2"><?php echo $_POST['acces_2']?></span></span></p>
                <p><span class="left">Accessories 3</span> <span class="right"><span id="acces_3"><?php echo $_POST['acces_3']?></span></span></p>
                <p><span class="left">Accessories 4</span> <span class="right"><span id="acces_4"><?php echo $_POST['acces_4']?></span></span></p>

                 <h4 style="text-align: center;">Other Details</h4>  
                 <p><span class="left">Purpose</span> <span class="right"><span id="purpose"><?php echo "Internship Purpose";?></span></span></p>
                <p><span class="left">Name Of Owner</span> <span class="right"><span><?php if(isset($_SESSION['email'])) { echo $_SESSION['firstname'];echo" ". $_SESSION['lastname']; }?></span></span></p>
                <p><span class="left">Signature</span> <span class="right"><span id=""><?php echo "";?></span></span></p>
                <p><span class="left">Department</span> <span class="right"><span id="dept"><?php echo $_POST['dept']?></span></span></p>
                <p><span class="left">Company</span> <span class="right"><span id="company"><?php echo $_POST['company']?></span></span></p>
                <p><span class="left">EC No./EP No.</span> <span class="right"><span id="Ep_no"><?php if(isset($_SESSION['email'])) { echo $_SESSION['Ep_no'];}?></span></span></p>

                <p><span class="left">Name of HOD</span> <span class="right"><span id="hod_name"><?php echo $_POST['hod_name']?></span></span></p>
                <p><span class="left">Signature of HOD</span> <span class="right"><span id="hod_sign"><?php echo $_POST['hod_sign']?></span></span></p>


                <h4 style="text-align: center;"><u>FOR USE OF SECURITY</u></h4>
                <p><span class="left">Sticker No.</span> <span class="right"><span id="sticker_name"><?php echo""?></span></span></p>
                <p><span class="left">Valid Upto</span> <span class="right"><span id="valid_upto"><?php echo ""?></span></span></p>
                <p><span class="left">Signature of Duty Officer</span> <span class="right"><span id="security_sign"><?php echo ""?></span></span></p>
                <p><span class="left">Name of Duty Officer</span> <span class="right"><span id="security_name"><?php echo ""?></span></span></p> 
            </div>
        </div>


</div>
</div>
</div>
</div>



<div class="modal-footer">
            <input id="pdf-button" type="button" value="Download PDF" onclick="downloadPDF()" />
              <!--<button onclick="generate()">Generate PDF</button>-->

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
 <?php
     }
     }
?>
</div>

<br>
</body>
</html> 




<script src="https://docraptor.com/docraptor-1.0.0.js"></script>
<script>
    var downloadPDF = function() {
      DocRaptor.createAndDownloadDoc("YOUR_API_KEY_HERE", {
        test: true, // test documents are free, but watermarked
        type: "pdf",
        document_content: document.querySelector('#modal-dialog').innerHTML, // use this page's HTML
        // document_content: "<h1>Hello world!</h1>",               // or supply HTML directly
        // document_url: "http://example.com/your-page",            // or use a URL
        // javascript: true,                                        // enable JavaScript processing
        // prince_options: {
        //   media: "screen",                                       // use screen styles instead of print styles
        // }
      })
    }
  </script>




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

     
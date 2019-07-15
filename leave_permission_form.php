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
  <h4 style="text-align:center"><u><b>APPLICATION FORM FOR LEAVE PERMIT</b></u></h4>
 <div class="row"><br>

<form method="post" action="">
  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
</div> 
<!-- content area -->
  <div class="panel-heading">
        <h3 class="panel-title" ><u>Personal Details</u></h3>     
      </div><br>
    <div class ="form-group">
            <div class="row">
             <div class="col-md-6">
                <h4><label for="firstname">Name of Owner :-</label>
                <label for="firstname"><?php if(isset($_SESSION['email'])) { echo $_SESSION['firstname'];echo" ". $_SESSION['lastname']; }?></label></h4>
              </div>            

              <div class="col-md-10">
                <h4><label for="Ep_no">Ep no :-</label>
                <label for="Ep_no"><?php if(isset($_SESSION['email'])) { echo $_SESSION['Ep_no']; }?></label></h4>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
            <h4><label for="email">Email:-</label>
                <label for="email"><?php if(isset($_SESSION['email'])) { echo $_SESSION['email'];}?></label></h4>
              </div>

               <div class="col-md-10">
                <h4><label for="plant">Plant:-</label>
                <label for="plant"><?php if(isset($_SESSION['email'])) { echo $_SESSION['plant'];}?></label></h4>
              </div>
            </div>  
          </div>

           <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
               <h4><label for="contact">Contact:-</label>
                <label for="contact"><?php if(isset($_SESSION['email'])) { echo $_SESSION['contact'];}?></label></h4>
              </div>
            </div>  
          </div><br>

       

        <div class="panel-heading">
          <h3 class="panel-title" ><u>Mentor Details</u></h3>     
        </div><br>

         <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                
            <h4><label for="mentor_name">Mentor Name:-</label>
                <label for="mentor_name"><?php if(isset($_SESSION['email'])) { echo $_SESSION['mentor'];}?></label></h4>
              </div>
            </div>  
          </div>

          <div class ="form-group">
            <div class="row">

              <div class="col-md-6">
                <label for="mentor_contact">Mentor Contact No.</label>
                <input type="text" name="mentor_contact" id="mentor_contact" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['mentor_contact']; }?>" required/>
              </div>
              <div class="col-md-6">
                <label for="mentor_sign">Mentor Sign</label>
                <input type="text" name="mentor_sign" id="mentor_sign" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['mentor_sign']; }?>"/>
              </div>
            </div>
          </div><br>

           <div class="panel-heading">
            <h3 class="panel-title" ><u>Leave Information</u></h3>     
          </div><br>
          
          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="type_of_leave">Type Of Leave</label>
     <select name="type_of_leave" class="form-control">
            <option>Seak Leave</option>
            <option>Personal Leave</option>
            <option>Temporary disability leave</option>
            <option>Community serviceor volunteer work</option>
            <option>Adverse weather</option>
   </select>
</div>

              <div class="col-md-6">
                <label for="no_of_leave">No. Of Leave</label>
                <input type="text" name="no_of_leave" id="no_of_leave" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['no_of_leave']; }?>" required/>
              </div>
            </div>
          </div>

          <div class ="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="reason_leave">Reason For Leave</label>
                <input type="text" name="reason_leave" id="reason_leave" class="form-control" value="<?php if(isset($_POST['submit'])) { echo $_POST['reason_leave']; }?>" required/>
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
      if($_POST['mentor_contact']!=NULL&&$_POST['type_of_leave']!=NULL&&$_POST['no_of_leave']!=NULL&&$_POST['reason_leave']!=NULL)
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

<div class="tax-data col-md-10 ">
            <p class="sub-title">APPLICATION FORM FOR LEAVE PERMIT</p>
            <div>
               <h4 style="text-align: center;">Personal Details Details</h4>
               <p><span class="left">Name Of Owner</span> <span class="right"><span><?php if(isset($_SESSION['email'])) { echo $_SESSION['firstname'];echo" ". $_SESSION['lastname']; }?></span></span></p>
               <p><span class="left">Ep No</span> <span class="right"><span id="Ep_no"><?php if(isset($_SESSION['email'])) { echo $_SESSION['Ep_no'];}?></span></span></p>
                 <p><span class="left">Email</span> <span class="right"><span><?php if(isset($_SESSION['email'])) { echo $_SESSION['email'];}?></span></span></p>
                 <p><span class="left">Plant</span> <span class="right"><span id="plant"><?php if(isset($_SESSION['email'])) { echo $_SESSION['plant'];}?></span></span></p></span></span></p>
                 <p><span class="left">Contact</span> <span class="right"><span><?php if(isset($_SESSION['contact'])) { echo $_SESSION['firstname'];}?></span></span></p>
                
                <h4 style="text-align: center;">Mentor Details</h4>
                <p><span class="left">Mentor Name</span> <span class="right"><span id="mentor_name"><?php if(isset($_SESSION['email'])) { echo $_SESSION['mentor'];}?></span></span></p></span></span></p>
                <p><span class="left">Mentor Contact</span> <span class="right"><span id="mentor_contact"><?php echo $_POST['mentor_contact']?></span></span></p>
                <p><span class="left">Mentor Signature</span> <span class="right"><span id="company"><?php echo ""?></span></span></p>

               <h4 style="text-align: center;">Leave Information</h4>
                <p><span class="left">Type Of leave</span> <span class="right"><span id="acces_1"><?php echo $_POST['type_of_leave']?></span></span></p>
                <p><span class="left">No. Of leave</span> <span class="right"><span id="no_of_leave"><?php echo $_POST['no_of_leave']?></span></span></p>
                <p><span class="left">Reason for leave</span> <span class="right"><span id="reason_leave"><?php echo $_POST['reason_leave']?></span></span></p>
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
      </div>
    </div>
  </div>
</div>
</div>

      </div>

    </div><br>
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

     
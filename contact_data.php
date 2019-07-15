<?php
  if(isset($_SESSION['admin_name']))
  {
    if(isset($_SESSION['superadmin_id']))
  {
?>
<?php
include 'admin_dashboard.php';
?>


<body>
    <div class="container">
        <h4 style="color: black;text-align: center"><u>Contact Details</u></h4><br>
  <h5 style="color: red">Note*:Here Colored Row Show Your Today's Contact/Query  List</h5>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon">Search</span>
          <input type="text" name="search_text" id="search_text" placeholder="Search Details here" class="form-control" />
        </div>
      </div>
      <div id="result"></div>
    </div>
    <div style="clear:both"></div>
    <br />
    <br />
    <br />
    <br />
  </body>
</html>


<script>
$(document).ready(function(){

  load_data();

  function load_data(query)
  {
    $.ajax({
      url:"<?php echo base_url(); ?>admin/contact_data_fetch",
      method:"POST",
      data:{query:query},
      success:function(data){
        $('#result').html(data);
      }
    })
  }

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
      load_data(search);
    }
    else
    {
      load_data();
    }
  });
});
</script>
<?php
}
else
{
  redirect("admin/superadmin_login");
}
}
else
{
  redirect("admin/admin_login");
}
?>
<?php
include 'footer_fixed.php';
?>

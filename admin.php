<?php
class admin extends CI_Controller
{

  public function __construct() {
        parent:: __construct();
        $this->load->library('pagination');
        $this->load->helper('url');
    }

function index()
        {

         $this->load->library('email');
         $this->load->helper('url');
         $this->load->helper('form');

        $config= Array(
            'protocol'  =>'localhost',
            'smtp_host' => 'localhost',
            'smtp_port' => '25',
            'smtp_user'=>  'root',
            'smtp_pass' =>''
            );

        $this->load->library('email','$config');
        $this->email->set_newline("\r\n");
        $this->email->from('nisha@gmail.com','nisha');
        $this->email->to('priyanasit@gmail.com');
        $this->email->subject('this is email with subject');
        $this->email->message('it s working properly');

        if($this->email->send())
        {
            echo "your email send";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
/*public function index()
{
  $this->load->library('email');
  $this->email->from('priyanasit@gmail.com','priya');
  $this->email->to('priyanasit5399@gmail.com');
  $this->email->CC('priyanasit@gmail.com');
  $this->email->subject('Email Test');
  $this->email->message('Testing the email class..');

  if($this->email->send())
  {
      $data['msg']="email sent !!";
  }
  else
  {
   $data['msg']="email was not sent";
  }
   $this->load->view('email',$data);
}*/



 function intern_attendance_report()
  {
    $this->load->view('intern_attendance_report');
  }

  function intern_attendance_report_fetch()
  {
    $output = '';
    $query = '';
    $this->load->model('user_model');
    if($this->input->post('query'))
    {
      $query = $this->input->post('query');
    }
    $data = $this->user_model->intern_attendance_report_fetch_data($query);
    $output .= '
    <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tr style="background-color:#6c757d">
              <th>Ep No.</th>
              <th>Name</th>
              <th>Email</th>
              <th>Mentor Name</th>
              <th>HOD Name</th>
              <th>Plant</th>
              <th>Project Name</th>
              <th>View Details</th> 
            </tr>
    ';
    if($data->num_rows() > 0)
    {
      date_default_timezone_set("Asia/kolkata");
      $date=date('Y-m-d');
      foreach($data->result() as $row)
      {
      $training_start_date=date('Y-m-d', strtotime($row->training_start_date));
    $training_end_date=date('Y-m-d', strtotime($row->training_end_date));
    if($date >= $training_start_date && $date<= $training_end_date)
     { 
     if($row->date==$date)
     {
        $output .= '
            <tr style="background-color:#cff01a7a">
              <td>'.$row->Ep_no.'</td>
              <td>'.$row->firstname.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->mentor_name.'</td>
              <td>'.$row->Hod_name.'</td>
              <td>'.$row->plant.'</td>
               <td>'.$row->project_title.'</td>
              <td>'.'<a class="btn btn-info" href="admin_lc_attendance?email=' . $row->email. '">View' .'</a>'.'</td>
            </tr>';
      }
     else
      {
        $output .= '
            <tr>
              <td>'.$row->Ep_no.'</td>
              <td>'.$row->firstname.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->mentor_name.'</td>
              <td>'.$row->Hod_name.'</td>
              <td>'.$row->plant.'</td>
               <td>'.$row->project_title.'</td>
              <td>'.'<a class="btn btn-info" href="admin_lc_attendance?email=' . $row->email. '">View' .'</a>'.'</td>
            </tr> ';
      }
    }
  }
}
    else
    {
      $output .= '<tr>
              <td colspan="5">No Data Found</td>
            </tr>';
    }
    $output .= '</table>';
    echo $output;
  }


  function feedback_data()
  {
    $this->load->view('feedback_data');
  }

  function feedback_data_fetch()
  {
    $output = '';
    $query = '';
    $this->load->model('user_model');
    if($this->input->post('query'))
    {
      $query = $this->input->post('query');
    }
    $data = $this->user_model->feedback_data_fetch_data($query);
    $output .= '
    <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tr style="background-color:#6c757d">
              <th>Name.</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Feedback</th> 
              <th>Date</th> 
              <th>Time</th> 
            </tr>
    ';
    if($data->num_rows() > 0)
    {
      date_default_timezone_set("Asia/kolkata");
      $date=date('Y-m-d');
      foreach($data->result() as $row)
      {
        $new_date=date('Y-m-d', strtotime($row->date. ' + 4 days'));
        if($date < $new_date)
     { 
     if($row->date==$date)
     {
        $output .= '

            <tr style="background-color:#cff01a7a">
              <td>'.$row->username.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->feedback.'</td>
              <td>'.$row->date.'</td>
              <td>'.$row->time.'</td>
            </tr>
        ';
      }
      else
      {
       $output .= '

            <tr>
              <td>'.$row->username.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->feedback.'</td>
              <td>'.$row->date.'</td>
              <td>'.$row->time.'</td>
             
            </tr>
        ';
      }
    }
    }
  }
    else
    {
      $output .= '<tr>
              <td colspan="5">No Data Found</td>
            </tr>';
    }
    $output .= '</table>';
    echo $output;
  }


  function contact_data()
  {
    $this->load->view('contact_data');
  }

  function contact_data_fetch()
  {
    $output = '';
    $query = '';
    $this->load->model('user_model');
    if($this->input->post('query'))
    {
      $query = $this->input->post('query');
    }
    $data = $this->user_model->contact_data_fetch_data($query);
    $output .= '
    <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tr style="background-color:#6c757d">
              <th>Name.</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Message</th> 
              <th>Date</th> 
              <th>Time</th> 
            </tr>
    ';
    if($data->num_rows() > 0)
    {
      date_default_timezone_set("Asia/kolkata");
      $date=date('Y-m-d');
      foreach($data->result() as $row)
      {
        $new_date=date('Y-m-d', strtotime($row->date. ' + 4 days'));
        if($date < $new_date)
     { 
     if($row->date==$date)
     {
        $output .= '

            <tr style="background-color:#cff01a7a">
              <td>'.$row->username.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->message.'</td>
              <td>'.$row->date.'</td>
              <td>'.$row->time.'</td>
             
            </tr>
        ';
      }
      else
      {
       $output .= '

            <tr>
              <td>'.$row->username.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->message.'</td>
              <td>'.$row->date.'</td>
              <td>'.$row->time.'</td>
             
            </tr>
        ';
      }
    }
    }
  }
    else
    {
      $output .= '<tr>
              <td colspan="5">No Data Found</td>
            </tr>';
    }
    $output .= '</table>';
    echo $output;
  }
  

function internship_data()
  {
    $this->load->view('internship_data');
  }

  function internship_data_fetch()
  {
    $output = '';
    $query = '';
    $this->load->model('user_model');
    if($this->input->post('query'))
    {
      $query = $this->input->post('query');
    }
    $data = $this->user_model->internship_data_fetch_data($query);
    $output .= '
    <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tr style="background-color:#6c757d">
     <th>FirstName</th>
    <th>LastName</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Ep No.</th>
    <th>College Name</th>
    <th>College Address</th>
    <th>Education</th>
    <th>Field</th>
    <th>Year Completed</th>
    <th>Passing Year</th>
    <th>Internship Period</th>
    <th>Training Start Date</th>
    <th>Training End Date</th>
    <th>Discipline</th>
    <th>Mentor Name</th>
    <th>Hod Name</th>
    <th>Plant</th>
    <th>Date</th>
    <th>Time</th>  
    </tr>
    ';
    if($data->num_rows() > 0)
    {
      date_default_timezone_set("Asia/kolkata");
      $date=date('Y-m-d');
      foreach($data->result() as $row)
      {
        $training_start_date=date('Y-m-d', strtotime($row->training_start_date));
    $training_end_date=date('Y-m-d', strtotime($row->training_end_date));
    if($date >= $training_start_date && $date<= $training_end_date)
     { 
     if($row->date==$date)
     {
        $output .= '

            <tr style="background-color:#cff01a7a">
              <td>'.$row->firstname.'</td>
              <td>'.$row->lastname.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->Ep_no.'</td>
              <td>'.$row->college_name.'</td>
              <td>'.$row->college_address.'</td>
              <td>'.$row->education.'</td>
              <td>'.$row->field.'</td>
              <td>'.$row->year_completed.'</td>
              <td>'.$row->passing_year.'</td>
              <td>'.$row->internship_period.'</td>
              <td>'.$row->training_start_date.'</td>
              <td>'.$row->training_end_date.'</td>
              <td>'.$row->discipline.'</td>
              <td>'.$row->mentor_name.'</td>
              <td>'.$row->Hod_name.'</td>
              <td>'.$row->plant.'</td>
             <td>'.$row->date.'</td>
             <td>'.$row->time.'</td>
            </tr>
        ';
      }
      else
      {
       $output .= '

            <tr>
             <td>'.$row->firstname.'</td>
              <td>'.$row->lastname.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->Ep_no.'</td>
              <td>'.$row->college_name.'</td>
              <td>'.$row->college_address.'</td>
              <td>'.$row->education.'</td>
              <td>'.$row->field.'</td>
              <td>'.$row->year_completed.'</td>
              <td>'.$row->passing_year.'</td>
              <td>'.$row->internship_period.'</td>
              <td>'.$row->training_start_date.'</td>
              <td>'.$row->training_end_date.'</td>
              <td>'.$row->discipline.'</td>
              <td>'.$row->mentor_name.'</td>
              <td>'.$row->Hod_name.'</td>
              <td>'.$row->plant.'</td>
             <td>'.$row->date.'</td>
             <td>'.$row->time.'</td>
            </tr>
        ';
      }
    }
    }
  }
    else
    {
      $output .= '<tr>
              <td colspan="5">No Data Found</td>
            </tr>';
    }
    $output .= '</table>';
    echo $output;
  }


/*function temporary_pass()
  {
    $this->load->view('temporary_pass');
  }

  function temporary_pass_fetch()
  {
    $output = '';
    $query = '';
    $this->load->model('user_model');
    if($this->input->post('query'))
    {
      $query = $this->input->post('query');
    }
    $data = $this->user_model->temporary_pass_fetch_data($query);
    $output .= '
    <div class="table-responsive">
          <table class="table table-bordered table-striped">
            <tr>
     <th style="background-color:#6c757d">Id</th>
    <th style="background-color:#6c757d">Firstname</th>
    <th style="background-color:#6c757d">Lastname</th>
    <th style="background-color:#6c757d">Email</th>
    <th style="background-color:#6c757d">Contact</th>
    <th style="background-color:#6c757d">Request No</th>
    <th style="background-color:#6c757d">Adhar/Licenses No.</th>
     <th style="background-color:#6c757d">Extra Day</th>
    <th style="background-color:#6c757d">Username</th>  
    <th style="background-color:#6c757d">Password</th>
    <th style="background-color:#6c757d">Date</th>
    <th style="background-color:#6c757d">Time</th>
    <th style="background-color:#6c757d">Update/Delete</th>
            </tr>
    ';
    if($data->num_rows() > 0)
    {
      date_default_timezone_set("Asia/kolkata");
      $date=date('Y-m-d');
      foreach($data->result() as $row)
      {
        $validity=$row->validity;
     if($row->date==$date)
     {
      $new_date=date('Y-m-d', strtotime($row->date. " + $validity days"));
        $output .= '

            <tr>
              <td style="background-color:#cff01a7a">'.$row->id.'</td>
              <td style="background-color:#cff01a7a">'.$row->firstname.'</td>
              <td style="background-color:#cff01a7a">'.$row->lastname.'</td>
              <td style="background-color:#cff01a7a" >'.$row->email.'</td>
              <td style="background-color:#cff01a7a">'.$row->contact.'</td>
              <td style="background-color:#cff01a7a">'.$row->request_no.'</td>
              <td style="background-color:#cff01a7a">'.$row->adhar_licenses_no.'</td>
              <td style="background-color:#cff01a7a">'.$row->validity.'</td>
             <td style="background-color:#cff01a7a">'.$row->username.'</td>
             <td style="background-color:#cff01a7a">'.$row->password.'</td>
             <td style="background-color:#cff01a7a">'.$row->date.'</td>
             <td style="background-color:#cff01a7a">'.$row->time.'</td> 
             <tr>';
if($date<=$new_date)
      {
       echo "<td>".'<a class="btn btn-info" href="security_update?email=' . $row->email . '">Edit' . '</a>'.'<a class="btn btn-success" href="security_delete?id=' . $row->id . '">Remove' . '</a>'."</td>";
      }
      else
      {
        echo "<td>"." "."</td>";
      }
      }
      else
      {
        $new_date=date('Y-m-d', strtotime($row->date. " + $validity days"));
       $output .= '

            <tr>
            <td>'.$row->id.'</td>
             <td>'.$row->firstname.'</td>
              <td>'.$row->lastname.'</td>
              <td>'.$row->email.'</td>
              <td>'.$row->contact.'</td>
              <td>'.$row->request_no.'</td>
              <td>'.$row->adhar_licenses_no.'</td>
              <td>'.$row->validity.'</td>
              <td>'.$row->username.'</td>
              <td>'.$row->password.'</td>
              <td>'.$row->date.'</td>
             <td>'.$row->time.'</td>.
            '.if($date<=$new_date)
      {
       echo "<td>".'<a class="btn btn-info" href="security_update?email=' . $row->email . '">Edit' . '</a>'.'<a class="btn btn-success" href="security_delete?id=' . $row->id . '">Remove' . '</a>'."</td>";
      }
      else
      {
        echo "<td>"." "."</td>";
      }.'</tr>';
      }
    }
  }
    else
    {
      $output .= '<tr>
              <td colspan="5">No Data Found</td>
            </tr>';
    }
    $output .= '</table>';
    echo $output;
  }
*/














//contact_data_pagination
   public function intern_data_pagination() 
    {
        $this->load->database();
        $this->load->model('user_model');

        $params = array();
        $limit_per_page =2;
        $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $total_records = $this->user_model->intern_data_get_total();
 
        if ($total_records > 0) 
        {
            $params["results"] = $this->user_model->intern_data_page_records($limit_per_page, $start_index);
             
            $config['base_url'] = base_url() . 'admin/intern_data_pagination';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            $this->pagination->initialize($config);
            $params["links"] = $this->pagination->create_links();
        }
        $this->load->view('intern_data_pagination', $params);
    }
     
    public function intern_data_custom()
    {
        // load db and model
        $this->load->database();
        $this->load->model('user_model');
     
        // init params
        $params = array();
        $limit_per_page = 2;
        $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
        $total_records = $this->User_model->intern_data_get_total();
     
        if ($total_records > 0)
        {
            // get current page records
            $params["results"] = $this->User_model->intern_data_page_records($limit_per_page, $page*$limit_per_page);
                 
            $config['base_url'] = base_url() . 'admin';
            $config['total_rows'] = $total_records;
            $config['per_page'] = $limit_per_page;
            $config["uri_segment"] = 3;
             
            // custom paging configuration
            $config['num_links'] = 2;
            $config['use_page_numbers'] = TRUE;
            $config['reuse_query_string'] = TRUE;
             
            $config['full_tag_open'] = '<div class="pagination"><ul>';
            $config['full_tag_close'] = '</ul></div>';
             
            $config['first_link'] = 'First Page';
            $config['first_tag_open'] = '<li class="firstlink">';
            $config['first_tag_close'] = '</li>';
             
            $config['last_link'] = 'Last Page';
            $config['last_tag_open'] = '<li class="lastlink">';
            $config['last_tag_close'] = '</li>';
             
            $config['next_link'] = 'Next Page';
            $config['next_tag_open'] = '<li class="nextlink">';
            $config['next_tag_close'] = '</li>';
 
            $config['prev_link'] = 'Prev Page';
            $config['prev_tag_open'] = '<li class="prevlink">';
            $config['prev_tag_close'] = '</li>';
 
            $config['cur_tag_open'] = '<li class="curlink">';
            $config['cur_tag_close'] = '</li>';
 
            $config['num_tag_open'] = '<li class="numlink">';
            $config['num_tag_close'] = '</li>';
             
            $this->pagination->initialize($config);
            $params["links"] = $this->pagination->create_links();
        }  
        $this->load->view('intern_data_pagination', $params);
    }

	public function admin_dashboard(){
          $this->load->view('admin_dashboard');
     }

     public function admin_login(){
      $this->load->model('user_model');
       $fetch['item'] =$this->user_model->admin_login();
     }

     public function security_loginform(){
          $this->load->model('user_model');
       $fetch['item'] =$this->user_model->security_loginform();
     }

      public function security_logoutform(){
          $this->load->view('security_logoutform');
     }

     public function lc_login(){
          $this->load->model('user_model');
       $fetch['item'] =$this->user_model->lc_login();
     }

      public function lc_logout(){
          $this->load->view('lc_logout');
     }

     public function superadmin_login(){
          $this->load->model('user_model');
       $fetch['item'] =$this->user_model->superadmin_login();
     }

      public function superadmin_logout(){
          $this->load->view('superadmin_logout');
     }

     public function admin_mentor_attendance(){
        $this->load->model('user_model');
        $fetch['item'] =$this->user_model->admin_mentor_attendance();
     }

      public function admin_schedule_decide(){
         //$this->load->view('admin_schedule_decide');
        $this->load->model('user_model');
        $fetch['item'] =$this->user_model->admin_schedule_decide();
     }

     public function mentor_login(){
          $this->load->view('mentor_login');
     }

     public function learning_center_login(){
          $this->load->view('learning_center_login');
     }

     public function super_admin_login(){
          $this->load->view('super_admin_login');
     }

     public function admin_logout(){
          $this->load->view('admin_logout');
     }
      
     public function admin_index(){
          $this->load->view('admin_index');
     } 

     /*public function feedback_data(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->feedback_data();
       $this->load->view('feedback_data',$fetch);
     }*/

     /*public function contact_data(){
       $this->load->model('user_model');
      $fetch['item'] =$this->user_model->contact_data();
       $this->load->view('contact_data',$fetch);
       //$postlist['bookSearch'] = $this->user_model->getSearchBook($this->input->post('search'));
    //$this->load->view('contact_data', $postlist);
     }*/

     public function admin_changepassword(){
          $this->load->view('admin_changepassword');
     }

    public function admin_lc_attendance()
     {
      $id=$this->input->get('email');
      $this->load->model('user_model');
      $data['item']=$this->user_model->admin_lc_attendance_getuserid($id);
      $this->load->view('admin_lc_attendance',$data);
    }

    public function security_delete()
    {
      $this->load->model('user_model');
      $id=$this->input->get('id');
      if($this->user_model->security_delete($id))
      {
        $data['item']=$this->user_model->security_delete_getdata_delete();
      }
      redirect('admin/temporary_pass','refresh');
    }

  
    public function temporary_pass()
    {
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->temporary_pass();
       $this->load->view('temporary_pass',$fetch);
    }

    public function security_update_data($email){
          $this->form_validation->set_rules('validity','Validity','required');
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('password','Password','required');

          if($this->form_validation->run()==TRUE){
            $this->load->model('user_model');
              if($this->user_model->security_update_data($email)){
                  $this->session->set_userdata('success','true');
            }
            else{
              $this->session->set_userdata('error','true');
            }
        redirect('admin/temporary_pass');
     }
}

     public function security_update()
     {
      $email=$this->input->get('email');
      $this->load->model('user_model');
      $data['item']=$this->user_model->getuserid($email);
      $this->load->view('security_update',$data);
    }
    
     public function intern_certificate(){
          $this->load->view('intern_certificate');
     }

     /*public function intern_attendance_report(){
          $this->load->model('user_model');
       $fetch['item'] =$this->user_model->intern_attendance_report();
       $this->load->view('intern_attendance_report',$fetch);
     }*/

     public function intern_data(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->intern_data();
       $this->load->view('intern_data',$fetch);
     }

     /*public function internship_data(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->internship_data();
       $this->load->view('internship_data',$fetch);
     }*/


 public function security_lc_password_change(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->security_lc_password_change(); 
        $this->load->view('security_lc_password_change',$fetch);
        //$this->load->view('ep_no_generate');
     }

     public function security_lc_password_change_update(){
          $this->form_validation->set_rules('lc_password','','required');

          if($this->form_validation->run()==TRUE){
            $this->load->model('user_model');
              if($this->user_model->security_lc_password_change_update()){
                  $this->session->set_userdata('success','true');
            }
            else{
              $this->session->set_userdata('error','true');
            }
        redirect('admin/security_lc_password_change');
     }
}



public function security_subadmin_password_change(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->security_subadmin_password_change(); 
        $this->load->view('security_subadmin_password_change',$fetch);
        //$this->load->view('ep_no_generate');
     }

     public function security_subadmin_password_change_update(){
          $this->form_validation->set_rules('subadmin_password','','required');

          if($this->form_validation->run()==TRUE){
            $this->load->model('user_model');
              if($this->user_model->security_subadmin_password_change_update()){
                  $this->session->set_userdata('success','true');
            }
            else{
              $this->session->set_userdata('error','true');
            }
        redirect('admin/security_subadmin_password_change');
     }
}

/*pagination 1 feedback_data_pagination
public function feedback_data_pagination($offset=0){
  
  $this->load->model('user_model');
   $this->load->library('pagination');
  $config['total_rows'] = $this->user_model->totalMovies();
  $config['base_url'] = base_url()."admin/feedback_data_pagination";
  $config['per_page'] = 5;
  $config['uri_segment'] = '2';
 
  $config['full_tag_open'] = '<div class="pagination"><ul>';
  $config['full_tag_close'] = '</ul></div>';
 
  $config['first_link'] = '« First';
  $config['first_tag_open'] = '<li class="prev page">';
  $config['first_tag_close'] = '</li>';
 
  $config['last_link'] = 'Last »';
  $config['last_tag_open'] = '<li class="next page">';
  $config['last_tag_close'] = '</li>';
 
  $config['next_link'] = 'Next →';
  $config['next_tag_open'] = '<li class="next page">';
  $config['next_tag_close'] = '</li>';
 
  $config['prev_link'] = '← Previous';
  $config['prev_tag_open'] = '<li class="prev page">';
  $config['prev_tag_close'] = '</li>';
 
  $config['cur_tag_open'] = '<li class="active"><a href="">';
  $config['cur_tag_close'] = '</a></li>';
 
  $config['num_tag_open'] = '<li class="page">';
  $config['num_tag_close'] = '</li>';
 
  $this->pagination->initialize($config);
  $query = $this->user_model->getMovies(5,$this->uri->segment(2));
  
  $data['MOVIES'] = null;
  
  if($query){
   $data['MOVIES'] =  $query;
  }
 
  $this->load->view('feedback_data_pagination', $data);
 }*/

 
  /*public function feedback_data() 
  {
       $this->load->model('user_model');
   $this->load->library('pagination');
        $config = array();
        $config["base_url"] = base_url() . "admin";
        $config["total_rows"] = $this->user_model->feedback_get_count();
        $config["per_page"] = 5;
        $config["uri_segment"] = 2;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        $data["links"] = $this->pagination->create_links();

        $data['item'] = $this->user_model->feedback_get($config["per_page"], $page);
        $this->load->view('feedback_data', $data);
    }*/



}
?>
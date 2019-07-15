<?php

class User_model extends CI_Model
{
	public function __construct()
	{
      parent::__construct();
	}



function intern_attendance_report_fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("internship_details");
    if($query != '')
    {
      $this->db->like('Ep_no', $query);
      $this->db->or_like('firstname', $query);
      $this->db->or_like('email', $query);
      $this->db->or_like('plant', $query);
      $this->db->or_like('mentor_name', $query);
      $this->db->or_like('Hod_name', $query);
      $this->db->or_like('project_title', $query);
    }
    $this->db->order_by('Ep_no', 'ASC');
    return $this->db->get();
  }

  function feedback_data_fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("feedback");
    if($query != '')
    {
      $this->db->or_like('contact', $query);
      $this->db->or_like('email', $query);
       $this->db->or_like('username', $query);
       $this->db->or_like('date', $query);
       $this->db->or_like('time', $query);
        $this->db->or_like('feedback', $query);
    }
    $this->db->order_by('date', 'DESC');
    return $this->db->get();
  }

  function contact_data_fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("contact");
    if($query != '')
    {
      $this->db->or_like('contact', $query);
      $this->db->or_like('email', $query);
       $this->db->or_like('username', $query);
       $this->db->or_like('date', $query);
       $this->db->or_like('time', $query);
        $this->db->or_like('message', $query);
    }
    $this->db->order_by('date', 'DESC');
    return $this->db->get();
  }


  function internship_data_fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("internship_details");
    if($query != '')
    {
      $this->db->or_like('firstname', $query);
      $this->db->or_like('lastname', $query);
       $this->db->or_like('email', $query);
       $this->db->or_like('contact', $query);
       $this->db->or_like('Ep_no', $query);
       $this->db->or_like('college_name', $query);
       $this->db->or_like('college_address', $query);
       $this->db->or_like('education', $query);
       $this->db->or_like('year_completed', $query);
       $this->db->or_like('internship_period', $query);
       $this->db->or_like('passing_year', $query);
       $this->db->or_like('training_start_date', $query);
       $this->db->or_like('training_end_date', $query);
       $this->db->or_like('discipline', $query);
       $this->db->or_like('mentor_name', $query);
       $this->db->or_like('Hod_name', $query);
       $this->db->or_like('plant', $query);
       $this->db->or_like('date', $query);
       $this->db->or_like('time', $query);
    }
    $this->db->order_by('date', 'DESC');
    return $this->db->get();
  }


  /*function temporary_pass_fetch_data($query)
  {
    $this->db->select("*");
    $this->db->from("temporary_pass_login");
    if($query != '')
    {
      $this->db->or_like('firstname', $query);
      $this->db->or_like('lastname', $query);
       $this->db->or_like('email', $query);
       $this->db->or_like('contact', $query);
       $this->db->or_like('request_no', $query);
       $this->db->or_like('gender', $query);
       $this->db->or_like('adhar_licenses_no', $query);
       $this->db->or_like('validity', $query);
       $this->db->or_like('username', $query);
       $this->db->or_like('date', $query);
       $this->db->or_like('time', $query);
    }
    $this->db->order_by('date', 'DESC');
    return $this->db->get();
  }*/

  //contact_data_pagination
  public function intern_data_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("intern_details");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }         
            return $data;
        }
        return false;
    }
     
    public function intern_data_get_total() 
    {
        return $this->db->count_all("intern_details");
    }

  /*function getMovies($limit=null,$offset=NULL){
  $this->db->select('*');
  $this->db->from('contact');
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result();
 }
 
 function totalMovies(){
  return $this->db->count_all_results('contact');
 }*/

  public function user_login()
  {
    $this->form_validation->set_rules('email','Email Id','required');
    $this->form_validation->set_rules('password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
             $email=$_POST['email'];
             $password=md5($_POST['password']);
            
  $this->db->select('*');
  $this->db->from('temporary_pass_login');
  $this->db->where(array('email'=>$email,'password'=>$password));
  $query=$this->db->get();
  $user=$query->row();        

  if($user->email)
  {
   $_SESSION['firstname']=$user->firstname;
   $_SESSION['lastname']=$user->lastname;
   $_SESSION['email']=$user->email;
   $_SESSION['contact']=$user->contact;
   $_SESSION['request_no']=$user->request_no;
   echo "<script>
        alert('Login successfully!! Welcome $user->firstname $user->lastname');
        </script>";
   $this->load->view('user_index');
          //$_SESSION['username']=$row['username'];
           //$_SESSION['user_id']=$row["user_id"];
          
             //$_SESSION['userid'];
             //echo "login successfully "; 
             //header('Location:index.php');
            
    //  }
    }
    else
    {
      redirect("User/user_login");
        //$this->load->view('dashboard');
    }
    //}
  }
   if(!isset($_SESSION['email']))
   {
   $this->load->view('user_login');
 }
 }


 public function admin_login(){
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
                $username=$_POST['username'];
                $password=md5($_POST['password']);
                $this->db->select('*');
                $this->db->from('main_admin_logic');
                $this->db->where(array('username'=>$username,'password'=>$password));
                $query=$this->db->get();
                $user=$query->row();

                if($user->password && $user->username)
                {
               $this->session->set_flashdata("admin_success",$user->username);
               $_SESSION['user_logged']=TRUE;
               $_SESSION['admin_name']=$user->username;
               echo "<script>
        alert('Login successfully!! Welcome $user->username');
        </script>";
               $this->load->view('admin_index');
                }
                else
                {
                   redirect("admin/admin_login");
                    //$this->session->set_flashdata("error","No such account exists");
                    //redirect("auth/login_form","refresh");
                }
          }
          if(!isset($_SESSION['admin_name']))
          {
          $this->load->view('admin_login');
          }
     }


	
	public function security_form()
	{	
          $this->form_validation->set_rules('firstname','Firstname','required');
           $this->form_validation->set_rules('lastname','LastName','required');
          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('contact','Contact','required|min_length[10]');
          $this->form_validation->set_rules('request_no','Request No','required');
           $this->form_validation->set_rules('gender','Gender','required');

$this->form_validation->set_rules('adhar_licenses_no','Adharcard No./Licenses No.','required');
$this->form_validation->set_rules('fileupload','Upload Adharcard Upload/Licenses No.','required');

 
          if($this->form_validation->run() == TRUE)
          {
          	echo "form validate successfully";
          	date_default_timezone_set("Asia/kolkata");
          	 $data=array(
          		'firstname'=>$_POST['firstname'],
              'lastname'=>$_POST['lastname'],
          		'email'=>$_POST['email'],
          		'contact'=>$_POST['contact'],
              'request_no'=>$_POST['request_no'],
          		'gender'=>$_POST['gender'],
          		'adhar_licenses_no'=>$_POST['adhar_licenses_no'],
          		'upload_image'=>$_POST['fileupload'],
              'validity'=>'none',
              'username'=>'none',
              'password'=>'none',
          		'date'=>date('Y-m-d'),
              'time'=>date('H:i:sa'), );

          	$this->db->insert('temporary_pass_login',$data);
          	//$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
          	redirect("User/security_form");
          }
		
		$this->load->view('security_form');
	}

       function temporary_pass()
	    {
	    	$data = $this->db->query("select * from temporary_pass_login");
			return $data->result_array();
	    }

      function intern_data()
      {
        $data = $this->db->query("select * from intern_details");
      return $data->result_array();
      }

      /*function internship_data()
      {
        $data = $this->db->query("select * from internship_details");
      return $data->result_array();
      } */

       function user_details()
      {
        $data = $this->db->query("select * from internship_details");
      return $data->result_array();
      } 

      function user_update_details()
  {
    $data=array(
        //$id = $this->input->post('id'),
        'mentor_name' => $_POST['mentor_name'],
        'Hod_name' => $_POST['Hod_name'],
        'plant' => $_POST['plant'],
        'project_title' => $_POST['project_title']     
  );

    $this->db->set($data);
    $this->db->where('email',$_SESSION['email']);
    return $this->db->update('internship_details',$data);
  }

     /* function intern_attendance_report()
      {
      $data = $this->db->query("select * from attendance_report");
      return $data->result_array();
      }*/

      /*function feedback_data()
      {
        $data = $this->db->query("select * from feedback");
      return $data->result_array();
      } */

     function ep_no_generate()
      {
       $data = $this->db->query("select * from intern_details");
      return $data->result_array();
      /*function getdata(){
        $email=$_SESSION['email'];
  $this->db->select('*');
  $this->db->from('intern_details');
  $this->db->join('internship_details',);
  $query = $this->db->get();
  return $query->result();*/
 }

    function ep_no_generate_1()
      {
       $data = $this->db->query("select * from internship_details");
      return $data->result_array();
    }

       function plant_mentor_session()
      {
        $data = $this->db->query("select * from internship_details");
      return $data->result_array();
      }

      /*function contact_data()
      {
        $data = $this->db->query("select * from contact");
      return $data->result_array();
      } */

      public function feedback()
      { 
          $this->form_validation->set_rules('username','Username','required');
           $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('contact','Contact','required|min_length[10]|max_length[10]');
          $this->form_validation->set_rules('feedback','Feedback','required|min_length[10]');
 
          if($this->form_validation->run() == TRUE)
          {
            echo "form validate successfully";
            date_default_timezone_set("Asia/Calcutta");

             $data=array(
              'username'=>$_POST['username'],
              'email'=>$_POST['email'],
              'contact'=>$_POST['contact'],
              'feedback'=>$_POST['feedback'],
              'date'=>date('Y-m-d'),
              'time'=>date('H:i:sa'), );

            $this->db->insert('feedback',$data);
            //$this->db->insert('master_feedback',$data);
            //$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
            redirect("User/user_index");
          }
    
    $this->load->view('feedback');
  }


  public function contactus()
      { 
          $this->form_validation->set_rules('username','Username','required');
           $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('contact','Contact','required|min_length[10]|max_length[10]');
          $this->form_validation->set_rules('message','message','required|min_length[10]');
 
          if($this->form_validation->run() == TRUE)
          {
            echo "form validate successfully";
            date_default_timezone_set("Asia/Calcutta");

              $data=array(
              'username'=>$_POST['username'],
              'email'=>$_POST['email'],
              'contact'=>$_POST['contact'],
              'message'=>$_POST['message'],
              'date'=>date('Y-m-d'),
              'time'=>date('H:i:sa'), );

            $this->db->insert('contact',$data);
            //$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
            redirect("User/user_index");
          }
    
    $this->load->view('contactus');
  }

  public function intern_details()
  { 
     $this->form_validation->set_rules('firstname','Firstname','required');
     $this->form_validation->set_rules('lastname','LastName','required');
     $this->form_validation->set_rules('email','Email','required');
     $this->form_validation->set_rules('contact','Contact','required|min_length[10]');
     $this->form_validation->set_rules('birth_date','Birth-Date','required');
     $this->form_validation->set_rules('height','Height','required');
     $this->form_validation->set_rules('weight','Weight','required');
     $this->form_validation->set_rules('identification_mark','Identification Mark','required');
     $this->form_validation->set_rules('father_name','Father Name','required');
     $this->form_validation->set_rules('mother_name','Mother Name','required');
     $this->form_validation->set_rules('nationality','Nationality','required');
     $this->form_validation->set_rules('religion','Religion','required');
     $this->form_validation->set_rules('cast','Cast','required');
     $this->form_validation->set_rules('gender','gender','required');
     $this->form_validation->set_rules('adhar_no','Adhar No','required');
     $this->form_validation->set_rules('licenses_no','Licenses No','required');
     $this->form_validation->set_rules('country','Country','required');
     $this->form_validation->set_rules('state','State','required');
     $this->form_validation->set_rules('address','Address','required');
     $this->form_validation->set_rules('pincode','Pincode','required');
     $this->form_validation->set_rules('ref1_name','Reference1 Name','required');
     $this->form_validation->set_rules('ref1_address','Reference1 Address','required');
     $this->form_validation->set_rules('ref1_contact','Reference1 Contact','required');
     $this->form_validation->set_rules('ref2_name','Reference2 Name','required');
     $this->form_validation->set_rules('ref2_address','Reference2 Address','required');
     $this->form_validation->set_rules('ref2_contact','Reference2 Contact','required');

 
          if($this->form_validation->run() == TRUE)
          {
            echo "form validate successfully";
            date_default_timezone_set("Asia/Calcutta");
            echo $data=array(
              'firstname'=>$_POST['firstname'],
              'lastname'=>$_POST['lastname'],
              'email'=>$_POST['email'],
              'contact'=>$_POST['contact'],
              'birth_date'=>$_POST['birth_date'],
              'height'=>$_POST['height'],
              'weight'=>$_POST['weight'],
              'identification_mark'=>$_POST['identification_mark'],
              'father_name'=>$_POST['father_name'],
              'mother_name'=>$_POST['mother_name'],
              'nationality'=>$_POST['nationality'],
              'religion'=>$_POST['religion'],
              'cast'=>$_POST['cast'],
              'gender'=>$_POST['gender'],
              'adhar_no'=>$_POST['adhar_no'],
              'licenses_no'=>$_POST['licenses_no'],
              'country'=>$_POST['country'],
              'state'=>$_POST['state'],
              'address'=>$_POST['address'],
              'pincode'=>$_POST['pincode'],
              'ref1_name'=>$_POST['ref1_name'],
              'ref1_address'=>$_POST['ref1_address'],
              'ref1_contact'=>$_POST['ref1_contact'],
              'ref2_name'=>$_POST['ref2_name'],
              'ref2_address'=>$_POST['ref2_address'],
              'ref2_contact'=>$_POST['ref2_contact'],
              'date'=>date('Y-m-d'),
              'time'=>date('H:i:sa'),);

            $this->db->insert('intern_details',$data);
             $this->session->set_flashdata("success","");
               redirect("User/ep_no_generate");
            //$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
            
          }

    $this->load->view('intern_details');
  }

  function getuserid($email)
  {
    $this->load->database();
    $this->db->where('email',$email);
    $data=$this->db->get('temporary_pass_login');
    return $data->result_array();
  }

  function security_update_data($email)
  {
    $data=array(
        //$id = $this->input->post('id'),
        'validity' => $this->input->post('validity'),
        'username' => $this->input->post('username'),
        'password' =>md5($_POST['password'])     
  );

    $this->db->set($data);
    $this->db->where('email',$email);
    return $this->db->update('temporary_pass_login',$data);
  }

  /*public function security_update(){
      $id=$this->input->get('email');
      $this->load->model('user_model');
      $data['item']=$this->user_model->getuserid($id);
      $this->load->view('security_update',$data);
    }*/

    function admin_lc_attendance($id)
  {
      $this->load->database();
      $this->db->where('email',$id);
     $this->db->query("select * from attendance_report");
    return true;
  } 

  function admin_lc_attendance_getuserid($id)
  {
    $this->load->database();
    $this->db->where('email',$id);
    $data=$this->db->get('attendance_report');
    return $data->result_array();
  }

  function security_delete($id1)
  {
      $this->load->database();
      $this->db->where('id',$id1);
        $this->db->delete('temporary_pass_login');
    return true;
  } 

  function security_delete_getdata_delete()
  {
    $this->load->database();
    $data=$this->db->get('temporary_pass_login');
    return $data->result();
  }


  public function internship_details()
  { 
     $this->form_validation->set_rules('firstname','Firstname','required');
     $this->form_validation->set_rules('lastname','LastName','required');
     $this->form_validation->set_rules('email','Email','required');
     $this->form_validation->set_rules('contact','Contact','required|min_length[10]');
     $this->form_validation->set_rules('Ep_no','Ep No','required');
     $this->form_validation->set_rules('college_name','College Name','required');
     $this->form_validation->set_rules('college_address','College Address','required');
     $this->form_validation->set_rules('education','Education','required');
     $this->form_validation->set_rules('field','Field','required');
     $this->form_validation->set_rules('year_completed','Year Completed','required');
     $this->form_validation->set_rules('passing_year','Passing Year','required');
     $this->form_validation->set_rules('internship_period','Internship Period','required');
     $this->form_validation->set_rules('training_start_date','Training start date','required');
     $this->form_validation->set_rules('training_end_date','Training end date','required');
     $this->form_validation->set_rules('discipline','Discipline','required');
     $this->form_validation->set_rules('mentor_name','Mentor Name','required');
     $this->form_validation->set_rules('Hod_name','Hod Name','required');
     $this->form_validation->set_rules('plant','Plant','required');
      $this->form_validation->set_rules('project_title','Project Title','required');
     
          if($this->form_validation->run() == TRUE)
          {
            echo "form validate successfully";
            date_default_timezone_set("Asia/Calcutta");
            echo $data=array(
              'firstname'=>$_POST['firstname'],
              'lastname'=>$_POST['lastname'],
              'email'=>$_POST['email'],
              'contact'=>$_POST['contact'],
              'Ep_no'=>$_POST['Ep_no'],
              'college_name'=>$_POST['college_name'],
              'college_address'=>$_POST['college_address'],
              'education'=>$_POST['education'],
              'field'=>$_POST['field'],
              'year_completed'=>$_POST['year_completed'],
              'passing_year'=>$_POST['passing_year'],
              'internship_period'=>$_POST['internship_period'],
              'training_start_date'=>$_POST['training_start_date'],
              'training_end_date'=>$_POST['training_end_date'],
              'discipline'=>$_POST['discipline'],
              'mentor_name'=>$_POST['mentor_name'],
              'Hod_name'=>$_POST['Hod_name'],
              'plant'=>$_POST['plant'],
               'project_title'=>$_POST['project_title'],
              'date'=>date('Y-m-d'),
              'time'=>date('H:i:sa'), );

            //$_SESSION['plant']=$_POST['plant'];
            $this->db->insert('internship_details',$data);
            //$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
            $this->load->view('plant_mentor_session');
            redirect("User/user_index");
           /* if($user->email)
            {
             $_SESSION['Ep_no']=$user->Ep_no;
             //$_SESSION['plant']=$user->plant;
             //$_SESSION['mentor']=$user->mentor_name;
            }*/
          }
    
    $this->load->view('internship_details');
  }

 public function admin_mentor_attendance()
  { 
     $this->form_validation->set_rules('Ep_no','Ep_no','required');
     $this->form_validation->set_rules('name','Name','required');
     $this->form_validation->set_rules('email','Email','required');
     $this->form_validation->set_rules('discipline','Discipline','required');
     $this->form_validation->set_rules('mentor_name','Mentor Name','required');
     $this->form_validation->set_rules('hod_name','HOD Name','required');
     $this->form_validation->set_rules('project_title','Project Title','required');
     $this->form_validation->set_rules('plant','Plant','required');
     $this->form_validation->set_rules('date','Date','required');
     $this->form_validation->set_rules('attendance','attendance','required');
     $this->form_validation->set_rules('in_time','In Time','required');
     $this->form_validation->set_rules('out_time','Out Time','required');
     $this->form_validation->set_rules('remark','Remark','required');
 
          if($this->form_validation->run() == TRUE)
          {
            echo "form validate successfully";
            date_default_timezone_set("Asia/Calcutta");
            echo $data=array(
              'Ep_no'=>$_POST['Ep_no'],
              'name'=>$_POST['name'],
              'email'=>$_POST['email'],
              'discipline'=>$_POST['discipline'],
              'mentor_name'=>$_POST['mentor_name'],
              'hod_name'=>$_POST['hod_name'],
              'project_title'=>$_POST['project_title'],
              'plant'=>$_POST['plant'],
              'date'=>$_POST['date'],
              'attendance'=>$_POST['attendance'],
              'in_time'=>$_POST['in_time'],
              'out_time'=>$_POST['out_time'],
              'remark'=>$_POST['remark'],
              'mentor_update_date'=>date('Y-m-d'),
              'mentor_update_time'=>date('H:i:sa'),);

            $this->db->insert('attendance_report',$data);
             $this->session->set_flashdata("success","");
               redirect("admin/admin_mentor_attendance");
            //$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
            
          }
    $this->load->view('admin_mentor_attendance');
  }

   public function user_attendance_report()
  {
    $data = $this->db->query("select * from attendance_report");
      return $data->result_array();
  }

 public function admin_schedule_decide()
  { 
     $this->form_validation->set_rules('date_from','','required');
     $this->form_validation->set_rules('date_to','','required');
     $this->form_validation->set_rules('plant','','required');
     $this->form_validation->set_rules('mentor_name','','required');
     $this->form_validation->set_rules('m1','','required');
     $this->form_validation->set_rules('t1','','required');
     $this->form_validation->set_rules('w1','','required');
     $this->form_validation->set_rules('th1','','required'); 
     $this->form_validation->set_rules('f1','','required');
     $this->form_validation->set_rules('m2','','required');
     $this->form_validation->set_rules('t2','','required'); 
     $this->form_validation->set_rules('w2','','required');
     $this->form_validation->set_rules('th2','','required');
     $this->form_validation->set_rules('f2','','required'); 
     $this->form_validation->set_rules('m3','','required');
     $this->form_validation->set_rules('t3','','required');
     $this->form_validation->set_rules('w3','','required'); 
     $this->form_validation->set_rules('th3','','required');
     $this->form_validation->set_rules('f3','','required');
     $this->form_validation->set_rules('m4','','required'); 
     $this->form_validation->set_rules('t4','','required');
     $this->form_validation->set_rules('w4','','required');
     $this->form_validation->set_rules('th4','','required'); 
     $this->form_validation->set_rules('f4','','required');
     $this->form_validation->set_rules('m5','','required');
     $this->form_validation->set_rules('t5','','required'); 
     $this->form_validation->set_rules('w5','','required');
     $this->form_validation->set_rules('th5','','required');
     $this->form_validation->set_rules('f5','','required'); 
     $this->form_validation->set_rules('m6','','required');
     $this->form_validation->set_rules('t6','','required');
     $this->form_validation->set_rules('w6','','required'); 
     $this->form_validation->set_rules('th6','','required');
     $this->form_validation->set_rules('f6','','required');
     $this->form_validation->set_rules('m7','','required'); 
     $this->form_validation->set_rules('t7','','required');
     $this->form_validation->set_rules('w7','','required');
     $this->form_validation->set_rules('th7','','required'); 
     $this->form_validation->set_rules('f7','','required');
     $this->form_validation->set_rules('m8','','required');
     $this->form_validation->set_rules('t8','','required'); 
     $this->form_validation->set_rules('w8','','required');
     $this->form_validation->set_rules('th8','','required');
     $this->form_validation->set_rules('f8','','required'); 
     $this->form_validation->set_rules('m9','','required');
     $this->form_validation->set_rules('t9','','required');
     $this->form_validation->set_rules('w9','','required');
      $this->form_validation->set_rules('th9','','required');
     $this->form_validation->set_rules('f9','','required');
 
          if($this->form_validation->run() == TRUE)
          {
            echo "form validate successfully";
            date_default_timezone_set("Asia/Calcutta");
            echo $data=array(
              'date_from'=>$_POST['date_from'],
              'date_to'=>$_POST['date_to'],
              'plant'=>$_POST['plant'],
              'mentor_name'=>$_POST['mentor_name'],
              'm1'=>$_POST['m1'],
              't1'=>$_POST['t1'],
              'w1'=>$_POST['w1'],
              'th1'=>$_POST['th1'],
              'f1'=>$_POST['f1'],
              'm2'=>$_POST['m2'],
              't2'=>$_POST['t2'],
              'w2'=>$_POST['w2'],
              'th2'=>$_POST['th2'],
              'f2'=>$_POST['f2'],
              'm3'=>$_POST['m3'],
              't3'=>$_POST['t3'],
              'w3'=>$_POST['w3'],
              'th3'=>$_POST['th3'],
              'f3'=>$_POST['f3'],
              'm4'=>$_POST['m4'],
              't4'=>$_POST['t4'],
              'w4'=>$_POST['w4'],
              'th4'=>$_POST['th4'],
              'f4'=>$_POST['f4'],
              'm5'=>$_POST['m5'],
              't5'=>$_POST['t5'],
              'w5'=>$_POST['w5'],
              'th5'=>$_POST['th5'],
              'f5'=>$_POST['f5'],
              'm6'=>$_POST['m6'],
              't6'=>$_POST['t6'],
              'w6'=>$_POST['w6'],
              'th6'=>$_POST['th6'],
              'f6'=>$_POST['f6'],
              'm7'=>$_POST['m7'],
              't7'=>$_POST['t7'],
              'w7'=>$_POST['w7'],
              'th7'=>$_POST['th7'],
              'f7'=>$_POST['f7'],
              'm8'=>$_POST['m8'],
              't8'=>$_POST['t8'],
              'w8'=>$_POST['w8'],
              'th8'=>$_POST['th8'],
              'f8'=>$_POST['f8'],
              'm9'=>$_POST['m9'],
              't9'=>$_POST['t9'],
              'w9'=>$_POST['w9'],
              'th9'=>$_POST['th9'],
              'f9'=>$_POST['f9'],           
              'update_date'=>date('Y-m-d'),
              'update_time'=>date('H:i:sa'), );

            $this->db->insert('schedule',$data);
             $this->session->set_flashdata("success","");
               redirect("admin/admin_schedule_decide");
            //$this->session->set_flashdata("success","Your account has been registered.you can login now");
            //$this->session->set_data();
            
          }
    $this->load->view('admin_schedule_decide');
  }


      function schedule()
      {

        $data = $this->db->query("select * from schedule");
      return $data->result_array();
      //date_default_timezone_set("Asia/kolkata");
      //$date=date('Y-m-d'); 

   /*    $this->db->select();
$this->db->from('schedule');
$this->db->where('date_from >=', $date);
$data['item'] = $this->db->get();*/

      //$this->db->select('*');
      //$this->db->from('schedule');
      //$this->db->where('date_from <=',$date);
      //$this->db->where('date_to >=',$date);
      //return $this->db->get('schedule');

        
      /*date_default_timezone_set("Asia/kolkata");
      $date=date('Y-m-d');

      $data = $this->db->query("select * from schedule WHERE 'date_from' <='2019-06-18' and  'date_to'> '2019-06-18' ");
      return $data->result_array();*/

      //$data = $this->db->query("select * from internship_details");
      //return $data->result_array();
      }

public function security_loginform()
    {
    $this->form_validation->set_rules('security_id','Email Id','required');
    $this->form_validation->set_rules('security_password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
             $security_id=$_POST['security_id'];
             $security_password=md5($_POST['security_password']);
            
  $this->db->select('*');
  $this->db->from('main_admin_logic');
  $this->db->where(array('security_id'=>$security_id,'security_password'=>$security_password));
  $query=$this->db->get();
  $user=$query->row();        

  if($user->security_id)
  {
   $_SESSION['security_id']=$user->security_id;
   echo "<script>
        alert('Security Login successfully!! Welcome $user->security_id');
        </script>";
   $this->load->view('admin_index');
          //$_SESSION['username']=$row['username'];
           //$_SESSION['user_id']=$row["user_id"];
          
             //$_SESSION['userid'];
             //echo "login successfully "; 
             //header('Location:index.php');
            
    //  }
    }
    else
    {
      redirect("admin/security_loginform");
        //$this->load->view('dashboard');
    }
    //}
  }
   if(!isset($_SESSION['security_id']))
   {
   $this->load->view('security_loginform');
 }
 
 }

      

public function lc_login()
    {
    $this->form_validation->set_rules('lc_id','Email Id','required');
    $this->form_validation->set_rules('lc_password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
             $lc_id=$_POST['lc_id'];
             $lc_password=md5($_POST['lc_password']);
            
  $this->db->select('*');
  $this->db->from('main_admin_logic');
  $this->db->where(array('lc_id'=>$lc_id,'lc_password'=>$lc_password));
  $query=$this->db->get();
  $user=$query->row();        

  if($user->lc_id)
  {
   $_SESSION['lc_id']=$user->lc_id;
   echo "<script>
        alert('LC Login successfully!! Welcome $user->lc_id');
        </script>";
   $this->load->view('admin_index');
          //$_SESSION['username']=$row['username'];
           //$_SESSION['user_id']=$row["user_id"];
          
             //$_SESSION['userid'];
             //echo "login successfully "; 
             //header('Location:index.php');
            
    //  }
    }
    else
    {
      redirect("admin/lc_login");
        //$this->load->view('dashboard');
    }
    //}
  }
   if(!isset($_SESSION['lc_id']))
   {
   $this->load->view('lc_login');
 }
 
 }


 public function superadmin_login()
    {
    $this->form_validation->set_rules('superadmin_id','Email Id','required');
    $this->form_validation->set_rules('superadmin_password','Password','required|min_length[5]');
          
          if($this->form_validation->run()==TRUE)
          {
             $subadmin_id=$_POST['superadmin_id'];
             $subadmin_password=md5($_POST['superadmin_password']);
            
  $this->db->select('*');
  $this->db->from('main_admin_logic');
  $this->db->where(array('subadmin_id'=>$subadmin_id,'subadmin_password'=>$subadmin_password));
  $query=$this->db->get();
  $user=$query->row();        

  if($user->subadmin_id)
  {
   $_SESSION['superadmin_id']=$user->subadmin_id;
   echo "<script>
        alert('Subadmin Login successfully!! Welcome $user->subadmin_id ');
        </script>";
        
   $this->load->view('admin_index');
          //$_SESSION['username']=$row['username'];
           //$_SESSION['user_id']=$row["user_id"];
          
             //$_SESSION['userid'];
             //echo "login successfully "; 
             //header('Location:index.php');
            
    //  }
    }
    else
    {
      redirect("admin/superadmin_login");
        //$this->load->view('dashboard');
    }
    //}
  }
   if(!isset($_SESSION['superadmin_id']))
   {
   $this->load->view('superadmin_login');
 }
 
 }


 function security_lc_password_change()
      {
        $data = $this->db->query("select * from main_admin_logic");
      return $data->result_array();
      } 

      function security_lc_password_change_update()
  {
    $data=array(
        //$id = $this->input->post('id'),
        'lc_password' => md5($_POST['lc_password'])    
  );

    $this->db->set($data);
    $this->db->where('lc_id','lc@gmail.com');
    return $this->db->update('main_admin_logic',$data);
  }


  function security_subadmin_password_change()
      {
        $data = $this->db->query("select * from main_admin_logic");
      return $data->result_array();
      } 

      function security_subadmin_password_change_update()
  {
    $data=array(
        //$id = $this->input->post('id'),
        'subadmin_password' => md5($_POST['subadmin_password'])    
  );

    $this->db->set($data);
    $this->db->where('subadmin_id','subadmin@gmail.com');
    return $this->db->update('main_admin_logic',$data);
  }




/*
Pagintion 1-->feedback_data_pagination
  function getMovies($limit=null,$offset=NULL){
  $this->db->select("*");
  $this->db->from('feedback');
  $this->db->limit($limit, $offset);
  $query = $this->db->get();
  return $query->result();
 }
 
 function totalMovies(){
  return $this->db->count_all_results('feedback');
 }*/


 /*public function feedback_get_count() {
        return $this->db->count_all('feedback');
    }

    public function feedback_get($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('feedback');

        return $query->result();
    }

*/





}
?>

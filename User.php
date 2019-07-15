<?php
class User extends CI_Controller
{

      public function user_dashboard(){
          $this->load->view('user_dashboard');
     }

     public function ep_no_generate(){
       /*$this->load->model('user_model');
       $query = $this->user_model->getdata();
  $data['item'] = null;
  if($query){
   $data['item'] =  $query;
  }
  $this->load->view('ep_no_generate', $data);*/

      $this->load->model('user_model');
       $fetch['item'] =$this->user_model->ep_no_generate();
       $fetch['item1'] =$this->user_model->ep_no_generate_1(); 
        $this->load->view('ep_no_generate',$fetch);
        //$this->load->view('ep_no_generate');
     }

     public function user_details(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->user_details(); 
        $this->load->view('user_details',$fetch);
        //$this->load->view('ep_no_generate');
     }

     public function user_update_details(){
          $this->form_validation->set_rules('mentor_name','','required');
          $this->form_validation->set_rules('Hod_name','','required');
          $this->form_validation->set_rules('plant','','required');
          $this->form_validation->set_rules('project_title','','required');


          if($this->form_validation->run()==TRUE){
            $this->load->model('user_model');
              if($this->user_model->user_update_details()){
                  $this->session->set_userdata('success','true');
            }
            else{
              $this->session->set_userdata('error','true');
            }
        redirect('User/ep_no_generate');
     }
}

      public function user_attendance_report()
     {
         $this->load->model('user_model');
       $fetch['item'] =$this->user_model->user_attendance_report(); 
        $this->load->view('user_attendance_report',$fetch);
     }

     public function laptop_permission_form(){
          $this->load->view('laptop_permission_form');
     }

      public function leave_permission_form(){
          $this->load->view('leave_permission_form');
     }

      public function user_change_password(){
          $this->load->view('user_change_password');
     }

     public function user_forgot_password(){
          $this->load->view('user_forgot_password');
     }

     public function user_index(){
          $this->load->view('user_index');
     }

     public function user_login(){
          $this->load->model('user_model');
       $fetch['item'] =$this->user_model->user_login();
     }

     public function internship_details(){
          $this->load->model('user_model');
        $fetch['item'] =$this->user_model->internship_details();
     }

     public function intern_details(){
          $this->load->model('user_model');
        $fetch['item'] =$this->user_model->intern_details();
     }

     public function login_form(){
          $this->load->view('login_form');
     }

     public function user_logout(){
          $this->load->view('user_logout');
     }

     public function security_form()
     {
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->security_form();
     }

     public function forgot_password(){
          $this->load->view('forgot_password');
     }

     public function attendance_report(){
          $this->load->model('user_model');
       $fetch['item'] =$this->user_model->attendance_report();
     }

      public function schedule(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->schedule(); 
        $this->load->view('schedule',$fetch);
     }

     public function map(){
          $this->load->view('map');
     }

     public function contactus(){
        $this->load->model('user_model');
        $fetch['item'] =$this->user_model->contactus();
     }

     public function feedback(){
      $this->load->model('user_model');
       $fetch['item'] =$this->user_model->feedback();
     }

     public function about_reliance_group(){
          $this->load->view('about_reliance_group');
     }

     public function about_our_founder(){
          $this->load->view('about_our_founder');
     }

     public function about_chairmain(){
          $this->load->view('about_chairmain');
     }

     public function about_vision(){
          $this->load->view('about_vision');
     }

     public function about_values(){
          $this->load->view('about_values');
     }

     public function plant_mentor_session(){
       $this->load->model('user_model');
       $fetch['item'] =$this->user_model->plant_mentor_session(); 
        $this->load->view('plant_mentor_session',$fetch);
        //$this->load->view('ep_no_generate');
     }
}
?>
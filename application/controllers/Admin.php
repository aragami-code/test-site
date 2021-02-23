<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
     parent::__construct();
        $this->load->model('Admin_Model');
        $sid = $this->session->userdata('sid');
        if($sid != NULL){
            redirect('Dashboard','refresh');
        }
    }


    public function index()
    {
        $this->load->view('admin_login');


    }
    public function admin_login_check()
    {
        $snom = $this->input->post('snom');
        $spass = $this->input->post('spass');
        //$slevel = 1;

       //
        $result = $this->Admin_Model->admin_login_check_info($snom,$spass);
        // $result1 = $this->Admin_Model->admin_login_check_info2($snom,$spass,);
        $session_data = array();
        if ($result){

            foreach ($result as $key => $value){

                $session_data['sid'] = $value['sid'];
                $session_data['snom'] = $value['snom'];
          //     $session_data = $value =$slevel;
            }




                $this->session->set_userdata($session_data);
            redirect(Serdi_Admin);
                # code...
        

            

        }
        else{
             $session_data['login_message']="Incorect login detail...";
            $this->session->set_userdata($session_data);
            redirect(Admin);

        }



    }
}

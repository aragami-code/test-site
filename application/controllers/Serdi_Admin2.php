<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 15:53
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Serdi_Admin2 extends CI_Controller {



    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
        $sid = $this->session->userdata('sid');
        if($sid == NULL){
            redirect('xyz','refresh');
        }
    }

            public function index()
            {
               // $this->load->view('Admin_Serdi/admin_serdi');
                $data = array();
                $data['Admin_Serdi_Content2'] = $this->load->view('Admin_Serdi2/Admin_Serdi_Content2','',TRUE);
                $this->load->view('Admin_Serdi2/admin_serdi2',$data);
            }
           
            public function logout(){
                $this->session->unset_userdata('sid');
                $this->session->unset_userdata('snom');
                $session_data['success_message']='vous etes deconnecté';
                $this->session->set_userdata($session_data);
                redirect(Admin);

            }
}




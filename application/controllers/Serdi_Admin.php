<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 15:53
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Serdi_Admin extends CI_Controller {



    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');
         // $this->load->model('Message_Model');
           //  $this->load->model('Category_Model');
             //   $this->load->model('Contenu_Model');
               //    $this->load->model('Slide_Model');
                   $this->load->model('Users_Model');
        $sid = $this->session->userdata('sid');
        $slevel = $this->session->userdata('slevel');
        if($sid == NULL and $slevel ==2){
            redirect('xyz','refresh');
        }
    }

            public function index()
            {
               // $this->load->view('Admin_Serdi/admin_serdi');
                $data = array();
                $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/Admin_Serdi_Content','',TRUE);
                $this->load->view('Admin_Serdi/admin_serdi',$data);
            }


            public function logout(){
                $this->session->unset_userdata('sid');
                $this->session->unset_userdata('snom');
                $session_data['success_message']='vous etes deconnecté';
                $this->session->set_userdata($session_data);
                redirect(Admin);

            }

             public function users_edit($sid){
        $data = array();
        $data['users_info']= $this->Users_Model->users_edit_info($sid);
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/edit_users',$data,TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);

    }
    public function users_update(){
       $this->Users_Model->users_update_info();
       //$this->load->view('acceuil');
       redirect('Serdi_Admin/index');

    }
}




<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_Model');
        //$this->load->controller('Welcome');
        $sid = $this->session->userdata('sid');
        if($sid == NULL){
            redirect('xyz','refresh');
        }


    }

    public function add_users(){

          $data = array();
                $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/add_users','',TRUE);
                $this->load->view('Admin_Serdi/admin_serdi',$data);
    }
     
    public function manage_users(){
        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/manage_users','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
       $data['all_users_info']= $this->Users_Model->manage_users_info();
    }
    public function save_users(){

    $this->Users_Model->save_users_info();
    $mData[] = array();

    $mData['message'] = "Enregistre avec Success";
    $this->session->set_userdata($mData);
    redirect('Users/manage_users');

    }


    public function publish_users($sid){
        $this->Users_Model->publish_users_info($sid);
        redirect('Users/manage_users');
    }
    public function unpublish_users($sid){
        $this->Users_Model->unpublish_users_info($sid);
        redirect('Users/manage_users');
    }
/*
    public function users_edit($sid){
        $data = array();
        $data['users_info']= $this->Users_Model->users_edit_info($sid);
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/edit_users',$data,TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);

    }*/
/*
    public function users_update(){
       $this->Users_Model->users_update_info();
       //$this->load->view('acceuil');
       redirect('Users/home');

    }*/
    public function delete_users($sid){
        $this->Users_Model->users_delete_info($sid);
        redirect('Users/manage_users');

    }



}
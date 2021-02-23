<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_Model');
        $sid = $this->session->userdata('sid');
        if($sid == NULL){
            redirect('xyz','refresh');
        }


    }

    public function add_category(){

          $data = array();
                $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/add_categorie_list','',TRUE);
                $this->load->view('Admin_Serdi/admin_serdi',$data);
    }
    public function manage_category(){
        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/manage_categorie','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
       $data['all_category_info']= $this->Category_Model->manage_category_info();
    }
    public function save_category(){

    $this->Category_Model->save_category_info();
    $mData[] = array();

    $mData['message'] = "Enregistre avec Success";
    $this->session->set_userdata($mData);
    redirect('Category/manage_category');

    }


    public function publish_category($idservice){
        $this->Category_Model->publish_category_info($idservice);
        redirect('Category/manage_category');
    }
    public function unpublish_category($idservice){
        $this->Category_Model->unpublish_category_info($idservice);
        redirect('Category/manage_category');
    }

    public function category_edit($idservice){
        $data = array();
        $data['category_info']= $this->Category_Model->category_edit_info($idservice);
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/edit_category',$data,TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);

    }

    public function category_update(){
       $this->Category_Model->category_update_info();
       redirect('Category/manage_category');

    }
    public function delete_category($idservice){
        $this->Category_Model->category_delete_info($idservice);
        redirect('Category/manage_category');

    }



}
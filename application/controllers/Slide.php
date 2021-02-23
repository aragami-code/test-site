<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Slide extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
     $this->load->model('Slide_Model');
        $sid = $this->session->userdata('sid');
        if($sid == NULL){
            redirect('xyz','refresh');
        }


    }

    public function add_slide(){

        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/add_slide_list','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
    }
 public function manage_slide(){
        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/manage_slide','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
        $data['all_slide_info']= $this->Slide_Model->manage_slide_info();
    }

    public function save_slide(){



        $imgUrl = $this->uploadImage();
        $create = $this->Slide_Model->save_slide_info($imgUrl);

        if ($create == true) {
           
            $mData[] = array();
            $mData['message'] = "Enregistre avec Success";

            $this->session->set_userdata($mData);
            redirect('Slide/manage_slide');
            
        }
        else
        {
            $validator['success'] = false;
            $validator['messages'] = 'lhumm il ya une erreur quelque part';
        }



    }

    public function uploadImage()
    {

        $type = explode('.', $_FILES['imageslide']['name']);
        $type = $type[count($type) -1];
        $url = 'assets/images/slides/'.uniqid(rand()).'.'.$type;
        if (in_array($type, array('gif','jpeg','jpg','png','GIF','JPEG','JPG','PNG'))) {

            if (is_uploaded_file($_FILES['imageslide']['tmp_name'])) {

                if (move_uploaded_file($_FILES['imageslide']['tmp_name'], $url)) {
                    return $url;

                    # code...
                }
                else
                {
                    return false;
                }
            }
        }

    }






    public function slide_edit($id_slide){
        $data = array();
        $data['slide_info']= $this->Slide_Model->slide_edit_info($id_slide);
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/edit_slide',$data,TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
    }

     public function slide_voir($id_slide){
        $data = array();
        $data['slide_info']= $this->Contenu_Model->slide_edit_info($id_slide);
        $data = $this->load->view('Admin_Serdi/pages/slide_contenu',$data,TRUE);
        $this->load->view('Admin_Serdi/slide_serdi',$data);

    }



    public function slide_update(){
       

        $imgUrl = $this->uploadImage();
        $update = $this->Slide_Model->slide_update_info($imgUrl); 
        redirect('Slide/manage_slide');


        if ($update == true) {
            
            $mData[] = array();
            $mData['message'] = "Enregistre avec Success";
            redirect('Slide/manage_slide');

        } 


    }



      public function slide_update_image(){
       
        $imgUrl = $this->uploadImage();
        $update = $this->Slide_Model->slide_update_info_image($imgUrl); 
        redirect('Slide/manage_slide');


        if ($update == true) {
            $mData[] = array();
            $mData['message'] = "Enregistre avec Success";
           redirect('Slide/manage_slide');

        }
    }


}
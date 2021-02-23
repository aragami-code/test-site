<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Contenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       $this->load->model('Category_Model');
        $this->load->model('Contenu_Model');
        $sid = $this->session->userdata('sid');
        if($sid == NULL){
            redirect('xyz','refresh');
        }


    }

    public function add_contenu(){

        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/add_contenu_list','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
    }
 public function manage_contenu(){
        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/manage_contenu','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
        $data['all_contenu_info']= $this->Contenu_Model->manage_contenu_info();
    }

    public function save_contenu(){


       // $this->Contenu_Model->save_contenu_info();



        $imgUrl = $this->uploadImage();
        $create = $this->Contenu_Model->save_contenu_info($imgUrl);

        if ($create == true) {
            //$this->load->library('session');

            $mData[] = array();
            $mData['message'] = "Enregistre avec Success";

            $this->session->set_userdata($mData);
            redirect('Contenu/manage_contenu');
            
        }
        else
        {
            $validator['success'] = false;
            $validator['messages'] = 'lhumm il ya une erreur quelque part';
        }



    }

    public function uploadImage()
    {

        $type = explode('.', $_FILES['imageproduit']['name']);
        $type = $type[count($type) -1];
        $url = 'assets/images/'.uniqid(rand()).'.'.$type;
        if (in_array($type, array('gif','jpeg','jpg','png','GIF','JPEG','JPG','PNG'))) {

            if (is_uploaded_file($_FILES['imageproduit']['tmp_name'])) {

                if (move_uploaded_file($_FILES['imageproduit']['tmp_name'], $url)) {
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


    public function category_update(){
       $this->Category_Model->category_update_info();
       redirect('Category/manage_category');

    }





    public function contenu_edit($idproduit){
        $data = array();
        $data['contenu_info']= $this->Contenu_Model->contenu_edit_info($idproduit);
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/edit_contenu',$data,TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
    }

     public function contenu_voir($idproduit){
        $data = array();
        $data['contenu_info']= $this->Contenu_Model->contenu_edit_info($idproduit);
        $data = $this->load->view('Admin_Serdi/pages/edit_contenu',$data,TRUE);
        $this->load->view('Admin_Serdi/produit_serdi',$data);

    }



    public function contenu_update(){
       

        $imgUrl = $this->uploadImage();/**/
        $update = $this->Contenu_Model->contenu_update_info($imgUrl); 
        redirect('Contenu/manage_contenu');


        if ($update == true) {
            //$this->load->library('session');

            $mData[] = array();
            $mData['message'] = "Enregistre avec Success";

            //$this->session->set_userdata($mData);
           redirect('Contenu/manage_contenu');

        }
 
    }

    public function contenu_update_image(){
       


    }




/*


    public function editUploadImage()
{

        $type = explode('.', $_FILES['editPhoto']['name']);
        $type = $type[count($type) -1];
        $url = 'assets/images/'.uniqid(rand()).'.'.$type;
        if (in_array($type, array('gif','jpeg','jpg','png','GIF','JPEG','JPG','PNG'))) {

            if (is_uploaded_file($_FILES['editPhoto']['tmp_name'])) {

                if (move_uploaded_file($_FILES['editPhoto']['tmp_name'], $url)) {
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




*/










    public function publish_contenu($optionproduit){
        $this->Contenu_Model->publish_contenu_info($optionproduit);
        redirect('Contenu/manage_contenu');
    }
    public function unpublish_contenu($optionproduit){
        $this->Contenu_Model->unpublish_contenu_info($optionproduit);
        redirect('Contenu/manage_contenu');
    }
    public function delete_contenu($idproduit){
        $this->Contenu_Model->contenu_delete_info($idproduit);
        redirect('Contenu/manage_contenu');

    }



}
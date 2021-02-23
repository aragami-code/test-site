<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_Model extends CI_Model {

    public function save_category_info(){

        $data = array();
        //$data['idcontenu'] = $this->input->post('idcontenu',TRUE);
        $data['idservice'] = $this->input->post('idservice',TRUE);
        $data['nomservice'] = $this->input->post('nomservice',TRUE);
        $data['nomserviceEN'] = $this->input->post('nomserviceEN',TRUE);
        $data['nomserviceES'] = $this->input->post('nomserviceES',TRUE);
        $data['descriptionservice'] = $this->input->post('descriptionservice',TRUE);
        $data['descriptionserviceEN'] = $this->input->post('descriptionserviceEN',TRUE);
        $data['descriptionserviceES'] = $this->input->post('descriptionserviceES',TRUE);
        $this->db->insert('service',$data);
    }

     public function all_message(){
        $this->db->select('idservice');
        $this->db->from('service');
        $result_query=$this->db->get();
        $message_info = $result_query->result();
        return count($message_info);
    }

    public function manage_category_info(){

        $this->db->select('*');
        $this->db->from('service');
        $result_query=$this->db->get();
        $category_info = $result_query->result();
        return $category_info;
    }
    public function publish_category_info($idservice){

        $this->db->set('optionservice',1);
        $this->db->where('idservice',$idservice);
        $this->db->update('service');
    }
    public function unpublish_category_info($idservice){

        $this->db->set('optionservice',0);
        $this->db->where('idservice',$idservice);
        $this->db->update('service');
    }
    public function active_category_info(){

        $this->db->select('*');
        $this->db->where('optionservice= 0');
        $this->db->from('service');
        $result_query=$this->db->get();
        $category_info = $result_query->result();
        return $category_info;
    }
     public function active_category_info_EN(){

        $this->db->select('*');
        $this->db->where('optionservice= 0');
        $this->db->from('service');
        $result_query=$this->db->get();
        $category_info = $result_query->result();
        return $category_info;
    }
     public function active_category_info_ES(){

        $this->db->select('*');
        $this->db->where('optionservice= 0');
        $this->db->from('service');
        $result_query=$this->db->get();
        $category_info = $result_query->result();
        return $category_info;
    }
    public function category_delete_info($idservice){
        $this->db->where('idservice',$idservice);
        $this->db->delete('service');
    }
    public function category_edit_info($idservice){
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('idservice',$idservice);
        $query_result = $this->db->get();
        $category_info = $query_result->row();
        return $category_info;
    }

    public function category_update_info(){
        $data = array();
       $data['idservice'] = $this->input->post('idservice',TRUE);
        $data['nomservice'] = $this->input->post('nomservice',TRUE);
         $data['nomserviceEN'] = $this->input->post('nomserviceEN',TRUE);
          $data['nomserviceES'] = $this->input->post('nomserviceES',TRUE);
        $data['descriptionservice'] = $this->input->post('descriptionservice',TRUE);
        $data['descriptionserviceEN'] = $this->input->post('descriptionserviceEN',TRUE);
        $data['descriptionserviceES'] = $this->input->post('descriptionserviceES',TRUE);
        $data['optionservice'] = $this->input->post('optionservice',TRUE);
        $this->db->where('idservice',$data['idservice']);
        $this->db->update('service',$data);
    }


}
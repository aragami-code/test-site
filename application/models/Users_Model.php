<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model {

    public function save_users_info(){

        $data = array();
        //$data['idcontenu'] = $this->input->post('idcontenu',TRUE);
        $data['sid'] = $this->input->post('sid',TRUE);
        $data['snom'] = $this->input->post('snom',TRUE);
        $data['smail'] = $this->input->post('smail',TRUE);
        $data['spass'] = md5($this->input->post('spass',TRUE));
        $data['slevel'] = $this->input->post('slevel',TRUE);
        $data['sstatut'] = $this->input->post('sstatut',TRUE);
        $this->db->insert('serdi_admin',$data);
    }

    public function manage_users_info(){

        $this->db->select('*');
        $this->db->from('serdi_admin');
        $result_query=$this->db->get();
        $users_info = $result_query->result();
        return $users_info;
    }
    public function publish_users_info($sid){

        $this->db->set('sstatus',1);
        $this->db->where('sid',$sid);
        $this->db->update('serdi_admin');
    }
    public function unpublish_users_info($sid){

        $this->db->set('sstatut',0);
        $this->db->where('sid',$sid);
        $this->db->update('serdi_admin');
    }
    public function active_users_info(){

        $this->db->select('*');
        $this->db->where('sstatut= 0');
        $this->db->from('serdi_admin');
        $result_query=$this->db->get();
        $users_info = $result_query->result();
        return $users_info;
    }
     
    public function users_delete_info($sid){
        $this->db->where('sid',$sid);
        $this->db->delete('serdi_admin');
    }
    public function users_edit_info($sid){
        $this->db->select('*');
        $this->db->from('serdi_admin');
        $this->db->where('sid',$sid);
        $query_result = $this->db->get();
        $users_info = $query_result->row();
        return $users_info;
    }

    public function users_update_info(){

    	$passs = $data['spass'] = $this->input->post('spass',TRUE);
        $data = array();
       	$data['sid'] = $this->input->post('sid',TRUE);
        $data['snom'] = $this->input->post('snom',TRUE);
        $data['smail'] = $this->input->post('smail',TRUE);

        if ($passs =="") {

                $data['spass'] =  $this->input->post('old_spass',TRUE);

                # code...
            }


             else{
                 # code...
                $data['spass'] = md5($this->input->post('spass',TRUE));
            }/**/
        //$data['spass'] = md5($this->input->post('spass',TRUE));
        $data['slevel'] = $this->input->post('slevel',TRUE);
        $data['sstatut'] = $this->input->post('sstatut',TRUE);
        $this->db->where('sid',$data['sid']);
        $this->db->update('serdi_admin',$data);
    }


}
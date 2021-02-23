<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Message_Model extends CI_Model {

    public function save_message_mail_info(){
		
        $data = array();
	   
		$data['expediteur'] = $this->input->post('expediteur',TRUE);
		$data['email'] = $this->input->post('email',TRUE);
		$data['telephone'] = $this->input->post('telephone',TRUE);
    $data['objet'] = $this->input->post('objet',TRUE);
	 $data['descriptionmail'] = $this->input->post('descriptionmail',TRUE); 
    $data['heure'] = date('Y-m-d H:i:s');
		$this->db->insert('mail',$data);
		
		$subject ="vous avez recu un mail de ";
		$message = '
   <h3 align="center">MESSAGE</h3>
    <table border="1" width="100%" cellpadding="5">
     <tr>
      <td width="30%">NOM</td>
      <td width="70%">'.$this->input->post("expediteur").'</td>
     </tr>
     <tr>
      <td width="30%">NUMERO DE TELEPHONE</td>
      <td width="70%">'.$this->input->post("telephone").'</td>
     </tr>
     <tr>
      <td width="30%">Adresse Email</td>
      <td width="70%">'.$this->input->post("email").'</td>
     </tr>
       <tr>
      <td width="30%">OBJET</td>
      <td width="70%">'.$this->input->post("objet").'</td>
     </tr>
    
    
    
     <tr>
      <td width="30%">Message</td>
      <td width="70%">'.$this->input->post("descriptionmail").'</td>
     </tr>
    </table>
   ';

   $config = Array(


	//'useragent' => 'CodeIgniter',
	'protocol' => 'smtp',
	'smtp_host' => 'ssl://smtp.googlemail.com',
	'smtp_user' => 'timotheefredy@gmail.com',
	'smtp_pass' => 'a123456789.',
	'smtp_crypto'  => 'ssl',
	'smtp_port' => 465,
	'smtp_timeout' => 5,
	'wordwrap' => TRUE,
	'wrapchars' => 76,
	'mailtype' => 'html',
	'charset' => 'utf-8',
	'validate' => FALSE,
	'priority' => 3,
	'crlf' => "\r\n",
	'newline' => "\r\n",
	'bcc_batch_mode' => FALSE,
	'bcc_batch_size' => 200,
 );
	  

	  
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from($this->input->post("email"));
      $this->email->to('timotheefredy@gmail.com');
      $this->email->subject($subject);
	  $this->email->message($message);
	  

         if($this->email->send())
         {
         
           $this->session->set_flashdata('message', 'Application Sended');
           redirect('index');
         
         }
         else
         {
          
           $this->session->set_flashdata('message', 'There is an error in email send');
           redirect('index');
         
         }
     }



   // }

    public function manage_message_info(){ 

        $this->db->select('*');
        $this->db->from('mail');
      //   ORDER BY `heure` DESC
      $this->db->order_by('heure','desc');
        $result_query=$this->db->get();
        $message_info = $result_query->result();
        return $message_info;
    }

    public function manage_message_info1(){ 

        $this->db->select('*');
        $this->db->from('mail');
      //   ORDER BY `heure` DESC
      $this->db->order_by('heure','desc');
      $this->db->limit(5);
        $result_query=$this->db->get();
        $message_info = $result_query->result();
        return $message_info;
    }
    public function all_message(){
		$this->db->select('id');
        $this->db->from('mail');
        $result_query=$this->db->get();
        $message_info = $result_query->result();
        return count($message_info);
    }
   /* public function unpublish_category_info($idservice){

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
    }*/

     public function message_edit_info($id){
        $this->db->select('*');
        $this->db->from('mail');
        $this->db->where('id',$id);
        $query_result = $this->db->get();
        $message_info = $query_result->row();
        return $message_info;
    }
    public function message_delete_info($id){
        $this->db->where('id',$id);
        $this->db->delete('mail');
    }
    /*public function category_edit_info($idservice){
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

*/
}

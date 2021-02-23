<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller
{
    public function __construct()
    {

		
		








        parent::__construct();
		$this->load->model('Message_Model');
		//$this->load->email('Message_Model');
		//$this->load->library('email', $config);
        //$sid = $this->session->userdata('sid');
        //if($sid == NULL){
          //  redirect('xyz','refresh');
        //}


    }
   public function send(){

	   // $data = array();
	  ///**/
	  $data = array();
	  $data['expediteur'] = $this->input->post('expediteur',TRUE);
	  $data['email'] = $this->input->post('email',TRUE);
	  $data['telephone'] = $this->input->post('telephone',TRUE);
	  $data['descriptionmail'] = $this->input->post('descriptionmail',TRUE);
	  //$expediteur = $this->input->post('expediteur');
	  //$email = $this->input->post('email');
	  //$telephone = $this->input->post('telephone');
	  //$descriptionmail = $this->input->post('descritionmail');
	  //$slevel = 1;

	 //
	//  $result = $this->Admin_Model->admin_login_check_info($snom,$spass);	
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
      <td width="30%">Message</td>
      <td width="70%">'.$this->input->post("descriptionmail").'</td>
     </tr>
    </table>
   ';

	$this->email->set_newline("\r\n");
	$this->email->from($this->input->post("email"));
	$this->email->to('timotheefredy@gmail.com');
	$this->email->subject($subject);
	$this->email->message($message);
	

	  $this->email->send();
	
	 	 $this->Message_Model->save_message_mail_info();
		$this->load->view('index/index');
    }
 

}

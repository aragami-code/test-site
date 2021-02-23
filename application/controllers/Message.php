<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Message_Model');
        $sid = $this->session->userdata('sid');
        if($sid == NULL){
            redirect('xyz','refresh');
        }


    }

    public function add_message(){

          $data = array();
                $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/add_message_list','',TRUE);
                $this->load->view('Admin_Serdi/admin_serdi',$data);
    }/**/
    public function manage_message(){
     
        
        $data = array();
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/manage_message','',TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);
       $data['all_message_info']= $this->Message_Model->manage_message_info();
    }
 /*   public function save_message(){

    $this->Category_Model->save_message_info();
    $mData[] = array();

    $mData['message'] = "Enregistre envoyé avec Success";
    $this->session->set_userdata($mData);
    redirect('Category/manage_message');

    }


*/    
    public function message_read($id){
        $data = array();
        $data['message_info']= $this->Message_Model->message_edit_info($id);
        $data['Admin_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/read_message',$data,TRUE);
        $this->load->view('Admin_Serdi/admin_serdi',$data);

    }

    public function message_mail_send(){

        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $from = "timotheefredy@gmail.com";

         


    //'useragent' => 'CodeIgniter',
     $config['protocol'] = 'smtp';
     $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_user'] = 'timotheefredy@gmail.com';
    $config['smtp_pass'] = 'a123456789.';
    $config['smtp_port'] ='465';
  $config['smtp_timeout'] ='60';
   $config['mailtype'] ='html';
   $config['charset'] ='utf-8';
   $config['validation'] =True;
   $config['newline'] ="\r\n";
   

      $this->email->initialize($config);
      $this->email->set_mailtype("html");
      $this->email->from($from);
      $this->email->to($to);
      $this->email->subject($subject);
      $this->email->message($message);
      

         if($this->email->send())
         {
         
           $this->session->set_flashdata('message', 'Application Sended');
           redirect('manage_message');
         
         }
         else
         {
          
           $this->session->set_flashdata('message', 'There is an error in email send');
           redirect('add_message');
         
         }

    }
   public function delete_message($id){
        $this->Message_Model->message_delete_info($id);
        redirect('Message/manage_message');

    }

/* */

}

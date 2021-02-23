<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
        //$this->load->model('Slide_Model');
        //$this->load->model('Category_Model');
        //$this->load->model('Contenu_Model');
        //$this->load->model('Vue_Produit_Model');

    }





	public function index()
	{
		$this->load->view('acceuil');
	}
/*	public function Home()
	{
		$this->load->view('home');
	}
	public function Bienvenida()
	{
		$this->load->view('bienvenida');
	}
*/


    public function contenu_vue($idproduit){
        $data = array();
        $data['contenu_info']= $this->Vue_Produit_Model->produit_vue_info($idproduit);
        $data['Produit_Serdi_Content'] = $this->load->view('Admin_Serdi/pages/vue_produit',$data,TRUE);
        $this->load->view('Admin_Serdi/produit_serdi',$data);

    }


}

<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Slide_Model extends CI_Model
{
/*
    public function save_contenu_info()
    {

        $data = array();
        //$data['idcontenu'] = $this->input->post('idcontenu',TRUE);
        $data['idblock1'] = $this->input->post('idblock1', TRUE);
        $data['titrecontenu'] = $this->input->post('titrecontenu', TRUE);
        $data['infocontenu'] = $this->input->post('infocontenu', TRUE);
        'image'=> $imgUrl,
        $data['imagecontenu'] = $this->input->post('imagecontenu', TRUE);
        $data['optioncontenu'] = $this->input->post('optioncontenu', TRUE);
        $this->db->insert('contenu', $data);
   }*/
    public function manage_slide_info(){

         $this->db->select('*');
        //$this->db->distinct();
        $this->db->from('slide');
        $result_query=$this->db->get();
        $slide_info = $result_query->result();
        return $slide_info;
    }


     public function all_message(){
        $this->db->select('id_slide');
        $this->db->from('slide');
        $result_query=$this->db->get();
        $message_info = $result_query->result();
        return count($message_info);
    }



    public function active_slide_info1(){

         $this->db->select('*');
        $this->db->from('slide');
        $result_query=$this->db->get();
        $slide_info = $result_query->result();
        return $slide_info;
    }
  /*  public function publish_contenu_info($optionproduit){

        $this->db->set('optionproduit',1);
        $this->db->where('idproduit',$optionproduit);
        $this->db->update('produits');
    }
    public function unpublish_contenu_info($optionproduit){

        $this->db->set('optionproduit',0);
        $this->db->where('idproduit',$optionproduit);
        $this->db->update('produits');
    }
*/
    public function slide_delete_info($id_slide){
        $this->db->where('id_slide',$id_slide);
        $this->db->delete('slide');
    }
    /*public function active_contenu_info2(){

        $this->db->where('optionproduit = 0');
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->distinct();
        $result_query=$this->db->get();
        $slide_info = $result_query->result();
        return $slide_info;
    }*/
    public function save_slide_info($imgUrl)

    {
        //$validator = array('success'=>'false','messages'=>array());

        if ($imgUrl != '') {
            $img_url = 'assets/images/0.jpg';
        }
        $insert_data = array(

        'id_slide' => $this->input->post('id_slide'),
        'nom_slide' => $this->input->post('nom_slide'),
        'titre_slide' => $this->input->post('titre_slide'),
        'titre_slide_en' => $this->input->post('titre_slide_en'),
        'titre_slide_es' => $this->input->post('titre_slide_es'),
        'description_slide' => $this->input->post('description_slide'),
        'description_slide_en' => $this->input->post('description_slide_en'),
        'description_slide_es' => $this->input->post('description_slide_es'),
        'imageslide'=> $imgUrl,
        //'imagecontenu' => $this->input->post('imagecontenu'),
        //'optionproduit' => $this->input->post('optionproduit'),
             );
        $status = $this->db->insert('slide', $insert_data);
        return ($status == true) ? true : false;
    }


    public function slide_edit_info($id_slide){
        $this->db->select('*');
        $this->db->from('slide');
        $this->db->where('id_slide',$id_slide);
        $query_result = $this->db->get();
        $slide_info = $query_result->row();
        return $slide_info;
    }

    public function slide_update_info($imgUrl){
        $data = array();
        $data['id_slide'] = $this->input->post('id_slide',TRUE);
        $data['nom_slide'] = $this->input->post('nom_slide',TRUE);
        $data['titre_slide'] = $this->input->post('titre_slide',TRUE);
        $data['titre_slide_en'] = $this->input->post('titre_slide_en',TRUE);
        $data['titre_slide_es'] = $this->input->post('titre_slide_es',TRUE);
        $data['description_slide'] = $this->input->post('description_slide',TRUE);
        $data['description_slide_en'] = $this->input->post('description_slide_en',TRUE);
        $data['description_slide_es'] = $this->input->post('description_slide_es',TRUE);


              if ( $imgUrl =="") {

                $data['imageslide'] =  $this->input->post('old_imageslide',TRUE);

                # code...
            }
            else {
                 # code...
                $data['imageslide'] = $imgUrl;
            }/**/




        $this->db->where('id_slide',$data['id_slide']);
        $this->db->update('slide',$data);


        } public function slide_update_info_image(){

       
        }



}
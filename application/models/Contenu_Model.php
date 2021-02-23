<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Contenu_Model extends CI_Model
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
    public function manage_contenu_info(){

         $this->db->select('*');
        //$this->db->distinct();
        $this->db->from('produits');
        $result_query=$this->db->get();
        $contenu_info = $result_query->result();
        return $contenu_info;
    }

    public function top3_produit_contenu_info(){

         $this->db->select('*');
        $this->db->from('produits');
       $this->db->order_by('idproduit','desc');
       $this->db->limit(3);
        $result_query=$this->db->get();
        $contenu_info = $result_query->result();
        return $contenu_info;
    }


     public function all_message(){
        $this->db->select('idproduit');
        $this->db->from('produits');
        $result_query=$this->db->get();
        $message_info = $result_query->result();
        return count($message_info);
    }
 
    public function active_contenu_info1(){

         $this->db->select('*');
        $this->db->from('produits');
        $result_query=$this->db->get();
        $contenu_info = $result_query->result();
        return $contenu_info;
    }
    public function publish_contenu_info($optionproduit){

        $this->db->set('optionproduit',1);
        $this->db->where('idproduit',$optionproduit);
        $this->db->update('produits');
    }
    public function unpublish_contenu_info($optionproduit){

        $this->db->set('optionproduit',0);
        $this->db->where('idproduit',$optionproduit);
        $this->db->update('produits');
    }

    public function contenu_delete_info($idproduit){
        $this->db->where('idproduit',$idproduit);
        $this->db->delete('produits');
    }
    public function active_contenu_info2(){

        $this->db->where('optionproduit = 0');
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->distinct();
        $result_query=$this->db->get();
        $contenu_info = $result_query->result();
        return $contenu_info;
    }
     public function active_contenu_info2EN(){

        $this->db->where('optionproduit = 0');
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->distinct();
        $result_query=$this->db->get();
        $contenu_info = $result_query->result();
        return $contenu_info;
    }/**/
    public function save_contenu_info($imgUrl)

    {
        //$validator = array('success'=>'false','messages'=>array());

        if ($imgUrl != '') {
            $img_url = 'assets/images/0.jpg';
        }
        $insert_data = array(

        'idproduit' => $this->input->post('idbproduit'),
        'titreproduit' => $this->input->post('titreproduit'),
         'titreproduitEN' => $this->input->post('titreproduitEN'),
          'titreproduitES' => $this->input->post('titreproduitES'),

        'descriptionproduit' => $this->input->post('descriptionproduit'),
        'descriptionproduitEN' => $this->input->post('descriptionproduitEN'),
        'descriptionproduitES' => $this->input->post('descriptionproduitES'),
        'imageproduit'=> $imgUrl,
        //'imagecontenu' => $this->input->post('imagecontenu'),
        'optionproduit' => $this->input->post('optionproduit'),
             );
        $status = $this->db->insert('produits', $insert_data);
        return ($status == true) ? true : false;
    }


    public function contenu_edit_info($idproduit){
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->where('idproduit',$idproduit);
        $query_result = $this->db->get();
        $contenu_info = $query_result->row();
        return $contenu_info;
    }

    public function contenu_update_info($imgUrl){



        $data = array();
        $data['idproduit'] = $this->input->post('idproduit',TRUE);
        $data['titreproduit'] = $this->input->post('titreproduit',TRUE);
        $data['titreproduitEN'] = $this->input->post('titreproduitEN',TRUE);
        $data['titreproduitES'] = $this->input->post('titreproduitES',TRUE);
        $data['descriptionproduit'] = $this->input->post('descriptionproduit',TRUE);
        $data['descriptionproduitEN'] = $this->input->post('descriptionproduitEN',TRUE);
        $data['descriptionproduitES'] = $this->input->post('descriptionproduitES',TRUE);
        $data['textproduit'] = $this->input->post('textproduit',TRUE);
        $data['textproduitES'] = $this->input->post('textproduitES',TRUE);
        $data['textproduitES'] = $this->input->post('textproduitES',TRUE);
        $data['optionproduit'] = $this->input->post('optionproduit',TRUE);

            if ( $imgUrl =="") {

                $data['imageproduit'] =  $this->input->post('old_imageproduit',TRUE);

                # code...
            }
            else {
                 # code...
                $data['imageproduit'] = $imgUrl;
            }/**/

        
               
        $this->db->where('idproduit',$data['idproduit']);
        $this->db->update('produits',$data);


        }


         public function contenu_update_info_image(){
        $data = array();
        $data['imageproduit'] = $imgUrl;
        $this->db->where('idproduit',$data['idproduit']);
        $this->db->update('produits',$data);


        }



}
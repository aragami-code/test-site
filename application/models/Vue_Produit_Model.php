<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Vue_Produit_Model extends CI_Model
{


    public function produit_vue_info_ENG($idproduit)
    {
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->where('idproduit', $idproduit);
        $query_result = $this->db->get();
        $produit_info = $query_result->row();
        return $produit_info;
    }


    public function produit_vue_info_ESP($idproduit)
    {
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->where('idproduit', $idproduit);
        $query_result = $this->db->get();
        $produit_info = $query_result->row();
        return $produit_info;
    }


    public function produit_vue_info($idproduit)
    {
        $this->db->select('*');
        $this->db->from('produits');
        $this->db->where('idproduit', $idproduit);
        $query_result = $this->db->get();
        $produit_info = $query_result->row();
        return $produit_info;
    }

}
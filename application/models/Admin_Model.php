<?php
/**
 * Created by PhpStorm.
 * User: timot
 * Date: 11-Jul-20
 * Time: 19:44
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    public function admin_login_check_info($snom,$spass){

        $query = $this->db->where('snom',$snom)->where('slevel = 1')->where('spass',md5($spass))->get('serdi_admin');
        return $query->result_array();

    }





}
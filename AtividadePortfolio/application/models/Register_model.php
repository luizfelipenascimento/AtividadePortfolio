<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register_model
 *
 * @author Luiz Felipe
 */
class Register_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
        
    }
    
    function set_user() {
        $this->load->model('dao/UserDAO');
        
        $data = array(
                'nome' => $this->input->post('usr_fname'),
                'snome' => $this->input->post('usr_lname'),
                'email' => $this->input->post('usr_email'), 
            );
        
        $this->UserDAO->insert_user($data);
    }
    
}

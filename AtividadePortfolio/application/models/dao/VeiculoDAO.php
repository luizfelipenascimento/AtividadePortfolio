<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VeiculoDAO
 *
 * @author Luiz Felipe
 */
class VeiculoDAO extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function get_veiculo($placa) {
        $query = $this->db->get_where('veiculo', array('placa' => $placa));
        return $query->row_array();
    }
    
    
}

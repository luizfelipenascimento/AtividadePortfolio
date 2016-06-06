<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDAO
 *
 * @author Luiz Felipe
 */
//nome da tabela seguido de DAO
class UserDAO extends CI_Model {
    function UserDAO() {
        parent::__construct();
        $this->load->database();
    }
    
    function createTable() {
        $sql = "CREATE TABLE IF NOT EXISTS user("
                . "id int(11) not null auto_increment primary key, "
                . "nome varchar(40) not null,"
                . "snome varchar(40) not null,"
                . "email varchar(40) not null"
                . ")";
        $this->db->query($sql);
    }
    
    function get_user($id) {
        $query = $this->db->get_where('user', array('id'=>$id));
        return $query->row_array();
    }
    
    function insert_user($data) {
        $this->db->insert('user', $data);
    }
    
}

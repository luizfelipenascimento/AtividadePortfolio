<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author Luiz Felipe
 */
class Register extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
            
    function index() {
        
        $this->form_validation->set_message('required', 'O campo é necessario');
        $this->form_validation->set_message('min_length', 'Esse valor não é valido');
        
        $this->form_validation->set_rules('usr_fname', 'nome', 'required|min_length[3]');
        $this->form_validation->set_rules('usr_lname', 'sobrenome', 'required|min_length[5]');
        $this->form_validation->set_rules('usr_email', 'email', 'required|min_length[10]');
        
        if($this->form_validation->run() === FALSE) {
            $this->load->view('common/header');
            $this->load->view('users/register');
            $this->load->view('common/footer');        
        }
        else {
            $this->load->model('register_model');
            $this->register_model->set_user();
            $this->load->view('common/header');
            $this->load->view('users/registerSuccess');
            $this->load->view('common/footer');        
        }
        
    }    
    
}

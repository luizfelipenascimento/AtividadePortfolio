<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'My_Controller.php';

class Veiculo extends My_Controller {
        
        function __construct() {
            parent::__construct();
            $this->load->model("dao/VeiculoDAO");
            $this->load->model("dao/UserDAO");
        }
    
    
	public function index(){
            //echo "Ol&aacute; Pessoal.<br> Sejam benvidos &agrave; discplina LPII";
            $this->load->view('common/header');
            
            $data['form_post_url'] = 'welcome/create';
            $this->load->view('test/register', $data);
//            $data['nome'] = 'Maria';
//            $data['sobrenome'] = 'dos Santos';
            //$this->load->view('sample_view',$data); //data vetor associativo
            
            $this->load->view('common/footer');
	}
        
        public function placa($placa) {
            $data['veiculo'] = $this->VeiculoDAO->get_veiculo($placa);
            $data['user'] = $this->UserDAO->get_user($data['veiculo']['fk_user']);
            
            $this->load->view('common/header');
            $this->load->view('veiculo/veiculoProprietario',$data);
            $this->load->view('common/footer');
            
        }
        
        public function bemVindo() {
            $this->load->view('common/header');
            $this->load->view('test/bemVindo');
            $this->load->view('common/footer');
        }
        
        public function create() {
            //regras de validação 
            $this->form_validation->set_rules('first_name','Nome','trim|required|min_lenght[10]|max_lenght[15]');
            $this->form_validation->set_rules('last_name', 'Sobrenome','trim|required|min_lenght[10]|required|max_lenght[50]');
        }
        
        
        
}

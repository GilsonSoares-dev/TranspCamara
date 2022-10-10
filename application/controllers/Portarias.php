<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Portarias extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = ["titulo"=>"Portarias".CIDADE];
        $this->load->view("portarias/lista_portaria", $data);
                
    }
    
    public function cadPortaria()
    {
        $data = ["titulo"=>"Cadastro de Portaria".CIDADE];
        $this->load->view("portarias/cad_portaria", $data);
    }

    public function editaPortaria()
    {
        $data = ["titulo"=>"Editar Portaria".CIDADE];
        $this->load->view("portarias/edita_portaria", $data);
    }

    public function detalhePortaria()
    {
        $data = ["titulo"=>"Detalhes da Portaria".CIDADE];
        $this->load->view("portarias/detalhe_portaria", $data);
    }

}
        
    /* End of file  Portarias.php */
        
                            
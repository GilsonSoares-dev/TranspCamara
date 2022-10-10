<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Decretos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Decretos".CIDADE];
        $this->load->view("decretos/lista_decreto", $data);
                
    }

    public function cadDecreto()
    {
        $data = ["titulo"=>"Cadastro de Decretos".CIDADE];
        $this->load->view("decretos/cad_decreto",$data);
    }

    public function editaDecreto()
    {
        $data = ["titulo"=>"Editar Decreto".CIDADE];
        $this->load->view("decretos/edita_decreto", $data);
    }

    public function detalheDecreto()
    {
        $data = ["titulo"=>"Detalhes do Decreto".CIDADE];
        $this->load->view("decretos/detalhe_decreto", $data);
    }

}
        
    /* End of file  Decretos.php */
        
                            
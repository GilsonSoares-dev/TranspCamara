<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Emendas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data = ["titulo"=>"Emendas".CIDADE];
        $this->load->view("leis/lista_emenda", $data);
                
    }

    public function cadEmenda()
    {
        $data = ["titulo"=>"Cadastro de Emendas".CIDADE];
        $this->load->view("leis/cad_emenda",$data);
    }

    public function editaEmenda()
    {
        $data = ["titulo"=>"Editar Emendas".CIDADE];
        $this->load->view("leis/edita_emenda", $data);
    }

    public function detalheEmenda()
    {
        $data = ["titulo"=>"Detalhes da Emenda".CIDADE];
        $this->load->view("leis/detalhe_emenda", $data);
    }

}
        
    /* End of file  Emendas.php */
        
                            
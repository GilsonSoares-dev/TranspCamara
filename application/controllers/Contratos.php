<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Contratos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Contratos" . CIDADE];
        $this->load->view("contratos/lista_contrato", $data);
                
    }

    public function cadContrato()
    {
        $data = ["titulo"=>"Cadastro de Contratos" . CIDADE];
        $this->load->view("contratos/cad_contrato",$data);
    }

    public function detalheContrato()
    {
        $data = ["titulo"=>"Detalhes do Contratos" . CIDADE];
        $this->load->view("contratos/detalhe_contrato",$data);
    }

    public function cadAta()
    {
        $data = ["titulo"=>"Cadastro de Ata de Registro de Preço" . CIDADE];
        $this->load->view("contratos/cad_ata", $data);
    }

    public function cadAditivo()
    {
        $data = ["titulo"=>"Cadastro de Aditivo" . CIDADE];
        $this->load->view("contratos/cad_aditivo", $data);
    }

    public function cadDistrato()
    {
        $data = ["titulo"=>"Cadastro de Distrato" . CIDADE];
        $this->load->view("contratos/cad_distrato", $data);
    }

   

}
        
    /* End of file  Contratos.php */
        
                            
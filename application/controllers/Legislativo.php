<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Legislativo extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function emendas()
    {
        $data = ["titulo"=>"Emendas Legislativas".CIDADE];
        $this->load->view("legislativo/emendas", $data);
                
    }

    public function novaEmenda()
    {
        $data = ["titulo"=>"Cadastro de Emenda".CIDADE];
        $this->load->view("legislativo/nova_emenda",$data);
    }

    public function resolucao()
    {
        $data = ["titulo"=>"Resoluções".CIDADE];
        $this->load->view("legislativo/resolucoes",$data);
    }

    public function novaResolucao()
    {
        $data = ["titulo"=>"Cadastro de Resolução".CIDADE];
        $this->load->view("legislativo/nova_resolucao",$data);
    }

    public function mocao()
    {
        $data = ["titulo"=>"Moções".CIDADE];
        $this->load->view("legislativo/mocoes",$data);
    }

    public function novaMocao()
    {
        $data = ["titulo"=>"Cadastro de Moção".CIDADE];
        $this->load->view("legislativo/nova_mocao",$data);
    }


}
        
    /* End of file  Legislativo.php */
        
                            
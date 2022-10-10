<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Esic extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        

        $data = ["titulo"=>"Serviço de Informação ao Cidadão".CIDADE];
        $this->load->view("esic/index", $data);
                
    }

    public function painel()
    {
       $data = ["titulo"=>"Painel e-SIC". CIDADE];
       $this->load->view("esic/painel", $data);
    }

    public function ouvidoria()
    {
       $data = ["titulo"=>"Ouvidoria". CIDADE];
       $this->load->view("esic/ouvidoria", $data);
    }

    public function denuncia()
    {
       $data = ["titulo"=>"Denúnica". CIDADE];
       $this->load->view("esic/denuncia", $data);
    }

    public function elogio()
    {
       $data = ["titulo"=>"Elogio". CIDADE];
       $this->load->view("esic/elogio", $data);
    }

    public function sugestao()
    {
       $data = ["titulo"=>"Sugestão". CIDADE];
       $this->load->view("esic/sugestao", $data);
    }
     
    public function reclamacao()
    {
       $data = ["titulo"=>"Reclamação". CIDADE];
       $this->load->view("esic/reclamacao", $data);
    }

    public function solicitacao()
    {
       $data = ["titulo"=>"Solicitação". CIDADE];
       $this->load->view("esic/solicitacao", $data);
    }

    public function solicitacoes()
    {
       $data = ["titulo"=>"Solicitações". CIDADE];
       $this->load->view("esic/solicitacoes", $data);
    }

    public function d_solicitacao()
    {
       $data = ["titulo"=>"Solicitação". CIDADE];
       $this->load->view("esic/d_solicitacao", $data);
    }

    public function chat()
    {
       $data = ["titulo"=>"chat". CIDADE];
       $this->load->view("esic/chat", $data);
    }

}
        
    /* End of file  Programas.php */
        
                            
<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Licitacoes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data = ["titulo"=>"Licitações".CIDADE];
        $this->load->view("licitacao/lista_licitacao", $data);
                
    }

    public function cadLicitacao()
    {
        $data = ["titulo"=>"Cadastro de Licitações".CIDADE];
        $this->load->view("licitacao/cad_licitacao",$data);
    }

    public function detalheLicitacao()
    {
        $data = ["titulo"=>"Detalhes da Licitações".CIDADE];
        $this->load->view("licitacao/detalhe_licitacao",$data);

    }

    public function editaLicitacao()
    {
       $data = ["titulo"=>"Editar Licitação".CIDADE];
       $this->load->view("licitacao/edita_licitacao",$data);
    }


}
        
    /* End of file  Licitacoes.php */
        
                            
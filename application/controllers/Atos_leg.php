<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Atos_leg extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    
    public function autografolei()
    {
        $data = ["titulo"=>"Autógrafos de Lei".CIDADE];
        $this->load->view("atos_leg/autografolei", $data);
                
    }

    public function nautografo()
    {
        $data = ["titulo"=>"Cadastro de Autógrafo de Lei" . CIDADE];
        $this->load->view("atos_leg/nautografo",$data);
    }

    public function projetolei()
    {
        $data = ["titulo"=>"Projetos de Lei".CIDADE];
        $this->load->view("atos_leg/projetolei", $data);
                
    }

    public function nprojetolei()
    {
        $data = ["titulo"=>"Cadastro de Projeto de Lei" . CIDADE];
        $this->load->view("atos_leg/nprojetolei",$data);
    }

    public function projetoresolucao()
    {
        $data = ["titulo"=>"Projetos de Resolução".CIDADE];
        $this->load->view("atos_leg/projetoresolucao", $data);
                
    }

    public function nprojetoresolucao()
    {
        $data = ["titulo"=>"Novo Projeto de Resolução".CIDADE];
        $this->load->view("atos_leg/nprojetoresolucao", $data);
                
    }

    public function requerimentos()
    {
        $data = ["titulo"=>"Requerimentos".CIDADE];
        $this->load->view("atos_leg/requerimentos", $data);
                
    }

    public function nrequerimento()
    {
        $data = ["titulo"=>"Novo Requerimento".CIDADE];
        $this->load->view("atos_leg/nrequerimento", $data);
                
    }

    public function atas()
    {
        $data = ["titulo"=>"Atas de Sessão".CIDADE];
        $this->load->view("atos_leg/atas", $data);
                
    }

    public function nata()
    {
        $data = ["titulo"=>"Nova Ata de Sessão".CIDADE];
        $this->load->view("atos_leg/nata", $data);
                
    }

    public function pcomissoes()
    {
        $data = ["titulo"=>"Parecer de Comissões".CIDADE];
        $this->load->view("atos_leg/pcomissoes", $data);
                
    }

    public function novoparecer()
    {
        $data = ["titulo"=>"Adicionar Parecer".CIDADE];
        $this->load->view("atos_leg/novoparecer", $data);
                
    }

    public function oficios()
    {
        $data = ["titulo"=>"Ofícios".CIDADE];
        $this->load->view("atos_leg/oficios", $data);
                
    }

    public function novo_oficio()
    {
        $data = ["titulo"=>"Adicionar Ofício".CIDADE];
        $this->load->view("atos_leg/novo_oficio", $data);
                
    }

    public function listapresenca()
    {
        $data = ["titulo"=>"Lista de Presença de Sessão".CIDADE];
        $this->load->view("atos_leg/listapresenca", $data);
                
    }

    public function novalista()
    {
        $data = ["titulo"=>"Lista de Presença de Sessão".CIDADE];
        $this->load->view("atos_leg/novalista", $data);
                
    }

    public function pautasessao()
    {
        $data = ["titulo"=>"Pautas de Sessão".CIDADE];
        $this->load->view("atos_leg/pautas", $data);
                
    }

    public function novapauta()
    {
        $data = ["titulo"=>"Pautas de Sessão".CIDADE];
        $this->load->view("atos_leg/novapauta", $data);
                
    }

   


}
        
    /* End of file  Atos_leg.php */
        
                            
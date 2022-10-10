<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Resp_fiscal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    // Balanço anual

    public function index()
    {
        $data = ["titulo"=>"Responsabilidade Fiscal".CIDADE];
        $this->load->view("resp_fiscal/lista_balanco", $data);            
    }

    public function cadBalanco()
    {
        $data = ["titulo"=>"Responsabilidade Fiscal".CIDADE];
        $this->load->view("resp_fiscal/cad_balanco",$data);
    }

    public function editaBalanco()
    {
        $data = ["titulo"=>"Responsabilidade Fiscal".CIDADE];
        $this->load->view("resp_fiscal/edita_balanco", $data);
    }

    public function detalheBalanco()
    {
        $data = ["titulo"=>"Responsabilidade Fiscal".CIDADE];
        $this->load->view("resp_fiscal/detalhe_balanco", $data);
    }


    //Relatório resumido de execução orçamentária

    public function Rreo()
    {
        $data = ["titulo"=>"Relatório Resumido de Execução Orçamentária".CIDADE];
        $this->load->view("resp_fiscal/rreo", $data);
    }

    public function cadRreo()
    {
        $data = ["titulo"=>"Relatório Resumido de Execução Orçamentária".CIDADE];
        $this->load->view("resp_fiscal/cadrreo", $data);
    }

    public function dtRreo()
    {
        $data = ["titulo"=>"Relatório Resumido de Execução Orçamentária".CIDADE];
        $this->load->view("resp_fiscal/dtrreo", $data);
    }

    public function edRreo()
    {
        $data = ["titulo"=>"Relatório Resumido de Execução Orçamentária".CIDADE];
        $this->load->view("resp_fiscal/edrreo", $data);
    }

    //Relatório de Gestão Fiscal

    public function rgf()
    {
        $data = ["titulo"=>"Relatório de Gestão Fiscal".CIDADE];
        $this->load->view("resp_fiscal/rgf", $data);
    }

    public function cadRgf()
    {
        $data = ["titulo"=>"Relatório de Gestão Fiscal".CIDADE];
        $this->load->view("resp_fiscal/cadrgf", $data);
    }

    public function dtRgf()
    {
        $data = ["titulo"=>"Relatório de Gestão Fiscal".CIDADE];
        $this->load->view("resp_fiscal/dtrgf", $data);
    }

    public function edRgf()
    {
        $data = ["titulo"=>"Relatório de Gestão Fiscal".CIDADE];
        $this->load->view("resp_fiscal/edrgf", $data);
    }


     //Planejamento Orçamentário

    public function planejamento()
    {
        $data = ["titulo"=>"Planejamento".CIDADE];
        $this->load->view("resp_fiscal/planejamento", $data);
    }

    public function lei()
    {
        $data = ["titulo"=>"Planejamento".CIDADE];
        $this->load->view("resp_fiscal/lei", $data);
    } 
    
    //Renúncias Fiscais

    public function renuncia()
    {
        $data = ["titulo"=>"Renúncias Fiscais".CIDADE];
        $this->load->view("resp_fiscal/renuncia", $data);
    } 

    public function nrenuncia()
    {
        $data = ["titulo"=>"Renúncias Fiscais".CIDADE];
        $this->load->view("resp_fiscal/nrenuncia", $data);
    } 

    public function dtrenuncia()
    {
        $data = ["titulo"=>"Renúncias Fiscais".CIDADE];
        $this->load->view("resp_fiscal/dtrenuncia", $data);
    } 

    public function edrenuncia()
    {
        $data = ["titulo"=>"Renúncias Fiscais".CIDADE];
        $this->load->view("resp_fiscal/edrenuncia", $data);
    } 

    //Parecer do Tribunal de Contas
    public function parecertb()
    {
        $data = ["titulo"=>"Parecerer do Tribunal de Contas".CIDADE];
        $this->load->view("resp_fiscal/parecertb", $data);
    } 

    public function nparecertb()
    {
        $data = ["titulo"=>"Parecerer do Tribunal de Contas".CIDADE];
        $this->load->view("resp_fiscal/nparecertb", $data);
    } 

    public function dtparecertb()
    {
        $data = ["titulo"=>"Parecerer do Tribunal de Contas".CIDADE];
        $this->load->view("resp_fiscal/dtparecertb", $data);
    } 

    public function edparecertb()
    {
        $data = ["titulo"=>"Parecerer do Tribunal de Contas".CIDADE];
        $this->load->view("resp_fiscal/edparecertb", $data);
    } 



}
        
    /* End of file  Resp_fiscal.php */
        
                            